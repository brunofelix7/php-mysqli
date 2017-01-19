<?php

	//	Executa Querys
	function dbExecute($query, $insertId = false){
		$conn 	= dbConnect();
		$result = @mysqli_query($conn, $query) or die (mysqli_error($conn));
		if ($insertId) {
			$result = mysqli_insert_id($conn);
		}
		dbClose($conn);
		return $result;
	}

	//	Cadastrar
	function dbCreate($table, array $data, $insertId = false){
		$table 	= DB_PREFIX.'_'.$table;
		$data 	= dbEscape($data);
		$fields	= implode(', ', array_keys($data));
		$values	= "'".implode("', '", $data)."'";
		$query	= "INSERT INTO {$table} ({$fields}) VALUES ({$values})";
		return dbExecute($query, $insertId);
	}

	//	Listar
	function dbSelect($table, $params = null, $fields = '*'){
		$table 	= DB_PREFIX.'_'.$table;
		$params = ($params) ? " {$params}" : null;
		$query = "SELECT {$fields} FROM {$table}{$params}";
		$result = dbExecute($query);
		if(!mysqli_num_rows($result)){
			return false;
		}else{
			while($res = mysqli_fetch_assoc($result)){
				$data[] = $res;
			}
			return $data;
		}
	}

	//	Atualizar
	function dbUpdate($table, array $data, $where = null, $insertId = false){
		foreach ($data as $key => $value) {
			$fields[] = "{$key} = '{$value}'";
		}
		$fields = implode(', ', $fields);
		$table 	= DB_PREFIX.'_'.$table;
		$where = ($where) ? " WHERE {$where}" : null;
		$query = "UPDATE {$table} SET {$fields}{$where}";
		return dbExecute($query, $insertId);
	}

	//	Excluir
	function dbDelete($table, $where = null){
		$table 	= DB_PREFIX.'_'.$table;
		$where = ($where) ? " WHERE {$where}" : null;
		$query = "DELETE FROM {$table}{$where}";
		return dbExecute($query);
	}

?>
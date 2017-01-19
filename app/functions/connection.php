<?php

	//	Abre conexão com MySQL
	function dbConnect(){
		$conn = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) 
		or die (mysqli_connect_error($conn));
		mysqli_set_charset($conn, DB_CHARSET) or die (mysqli_error($conn));
		return $conn;
 	}


 	//	Fecha conexão com MySQL
 	function dbClose($conn){
 		@mysqli_close($conn) or die (mysqli_error($conn));
 	}


 	//	Anti SQL Injection - Limpa strings ou array
 	function dbEscape($dados){
 		$conn = dbConnect();
 		if(!is_array($dados)){
 			$dados = mysqli_real_escape_string($conn, $dados);			//	Insere contra-barras nas strings
 		}else{
 			$array = $dados;
 			foreach ($array as $keys => $values) {
 				$keys 	= mysqli_real_escape_string($conn, $keys);		//	Limpa as chaves
 				$values	= mysqli_real_escape_string($conn, $values);	//	Limpa os valores
 				$dados[$keys] = $values;								//	Constrói novamente o array
 			}
 		}
 		dbClose($conn);
 		return $dados;
 	}

?>
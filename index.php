<?php
	require('app/functions/config.php');
	require('app/functions/connection.php');
	require('app/functions/crud.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>CRUD PHP com MySQLi</title>
</head>
<body>

	<?php
		/*
		//	Test - Conexão e fechamento com MySQL
		$conn = dbConnect();
			//	...Transação
		dbClose($conn);

		//	Test - Anti SQL Injection
		$nome 	= "Bruno 'Felix'";
		$dados	= array(
			'nome' 	=> "Bruno 'Felix'",
			'idade'	=>	'27'
		);

		$dados	= dbEscape($dados);
		var_dump($dados);
		echo "<hr/>";

		//	Test - Execução de querys
		$query = "INSERT INTO clientes(nome, email, idade, status) 
				  VALUES('Bruno Felix', 'bruno.felix10@hotmail.com', 27, 1)";
		var_dump(dbExecute($query));
		*/


		/*
		//	Test - Cadastrar
		$cliente  = array(
			'nome' 		=> 'test',
			'email'		=> 'test@gmail.com',
			'idade'		=> 27,
			'status'	=> 1
		);

		var_dump(dbCreate('clientes', $cliente, true));
		*/
			

		/*
		//	Test - Listar
		$clientes = dbSelect('clientes', null);
		var_dump($clientes);
		*/


		/*
		//	Test - Atualizar
		$cliente = array(
			'nome' => 'bK',
			'status' => '10'
		);

		$clientes = dbUpdate('clientes', $cliente, "id = 1");

		if ($clientes) {
			echo "OK";
		}else{
			echo ":/";
		}
		*/


		/*
		//	Test - Excluir
		$dropCliente = dbDelete('clientes', 'id = 1');

		if ($dropCliente) {
			echo "OK";
		}else{
			echo ":/";
		}
		*/

	?>
	
</body>
</html>
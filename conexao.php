<?php 

try {

	
	$conexao = new PDO("mysql:dbname=crud;host=localhost", "root", "");
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	
} catch (PDOException $e) {
	echo "Erro ao conectar com o Banco de Dados! ".$e->getTraceAsString();
	echo "Erro ao conectar com o Banco de Dados!".$e->getMessage();
}



 ?>
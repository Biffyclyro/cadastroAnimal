<?php 
	include 'conexaoBD.php';

	function cadastrarCachorro($nome, $cc){
		conectar();
		query("INSERT INTO CACHORRO ( nome, cc) VALUES('$nome', '$cc')");
		fechar();
	}




?>
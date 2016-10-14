<?php
	include("connect.php");
	include("banco-produto.php");
	
	$id = $_POST['id'];
	removeProduto($connect, $id);

	header("Location: produtos-lista.php?removido=true");
	die();
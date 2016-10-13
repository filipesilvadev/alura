<?php
	include("header.php");
	include("connect.php");
	include("banco-produto.php");
	
	$name  = isset($_GET["name"])?$_GET["name"]:"Anônimo";
	$price = $_GET["price"];
	$description = $_GET["description"];

	 if(insereProduto($connect, $name, $price, $description)){ ?>
		<p class="alert-success">Produto <?=$name?>, <?=$price?> adicionado com sucesso!</p>
	<?php } else { 
		$errorMsg = mysqli_error($connect);
	?>
		<p class="alert-danger">O Produto <?=$name?>, não foi adicionado. Erro: <?=$errorMsg?></p>
	<?php } ?>

<?php include("footer.php") ?>
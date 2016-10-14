<?php
	include("header.php");
	include("connect.php");
	include("banco-produto.php");
	
	$name  = isset($_POST["name"])?$_POST["name"]:"Anônimo";
	$price = $_POST["price"];
	$description = $_POST["description"];

	 if(insereProduto($connect, $name, $price, $description)){ ?>
		<p class="alert-success">Produto <?=$name?>, <?=$price?> adicionado com sucesso!</p>
	<?php } else { 
		$errorMsg = mysqli_error($connect);
	?>
		<p class="alert-danger">O Produto <?=$name?>, não foi adicionado. Erro: <?=$errorMsg?></p>
	<?php } ?>

<?php include("footer.php") ?>
<?php include("header.php") ?>
<?php include("conection.php") ?>
	<?php 

		function insereProduto($conection, $name, $price) {
			$query = "INSERT INTO PRODUCTS (NAME, PRICE) VALUES ('{$name}', {$price})";
			return mysqli_query($conection, $query);
		}

		$name  = isset($_GET["name"])?$_GET["name"]:"Anônimo";
		$price = $_GET["price"];

	 if(insereProduto($conection, $name, $price)){ ?>
		<p class="alert-success">Produto <?=$name?>, <?=$price?> adicionado com sucesso!</p>
	<?php } else { 
		$errorMsg = mysqli_error($conection);
	?>
		<p class="alert-danger">O Produto <?=$name?>, não foi adicionado. Erro: <?=$errorMsg?></p>
	<?php } ?>

<?php include("footer.php") ?>
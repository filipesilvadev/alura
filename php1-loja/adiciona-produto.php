<?php include("header.php") ?>
	<?php 
		$name  = isset($_GET["name"])?$_GET["name"]:"Anônimo";
		$price = isset($_GET["price"])?$_GET["price"]:0;
	 ?>
	 <p class="alert-success">Produto <?=$name?>, <?=$price?> adicionado com sucesso!</p>
<?php include("footer.php") ?>
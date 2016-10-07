<?php include("header.php"); ?>
<?php include("conection.php");

	function listaProdutos($conection) {
		$products = [];
		$result  = mysqli_query($conection, "SELECT * FROM `products`");
		while ( $product = mysqli_fetch_assoc($result)) {
			 array_push($products, $product);
		}		
		return $products;
	}

$products = listaProdutos($conection);

foreach($products as $product) {
	echo $product['NAME']."<br>";
}

?>

 <?php include("footer.php"); ?>
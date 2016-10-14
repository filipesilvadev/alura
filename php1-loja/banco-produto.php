<?php
function listaProdutos($connect) {
	$products = [];
	$result  = mysqli_query($connect, "SELECT * FROM `products`");
	while ( $product = mysqli_fetch_assoc($result)) {
		 array_push($products, $product);
	}		
	return $products;
}

function insereProduto($connect, $name, $price, $description) {
	$query = "INSERT INTO PRODUCTS (NAME, PRICE, DESCRIPTION) VALUES ('{$name}', {$price}, '{$description}')";
	return mysqli_query($connect, $query);
}

function removeProduto($connect, $id) {
	$query = "DELETE FROM `products` WHERE ID = {$id}";
	return mysqli_query($connect, $query);
}
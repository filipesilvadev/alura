<?php
	function listaCategorias($connect) {
		$categorias = [];
		$query = "SELECT * FROM `CATEGORY`";
		$result = mysqli_query($connect, $query);
		while($categoria = mysqli_fetch_assoc($result)) {
			array_push($categorias, $categoria);
		}
		return $categorias;
	}
<?php
include("header.php");
include("connect.php");
include("banco-produto.php");

	if (array_key_exists("removido", $_GET) && $_GET['removido']==true) {
?>
		<p class="alert-success">Produto apagado com sucesso.</p>
<?php
	}
?>

<table class="table table-striped table-bordered">
	<?php
		$products = listaProdutos($connect);
		foreach($products as $product) {
	?>
		<tr>
			<td><?=$product['NAME'] ?></td>
			<td><?=$product['PRICE'] ?></td>
			<td>
				<a href="remove-produto.php?id=<?=$product['ID']?>" class="text-danger">Remover</a>
			</td>
		</tr>
	<?php
		}
	?>
</table>
 <?php include("footer.php"); ?>
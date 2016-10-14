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
			<td><?=$product['NAME']?></td>
			<td><?=$product['PRICE']?></td>
			<td><?=substr($product['DESCRIPTION'], 0, 40)?></td>
			<td>
				<!-- <a href="remove-produto.php?id=<?=$product['ID']?>" class="text-danger">Remover</a> -->
				<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$product['ID']?>">
					<button class="btn btn-danger">Remover</button>
				</form>
			</td>
		</tr>
	<?php
		}
	?>
</table>
 <?php include("footer.php"); ?>
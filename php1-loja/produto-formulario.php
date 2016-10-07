<?php include("header.php") ?>
	<form action="adiciona-produto.php">
		<table class="table">
			<tr>
				<td>Nome:</td>
				<td><input class="form-control" type="text" name="name"></td>
			</tr>		
			<tr>
				<td>Preço:</td>
				<td><input class="form-control" type="number" name="price"></td>
			</tr>
			<tr>
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
<?php include("footer.php") ?>
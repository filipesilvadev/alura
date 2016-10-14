<?php include("header.php") ?>
	<form action="adiciona-produto.php" method="post">
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
				<td>Descrição:</td>
				<td><textarea name="description" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
<?php include("footer.php") ?>
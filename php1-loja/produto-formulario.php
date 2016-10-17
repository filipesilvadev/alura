<?php
include("header.php");
include("connect.php");
include("banco-categoria.php");


?>
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
				<td>Categoria</td>
				<td>
<!-- 					<input type="radio" name="categoria-id" id="CARROS" value="1">
					<label for="CARROS">Carros</label>
					<input type="radio" name="categoria-id" id="MOTOS" value="2">
					<label for="MOTOS">Motos</label>
					<input type="radio" name="categoria-id" id="ACESSÓRIOS" value="3">
					<label for="ACESSÓRIOS">Acessórios</label> -->
					<?php foreach($categorias as $categoria) : ?>
						<input type="radio" name="categoria-id" id="<?=$categoria['NOME']?>" value="<?=$categoria['ID']?>">
					<?php endforeach ?>
				</td>
			</tr>
			<tr>
				<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
<?php include("footer.php") ?>
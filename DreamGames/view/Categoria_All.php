<html>
	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	</head>
	<body>
		<h2>Categoria</h2>

		<?php
			// se houver uma mensagem de erro, mostra na tela
			if ( isset($_SESSION['msg']) ){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

		<div class="text-right">
			<a class="btn btn-primary" href="?classe=Categoria&acao=create">Novo</a>
			<br>
			<br>
		</div>

		<table class="table">
			<tr>
				<th>Nome</th>
				<th>Imagem</th>
				<th></th>
			</tr>
			<?php foreach( $categorias AS $categoria ){ ?>
				<tr>
					<td><?=$categoria->nome?></td>
					<td><img src='<?=$categoria->imagem?>'></td>
					<td>
						<a class="btn btn-primary" href="?classe=Categoria&acao=read&id=<?=$categoria->id?>">Visualizar</a>					
						<a class="btn btn-primary" href="?classe=Categoria&acao=update&id=<?=$categoria->id?>">Alterar</a>						
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>

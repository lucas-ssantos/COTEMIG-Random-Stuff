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
		<h2>Produto</h2>

		<?php
			// se houver uma mensagem de erro, mostra na tela
			if ( isset($_SESSION['msg']) ){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

		<div class="text-right">
			<a class="btn btn-primary" href="?classe=Produto&acao=create">Novo</a>
			<br>
			<br>
		</div>

		<table class="table">
			<tr>
				<th>Código de Barras</th>
				<th>Nome</th>
				<th>Preço de Compra</th>
				<th>Preço de Venda</th>
				<th>Quantidade de Estoque</th>
				<th>Volume</th>
				<th>Unidade de Medida</th>
				<th>Foto</th>
				<th>ID da Categoria</th>
				<th>ID do Fornecedor</th>
				<th>ID do Item</th>
				<th></th>
			</tr>
			<?php foreach( $produtos AS $produto ){ ?>
				<tr>
					<td><?=$produto->codigo_barras?></td>
					<td><?=$produto->nome?></td>
					<td><?=$produto->preco_compra?></td>
					<td><?=$produto->preco_venda?></td>
					<td><?=$produto->quantidade?></td>
					<td><?=$produto->volume?></td>
					<td><?=$produto->unidade_medida?></td>
					<td><img src='<?=$produto->foto?>'></td>
					<td><?=$produto->id_categoria?></td>
					<td><?=$produto->id_fornecedor?></td>
					<td><?=$produto->id_item?></td>
					<td>
						<a class="btn btn-primary" href="?classe=Produto&acao=read&id=<?=$produto->id?>">Visualizar</a>					
						<a class="btn btn-primary" href="?classe=Produto&acao=update&id=<?=$produto->id?>">Alterar</a>						
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>

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
		<h2>Item</h2>

		<?php
			// se houver uma mensagem de erro, mostra na tela
			if ( isset($_SESSION['msg']) ){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

		<div class="text-right">
			<a class="btn btn-primary" href="?classe=Item&acao=create">Novo</a>
			<br>
			<br>
		</div>
		
		<table class="table">
			<tr>
				<th>Data</th>
				<th>Quantidade</th>
				<th>Descrição</th>
				<th>Preço Unitário</th>
				<th>Usuario ID</th>
				<th></th>
			</tr>
			<?php foreach( $items AS $item ){ ?>
				<tr>
					<td><?=$item->data?></td>
					<td><?=$item->quantidade?></td>
					<td><?=$item->preco_unitario?></td>
					<td><?=$item->usuario_id?></td>
					<td>
						<a class="btn btn-primary" href="?classe=Item&acao=read&id=<?=$item->id?>">Visualizar</a>					
						<a class="btn btn-primary" href="?classe=Item&acao=update&id=<?=$item->id?>">Alterar</a>						
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>

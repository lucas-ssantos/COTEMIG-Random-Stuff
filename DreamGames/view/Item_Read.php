<html>
	<head>
		
		<title>Visualizar Item</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Visualizar Item</h2>

			<div class="form-group">
				<label for="data">Data:</label>
				<input disabled type="date" class="form-control" id="data" name="data" value="<?= $item->getData() ?>">
			</div>

			<div class="form-group">
				<label for="quantidade">Quantidade:</label>
				<input disabled type="number" class="form-control" id="quantidade" name="quantidade" value="<?= $item->getQuantidade() ?>">
			</div>
			
			<div class="form-group">
				<label for="descricao">Descrição:</label>
				<input disabled type="text" class="form-control" id="descricao" name="descricao" value="<?= $item->getDescricao() ?>">
			</div>
			
			<div class="form-group">
				<label for="preco_unitario">Preço Unitário:</label>
				<input disabled type="number" class="form-control" id="preco_unitario" name="preco_unitario" value="<?= $item->getPrecoUnitario() ?>">
			</div>
			
			<div class="form-group">
				<label for="id_usuario">ID de Usuário:</label>
				<input disabled type="number" class="form-control" id="id_usuario" name="id_usuario" value="<?= $item->getIdUsuario() ?>">
			</div>
			
	</body>
</html>

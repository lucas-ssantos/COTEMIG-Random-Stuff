<html>
	<head>
		
		<title>Cadastrar Produto</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Novo Produto</h2>
		<form action="" method="post" id='form' enctype="multipart/form-data">

			<div class="form-group">
				<label for="codigo_barras">Código de Barras:</label>
				<input type="text" class="form-control" id="codigo_barras" name="codigo_barras">
			</div>
			
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" id="nome" name="nome">
			</div>
			
			<div class="form-group">
				<label for="preco_compra">Preço de Compra:</label>
				<input type="number" class="form-control" id="preco_compra" name="preco_compra">
			</div>
			
			<div class="form-group">
				<label for="preco_venda">Preço de Venda:</label>
				<input type="number" class="form-control" id="preco_venda" name="preco_venda">
			</div>
			
			<div class="form-group">
				<label for="quantidade_estoque">Quantidade de Estoque:</label>
				<input type="number" class="form-control" id="quantidade" name="quantidade">
			</div>
			
			<div class="form-group">
				<label for="volume">Volume:</label>
				<input type="number" class="form-control" id="volume" name="volume">
			</div>
			
			<div class="form-group">
				<label for="unidade_medida">Unidade de Medida:</label>
				<input type="text" class="form-control" id="unidade_medida" name="unidade_medida">
			</div>

			<div class="form-group">
				<label for="foto">Foto:</label>
				<input type="files" class="form-control" id="foto" name="foto">
			</div>
			
			<div class="form-group">
				<label for="id_categoria">ID da Categoria:</label>
				<input type="number" class="form-control" id="id_categoria" name="id_categoria">
			</div>
			
			<div class="form-group">
				<label for="id_fornecedor">ID do Fornecedor:</label>
				<input type="number" class="form-control" id="id_fornecedor" name="id_fornecedor">
			</div>
			
			<div class="form-group">
				<label for="id_item">ID do Item:</label>
				<input type="number" class="form-control" id="id_item" name="id_item">
			</div>

			<button type='submit'>Enviar</button>

		</form>
	</body>
</html>

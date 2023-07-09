<html>
	<head>
		
		<title>Visualizar Produto</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Visualizar Produto</h2>

			<div class="form-group">
				<label for="codigo_barras">Código de Barras:</label>
				<input disabled type="text" class="form-control" id="codigo_barras" name="codigo_barras" value="<?= $produto->getCodigoBarras() ?>">
			</div>
			
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input disabled type="text" class="form-control" id="nome" name="nome" value="<?= $produto->getNome() ?>">
			</div>
			
			<div class="form-group">
				<label for="preco_compra">Preço de Compra:</label>
				<input disabled type="number" class="form-control" id="preco_compra" name="preco_compra" value="<?= $produto->getPrecoCompra() ?>">
			</div>
			
			<div class="form-group">
				<label for="preco_venda">Preço de Venda:</label>
				<input disabled type="number" class="form-control" id="preco_venda" name="preco_venda" value="<?= $produto->getPrecoVenda() ?>">
			</div>
			
			<div class="form-group">
				<label for="quantidade_estoque">Quantidade em Estoque:</label>
				<input disabled type="number" class="form-control" id="quantidade_estoque" name="quantidade_estoque" value="<?= $produto->getQuantidadeEstoque() ?>">
			</div>
			
			<div class="form-group">
				<label for="volume">Volume:</label>
				<input disabled type="number" class="form-control" id="volume" name="volume" value="<?= $produto->getVolume() ?>">
			</div>
			
			<div class="form-group">
				<label for="unidade_medida">Unidade de Medida:</label>
				<input disabled type="text" class="form-control" id="unidade_medida" name="unidade_medida" value="<?= $produto->getUnidadeMedida() ?>">
			</div>

			<div class="form-group">
				<label for="foto">Foto:</label>
				<input disabled type="file" class="form-control" id="foto" name="foto" value="<?=$categoria->getFoto()?>">
			</div>
			
			<div class="form-group">
				<label for="categoria_id">ID de Categoria:</label>
				<input disabled type="number" class="form-control" id="id_categoria" name="id_categoria" value="<?= $produto->getCategoriaId() ?>">
			</div>
			
			<div class="form-group">
				<label for="fornecedor_id">ID do Fornecedor:</label>
				<input disabled type="number" class="form-control" id="id_fornecedor" name="id_fornecedor" value="<?= $produto->getFornecedorId() ?>">
			</div>
			
			<div class="form-group">
				<label for="item_id">ID do Item:</label>
				<input disabled type="number" class="form-control" id="id_item" name="id_item" value="<?= $produto->getItemId() ?>">
			</div>
	</body>
</html>

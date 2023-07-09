<html>
	<head>
		
		<title>Visualizar Fornecedor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Visualizar Fornecedor</h2>

			<div class="form-group">
				<label for="cnpj">CNPJ:</label>
				<input disabled type="nuber" class="form-control" id="cnpj" name="cnpj" value="<?= $fornecedor->getCNPJ() ?>">
			</div>

			<div class="form-group">
				<label for="logo">Logo:</label>
				<input disabled type="file" class="form-control" id="logo" name="logo" value="<?=$fornecedor->getLogo()?>">
			</div>
			
			<div class="form-group">
				<label for="nome_fantasia">Nome Fantasia:</label>
				<input disabled type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" value="<?= $fornecedor->getNomeFantasia() ?>">
			</div>
			
			<div class="form-group">
				<label for="razao_social">Razão Social:</label>
				<input disabled type="text" class="form-control" id="razao_social" name="razao_social" value="<?= $fornecedor->getRazaoSocial() ?>">
			</div>
	</body>
</html>

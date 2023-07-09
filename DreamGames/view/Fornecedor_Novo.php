<html>
	<head>
		
		<title>Cadastrar Fornecedor</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Novo Fornecedor</h2>
		<form action="" method="post" id='form' enctype="multipart/form-data">

			<div class="form-group">
				<label for="cnpj">CNPJ:</label>
				<input type="number" class="form-control" id="cnpj" name="cnpj">
			</div>

			<div class="form-group">
				<label for="logo">Logo:</label>
				<input type="files" class="form-control" id="logo" name="logo">
			</div>

			<button type='submit'>Enviar</button>

		</form>
	</body>
</html>

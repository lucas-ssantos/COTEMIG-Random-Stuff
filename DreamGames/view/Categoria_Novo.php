<html>
	<head>
		
		<title>Cadastrar Categoria</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Nova Categoria</h2>
		<form action="" method="post" id='form' enctype="multipart/form-data">

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Lucas João Silva">
			</div>

			<div class="form-group">
				<label for="imagem">Imagem:</label>
				<input type="files" class="form-control" id="imagem" name="imagem">
			</div>

			<button type='submit'>Enviar</button>

		</form>
	</body>
</html>

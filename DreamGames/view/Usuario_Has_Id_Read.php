<html>
	<head>
		
		<title>Visualizar Nível de Usuário</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Visualizar Nível de Usuário</h2>

			<div class="form-group">
				<label for="usuario_id">ID do Usuário:</label>
				<input disabled type="number" class="form-control" id="usuario_id" name="usuario_id" value="<?= $usuario_has_nivel->getUsuarioId() ?>">
			</div>

			<div class="form-group">
				<label for="nivel_id">ID do Nível:</label>
				<input disabled type="number" class="form-control" id="nivel_id" name="nivel_id" value="<?= $usuario_has_nivel->getNivelId() ?>">
			</div>
	</body>
</html>

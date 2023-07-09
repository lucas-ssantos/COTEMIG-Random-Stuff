<html>
	<head>
		
		<title>Atualizar Usuario</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Atualizar Usuario</h2>
		<form action="" method="post" id='form'>

			<div class="form-group">
				<label for="avatar">Avatar:</label>
				<input type="file" class="form-control" id="avatar" name="avatar" value="<?= $usuario->getAvatar() ?>">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" class="form-control" id="email" name="email" value="<?=$usuario->getEmail()?>">
			</div>
			
			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="password" class="form-control" id="senha" name="senha" value="<?=$usuario->getSenha()?>">
			</div>

			<button type='submit'>Enviar</button>

		</form>
	</body>
</html>

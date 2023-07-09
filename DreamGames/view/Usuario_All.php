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
		<h2>Usuario</h2>

		<?php
			// se houver uma mensagem de erro, mostra na tela
			if ( isset($_SESSION['msg']) )
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

		<div class="text-right">
			<a class="btn btn-primary" href="?classe=Usuario&acao=create">Novo</a>
			<br>
			<br>
		</div>

		<table class="table">
			<tr>
				<th>Avatar</th>
				<th>E-mail</th>
				<th>Senha</th>
				<th></th>
			</tr>
			<?php foreach( $usuarios AS $usuario ){ ?>
				<tr>
					<td><img src='<?=$categoria->avatar?>'></td>
					<td><?=$categoria->email?></td>
					<td><?=$categoria->senha?></td>
					<td>
						<a class="btn btn-primary" href="?classe=Usuario&acao=read&id=<?=$usuario->id?>">Visualizar</a>					
						<a class="btn btn-primary" href="?classe=Usuario&acao=update&id=<?=$usuario->id?>">Alterar</a>						
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>

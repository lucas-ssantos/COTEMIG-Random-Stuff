<?php
require_once('../model/Usuario.php');

class UsuarioController
{

	public function read()
	{
        $usuario = new Usuario($_GET['id']);
        $usuario->read();
        require_once 'aplicacao/view/Usuario_Read.php';
    }	
	
	public function update()
	{
        $usuario = new Usuario($_GET['id']);

        if ( isset($_FILES['avatar']) )
		{
			$usuario->setAvatar($_FILES['avatar']);
			$usuario->setEmail($_POST['email']);
			$usuario->setSenha($_POST['senha']);

            $usuario->save();
            header("Location: ./?classe=usuario&acao=all");

        }
        $usuario->update();
        require_once 'aplicacao/view/Ususario_Update.php';

    }
	
	public function all()
	{
        $obj = new Usuario();
        $usuario = $obj->usuario();
		require_once 'aplicacao/view/Usuario_All.php';
    }
	
	public function create()
	{
		$usuario = new Usuario();
		
		if ( isset($_FILES['avatar']) ){

			$usuario->setAvatar($_FILES['avatar']);
			$usuario->setEmail($_POST['email']);
			$usuario->setSenha($_POST['senha']);

            $usuario->create();
            header("Location: ./?classe=usuario&acao=all");

        }
		require_once 'aplicacao/view/Ususario_Novo.php';
	}

}

?>
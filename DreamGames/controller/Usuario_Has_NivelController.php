<?php
require_once('../model/Usuario_Has_Nivel.php');

class Usuario_Has_NivelController
{

	public function read()
	{
        $usuario_has_nivel = new UsuarioHasNivel($_GET['id']);
        $usuario_has_nivel->read();
        require_once 'aplicacao/view/Usuario_Has_Nivel_Read.php';
    }	
	
	public function update()
	{
        $usuario = new Usuario_Has_Nivel($_GET['usuario_id']);

        if ( isset($_POST['nivel_id']) )
		{
			$ususario_has_nivel->setNivelId($_POST['nivel_id']);

            $usuario_has_nivel->save();
            header("Location: ./?classe=usuario_has_id&acao=all");

        }
        $usuario_has_nivel->update();
        require_once 'aplicacao/view/Ususario_Has_Nivel_Update.php';

    }
	
	public function all()
	{
        $obj = new UsuarioHasNivel();
        $usuario_has_nivel = $obj->usuario_has_nivel();
		require_once 'aplicacao/view/Usuario_Has_Nivel_All.php';
    }
	
	public function create()
	{
		$usuario_has_nivel = new UsuarioHasNivel();
		
		if ( isset($_POST['nivel_id']) ){

			$ususario_has_nivel->setNivelId($_POST['nivel_id']);

            $usuario_has_nivel->create();
            header("Location: ./?classe=usuario_has_nivel&acao=all");

        }
		require_once 'aplicacao/view/Ususario_Has_Nivel_Novo.php';
	}

}

?>
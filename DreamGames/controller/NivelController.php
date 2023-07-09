<?php
require_once('../model/Nivel.php');

class NivelController
{

	public function read()
	{
        $nivel = new Nivel($_GET['id']);
        $nivel->read();
        require_once 'aplicacao/view/Nivel_Read.php';
    }	
	
	public function update()
	{
        $nivel = new Nivel($_GET['id']);

        if ( isset($_POST['descricao']) )
		{
			$nivel->setDescricao($_POST['descricao']);

            $nivel->save();
            header("Location: ./?classe=nivel&acao=all");

        }
        $nivel->update();
        require_once 'aplicacao/view/Nivel_Update.php';

    }
	
	public function all()
	{

        $obj = new Nivel();
        $nivel = $obj->nivel();
		require_once 'aplicacao/view/Nivel_All.php';

    }
	
	public function create()
	{
		$nivel = new Nivel();
		
		if ( isset($_POST['decricao']) ){

			$nivel->setDescricao($_POST['descricao']);

            $nivel->create();
            header("Location: ./?classe=nivel&acao=all");

        }
		require_once 'aplicacao/view/Nivel_Novo.php';
	}

}

?>
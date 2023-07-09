<?php
require_once('../model/Fornecedor.php');

class FornecedorController
{

	public function read()
	{
        $fornecedor = new Fornecedor($_GET['id']);
        $fornecedor->read();
        require_once 'aplicacao/view/Fornecedor_Read.php';
    }	
	
	public function update()
	{
        $fornecedor = new Fornecedor($_GET['id']);

        if ( isset($_POST['logo']) ){

            $fornecedor->setLogo($_POST['logo']);
            $fornecedor->setNomeFantasia($_POST['nome_fantasia']);
			$fornecedor->setRazaoSocial($_POST['razao_social']);

            $fornecedor->save();
            header("Location: ./?classe=fornecedor&acao=all");

        }
        $fornecedor->update();
        require_once 'aplicacao/view/Fornecedor_Update.php';

    }
	
	public function all()
	{

        $obj = new Fornecedor();
        $fornecedor = $obj->all();
		require_once 'aplicacao/view/Fornecedor_All.php';

    }
	
	public function create()
	{
		$fornecedor = new Fornecedor();
		
		if ( isset($_POST['logo']) ){

            $fornecedor->setLogo($_POST['logo']);
            $fornecedor->setNomeFantasia($_POST['nome_fantasia']);
			$fornecedor->setRazaoSocial($_POST['razao_social']);

            $fornecedor->create();
            header("Location: ./?classe=fornecedor&acao=all");

        }
		require_once 'aplicacao/view/Fornecedor_Novo.php';
	}

}

?>
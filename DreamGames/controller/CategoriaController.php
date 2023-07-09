<?php
require_once('../model/Categoria.php');

class CategoriaController
{

	public function read()
	{
        $categora = new Categoria($_GET['id']);
        $categoria->read();
        require_once 'aplicacao/view/Categoria_Read.php';
    }	
	
	public function update()
	{
        $categoria = new Categoria($_GET['id']);

        if ( isset($_POST['nome']) ){

            $categoria->setNome($_POST['nome']);
            $categoria->setImagem($_FILE['imagem']);

            $categoria->save();
            header("Location: ./?classe=categoria&acao=all");

        }
        $categoria->update();
        require_once 'aplicacao/view/Categoria_Update.php';

    }
	
	public function all()
	{

        $obj = new Categoria();
        $categoria = $obj->all();
		require_once 'aplicacao/view/Categoria_All.php';

    }
	
	public function create()
	{
		$categgoria = new Categoria();
		
		if ( isset($_POST['nome']) ){

            $categoria->setNome($_POST['nome']);
            $categoria->setImagem($_FILE['imagem']);

            $categoria->create();
            header("Location: ./?classe=categoria&acao=all");

        }
		require_once 'aplicacao/view/Categoria_Novo.php';
	}

}

?>
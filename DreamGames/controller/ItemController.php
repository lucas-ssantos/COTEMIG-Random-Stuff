<?php
require_once('../model/Item.php');

class ItemController
{

	public function read()
	{
        $item = new Item($_GET['id']);
        $item->read();
        require_once 'aplicacao/view/Item_Read.php';
    }	
	
	public function update()
	{
        $item = new Item($_GET['id']);

        if ( isset($_POST['data']) ){

            $item->setData($_POST['data']);
            $item->setQuantidade($_POST['quantidade']);
			$item->setDescricao($_POST['descricao']);
			$item->setPrecoUnitario($_POST['preco_unitario']);

            $item->save();
            header("Location: ./?classe=item&acao=all");

        }
        $item->update();
        require_once 'aplicacao/view/Item_Update.php';

    }
	
	public function all()
	{

        $obj = new Item();
        $item = $obj->all();
		require_once 'aplicacao/view/Item_All.php';

    }
	
	public function create()
	{
		$item = new Item();
		
		if ( isset($_POST['data']) ){

            $item->setData($_POST['data']);
            $item->setQuantidade($_POST['quantidade']));
			$item->setDescricao($_POST['descricao']);
			$item->setPrecoUnitaio($_POST['preco_unitario']);
			$item->setIdUsuario($_POST['id_ususario']);

            $item->create();
            header("Location: ./?classe=item&acao=all");

        }
		require_once 'aplicacao/view/Item_Novo.php';
	}

}

?>
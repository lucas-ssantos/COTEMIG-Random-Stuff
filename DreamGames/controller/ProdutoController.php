<?php
require_once('../model/Produto.php');

class ProdutoController
{

	public function read()
	{
        $produto = new Produto($_GET['id']);
        $produto->read();
        require_once 'aplicacao/view/Produto_Read.php';
    }	
	
	public function update()
	{
        $produto = new Produto($_GET['id']);

        if ( isset($_POST['codigo_barras']) )
		{
			$produto->setCodigoBarras($_POST['codigo_barras']);
			$produto->setNome($_POST['nome']);
			$produto->setPrecoCompra($_POST['preco_compra']);
			$produto->setPrecoVenda($_POST['preco_venda']);
			$produto->setQuantidade($_POST['quantidade']);
			$produto->setVolume($_POST['volume']);
			$produto->setUnidadeMedida($_POST['unidade_medida']);
			$produto->setFoto($_FILE['foto']);
			$produto->setCategoriaId($_POST['categoria_id']);
			$produto->setFornecedorId($_POST['fornecedor_id']);
			$produto->setItemId($_POST['item_id']);

            $produto->save();
            header("Location: ./?classe=produto&acao=all");

        }
        $produto->update();
        require_once 'aplicacao/view/Produto_Update.php';

    }
	
	public function all()
	{
        $obj = new Produto();
        $produto = $obj->produto();
		require_once 'aplicacao/view/Produto_All.php';
    }
	
	public function create()
	{
		$produto = new Produto();
		
		if ( isset($_POST['codigo_barras']) ){

			$produto->setCodigoBarras($_POST['codigo_barras']);
			$produto->setNome($_POST['nome']);
			$produto->setPrecoCompra($_POST['preco_compra']);
			$produto->setPrecoVenda($_POST['preco_venda']);
			$produto->setQuantidade($_POST['quantidade']);
			$produto->setVolume($_POST['volume']);
			$produto->setUnidadeMedida($_POST['unidade_medida']);
			$produto->setFoto($_FILE['foto']);
			$produto->setCategoriaId($_POST['categoria_id']);
			$produto->setFornecedorId($_POST['fornecedor_id']);
			$produto->setItemId($_POST['item_id']);

            $produto->create();
            header("Location: ./?classe=produto&acao=all");

        }
		require_once 'aplicacao/view/Produto_Novo.php';
	}

}

?>
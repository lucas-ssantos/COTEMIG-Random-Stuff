<?php

class Produto
{
	private $id;
	private $codigo_barras;
	private $nome;
	private $preco_compra;
	private $preco_venda;
	private $quantidade_estoque;
	private $volume;
	private $unidade_medida;
	private $foto;
	private $categoria_id;
	private $fornecedor_id;
	private $item_id;
	
	private $con;
	
	public function __construct($id=NULL, $codigo_barras=NULL, $nome=NULL, $preco_compra=NULL, $preco_venda=NULL, $quantidade_estoque=NULL, $volume=NULL, $unidade_medida=NULL, $foto=NULL, $categoria_id=NULL, $fornecedor_id=NULL, $item_id=NULL)
    {
        $this->id = $id;
		$this->codigo_barras = $codigo_barras;
        $this->nome = $nome;
        $this->preco_compra = $preco_compra;
		$this->preco_venda = $preco_venda;
		$this->quantidade_estoque = $quantidade_estoque;
		$this->volume = $volume;
		$this->unidade_medida = $unidade_medida;
		$this->foto = $foto;
		$this->categoria_id = $categoria_id;
		$this->fornecedor_id = $fornecedor_id;
		$this->item_id = $item_id;
		
		$this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }
	
	public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
	
	public function getCodigoBarras()
    {
        return $this->codigo_barras;
    }

    public function setCodigoBarras($codigo_barras)
    {
        $this->codigo_barras = $codigo_barras;
    }
	
	public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
	
	public function getPrecoCompra()
    {
        return $this->preco_compra;
    }

    public function setPrecoCompra($preco_compra)
    {
        $this->preco_compra = $preco_compra;
    }
	
	public function getPrecoVenda()
    {
        return $this->preco_venda;
    }

    public function setPrecoVenda($preco_venda)
    {
        $this->preco_venda = $preco_venda;
    }
	
	public function getQuantidadeEstoque()
    {
        return $this->quantidade_estoque;
    }

    public function setQuantidadeEstoque($quantidade_estoque)
    {
        $this->quantidade_estoque = $quantidade_estoque;
    }
	
	public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
	
	public function getUnidadeMedida()
    {
        return $this->unidade_medida;
    }

    public function setUnidadeMedida($unidade_medida)
    {
        $this->unidade_medida = $unidade_medida;
    }
	
	public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
	
	public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;
    }
	
	public function getFornecedorId()
    {
        return $this->fornecedor_id;
    }

    public function setFornecedorId($fornecedor_id)
    {
        $this->fornecedor_id = $fornecedor_id;
    }
	
	public function getItemId()
    {
        return $this->item_id;
    }

    public function setItemId($item_id)
    {
        $this->item_id = $item_id;
    }
	
	public function __toString()
    {
		return "$this->id - $this->codigo_barras - $this->nome - $this->preco_compra - $this->preco_venda - $this->quantidade_estoque - $this->volume - $this->unidade_medida - $this->foto - $this->categoria_id - $this->fornecedor_id - $this->item_id";
	}
	
	public function read()
	{
        $sql = $this->con->prepare("SELECT * FROM produto WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row )
		{
            $this->id = $row->id;
			$this->codigo_barras = $row->codigo_barras;
			$this->nome = $row->nome;
			$this->preco_compra = $row->preco_compra;
			$this->preco_venda = $row->preco_venda;
			$this->quantidade_estoque = $row->quantidade_estoque;
			$this->volume = $row->volume;
			$this->unidade_medida = $row->unidade_medida;
			$this->foto = $row->foto;
			$this->categoria_id = $row->categoria_id;
			$this->fornecedor_id = $row->fornecedor_id;
			$this->item_id = $row->item_id;
        }

    }
	
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM produto WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
			$this->codigo_barras = $row->codigo_barras;
			$this->nome = $row->nome;
			$this->preco_compra = $row->preco_compra;
			$this->preco_venda = $row->preco_venda;
			$this->quantidade_estoque = $row->quantidade_estoque;
			$this->volume = $row->volume;
			$this->unidade_medida = $row->unidade_medida;
			$this->foto = $row->foto;
			$this->categoria_id = $row->categoria_id;
			$this->fornecedor_id = $row->fornecedor_id;
			$this->item_id = $row->item_id;
        }

    }
	
	public function save()
	{
        $sql = $this->con->prepare("UPDATE produto SET codigo_barras=?, nome=?, preco_compra=?, preco_venda=?, quantidade_estoque=?, volume=?, unidade_medida=?, foto=?, categoria_id=?, fornecedor_id=?, item_id=?  WHERE id=?");
        $sql->execute( array($this->codigo_barras, $thid->nome, $this->preco_compra, $this->preco_venda, $this->quantidade_estoque, $this->volume, $this->unidade_medida, $this->foto, $this->categoria_id, $this->fornecedor_id, $this->item_id, $this->id) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Produto alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM produto");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO produto VALUES(NULL,?,?,?,?,?,?,?,?,?,?,?)");
		$sql->execute( array($this->codigo_barras, $thid->nome, $this->preco_compra, $this->preco_venda, $this->quantidade_estoque, $this->volume, $this->unidade_medida, $this->foto, $this->categoria_id, $this->fornecedor_id, $this->item_id));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Produto cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
}

?>
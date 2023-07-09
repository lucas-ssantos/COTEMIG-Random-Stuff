<?php

class Item
{
	private $id;
	private $data;
	private $quantidade;
	private $descricao;
	private $preco_unitario;
	private $ususario_id;
	
	private $con;
	
	public function __construct($id=NULL, $data=NULL, $quantidade=NULL, $descricao=NULL, $preco_unitario=NULL, $ususario_id=NULL)
    {
        $this->id = $id;
        $this->data = $data;
        $this->quantidade = $quantidade;
		$this->descricao = $descricao;
		$this->preco_unitario = $preco_unitario;
		$this->ususario_id = $ususario_id;
		
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
	
	public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
	
	public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
	
	public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
	
	public function getPrecoUnitario()
    {
        return $this->preco_unitario;
    }

    public function setPrecoUnitario($preco_unitario)
    {
        $this->preco_unitario = $preco_unitario;
    }
	
	public function getUsuarioId()
    {
        return $this->ususario_id;
    }

    public function setUsusarioId($ususario_id)
    {
        $this->ususario_id = $ususario_id;
    }
	
	public function __toString()
    {
		return "$this->id - $this->data - $this->quantidade - $this->descricao - $this->preco_unitario - $this->usuario_id";
	}
	
	public function read()
	{
        $sql = $this->con->prepare("SELECT * FROM item WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
            $this->data = $row->data;
            $this->quantidade = $row->quantidade;
			$this->descricao = $row->descricao;
			$this->preco_unitario = $row->preco_unitario;
			$this->usuario_id = $row->usuario_id;
        }

    }
	
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM item WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
            $this->data = $row->data;
            $this->quantidade = $row->quantidade;
			$this->descricao = $row->descricao;
			$this->preco_unitario = $row->preco_unitario;
			$this->usuario_id = $row->usuario_id;
        }

    }
	
	public function save()
	{
        $sql = $this->con->prepare("UPDATE item SET data=?, quantidade=?, descricao=?, preco_unitario=?, usuario_id=?  WHERE id=?");
        $sql->execute( array($this->data, $this->quantidade, $this->descricao, $this->preco_unitario, $this->usuario_id, $this->id) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Item alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM item");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO item VALUES(NULL,?,?,?,?,?)");
		$sql->execute( array($this->nome, $this->logo, $this->nome_fantasia, $this->razao_social));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Item cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
}

?>
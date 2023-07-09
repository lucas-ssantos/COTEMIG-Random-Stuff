<?php

class Nivel
{
	private $id;
	private $descricao;
	
	private $con;
	
	public function __construct($id=NULL, $descricao=NULL)
    {
        $this->id = $id;
        $this->descricao = $descricao;
		
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
	
	public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
	
	public function __toString()
    {
		return "$this->id - $this->descricao";
	}
	
	public function read()
	{
        $sql = $this->con->prepare("SELECT * FROM nivel WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
			$this->descricao = $row->descricao;
        }

    }
	
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM nivel WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
			$this->descricao = $row->descricao;
        }

    }
	
	public function save()
	{
        $sql = $this->con->prepare("UPDATE nivel SET descricao=?  WHERE id=?");
        $sql->execute( array($this->descricao, $this->id) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Nivel alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM nivel");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO nivel VALUES(NULL,?)");
		$sql->execute( array($this->descricao));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Nivel cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
}

?>
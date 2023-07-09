<?php

class Fornecedor
{
	private $id;
	private $cnpj;
	private $logo;
	private $nome_fantasia;
	private $razao_social;
	
	private $con;
	
	public function __construct($id=NULL, $cnpj=NULL, $logo=NULL, $nome_fantasia=NULL, $razao_social=NULL)
    {
        $this->id = $id;
        $this->logo = $logo;
        $this->nome_fantasia = $nome_fantasia;
		$this->razao_social = $razao_social;
		
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
	
	public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
	
	public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
    }
	
	public function getNomeFantasia()
    {
        return $this->nome_fantasia;
    }

    public function setNomeFantasia($nome_fantasia)
    {
        $this->nome_fantasia = $nome_fantasia;
    }
	
	public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }
	
	public function __toString()
    {
		return "$this->id - $this->logo - $this->nome_fantasia - $this->razao_social";
	}
	
	public function read()
	{
        $sql = $this->con->prepare("SELECT * FROM fornecedor WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
            $this->logo = $row->logo;
            $this->nome_fantasia = $row->nome_fantasia;
			$this->razao_social = $row->razao_social;
        }

    }
	
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM fornecedor WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
            $this->logo = $row->logo;
            $this->nome_fantasia = $row->nome_fantasia;
			$this->razao_social = $razao_social->razao_social;
        }

    }
	
	public function save()
	{
        $sql = $this->con->prepare("UPDATE fornecedor SET nome=?, logo=?, nome_fantasia=?, razao_social=?  WHERE id=?");
        $sql->execute( array($this->nome, $this->logo, $this->nome_fantasia, $this->razao_social, $this->id) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM fornecedor");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO fornecedor VALUES(NULL,?,?,?)");
		$sql->execute( array($this->logo, $this->nome_fantasia, $this->razao_social));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
}

?>
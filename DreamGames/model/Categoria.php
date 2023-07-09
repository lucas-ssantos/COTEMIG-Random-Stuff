<?php
class Categoria
{
	private $id;
	private $nome;
	private $imagem;
	
	private $con;
	
	public function __construct($id=NULL, $nome=NULL, $imagem=NULL)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->imagem = $imagem;
		
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
	
	public function getNome()
    {
        return $this->nome;
    }

    public function setId($nome)
    {
        $this->nome = $nome;
    }
	
	public function getImagem()
    {
        return $this->imagem;
    }

    public function setId($imagem)
    {
        $this->imagem = $imagem;
    }
	
	public function __toString()
    {
		return "$this->id - $this->nome - $this->imagem";
	}
	
	public function read()
	{
        $sql = $this->con->prepare("SELECT * FROM categoria WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
            $this->nome = $row->nome;
            $this->imagem = $row->imagem;
        }

    }
	
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM categoria WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
            $this->nome = $row->nome;
            $this->imagem = $row->imagem;
        }

    }
	
	public function save()
	{
        $sql = $this->con->prepare("UPDATE categoria SET nome=?, imagem=? WHERE id=?");
        $sql->execute( array($this->nome, $this->imagem, $this->id_cliente) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Categoria alterada com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM categoria");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO categoria VALUES(NULL,?,?)");
		$sql->execute( array($this->nome, $this->imagem));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Categoria cadastrada com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
}
?>
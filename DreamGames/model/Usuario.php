<?php

class Ususario
{
	private $id;
	private $avatar;
	private $email;
	private $senha;
	
	private $con;
	
	public function __construct($id=NULL, $avatar=NULL, $email=NULL, $senha=NULL)
    {
        $this->id = $id;
        $this->avatar = $avatar;
        $this->email = $email;
		$this->senha = $senha;
		
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
	
	public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }
	
	public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
	
	public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
	
	public function __toString()
    {
		return "$this->id - $this->avatar - $this->email - $this->senha";
	}
	
	public function read()
	{
        $sql = $this->con->prepare("SELECT * FROM usuario WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row )
		{
            $this->id = $row->id;
			$this->avatar = $row->avatar;
			$this->email = $row->email;
			$this->senha = $row->senha;
        }

    }
	
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM usuario WHERE id=?");
        $sql->execute( array($this->id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->id = $row->id;
			$this->avatar = $row->avatar;
			$this->email = $row->email;
			$this->senha = $row->senha;
        }

    }
	
	public function save()
	{
        $sql = $this->con->prepare("UPDATE usuario SET avatar=?, email=?, senha=? WHERE id=?");
        $sql->execute( array($this->avatar, $thid->email, $this->senha, $this->id) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuario alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM usuario");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO usuario VALUES(NULL,?,?,?)");
		$sql->execute( array($this->avatar, $thid->email, $this->senha));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuario cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
}

?>
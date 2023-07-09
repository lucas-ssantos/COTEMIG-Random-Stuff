<?php

class Usuario_Has_Nivel
{
	private $usuario_id;
	private $nivel_id;
	
	private $con;
	
	public function __construct($usuario_id=NULL, $nivel_id=NULL)
    {
        $this->usuario_id = $usuario_id;
        $this->nivel_id = $nivel_id;
		
		$this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }
	
	public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    public function setUsusarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }
	
	public function getNivelId()
    {
        return $this->nivel_id;
    }

    public function setNivelId($nivel_id)
    {
        $this->nivel_id = $nivel_id;
    }
	
	public function __toString()
    {
		return "$this->usuario_id - $this->nivel_id";
	}
	
	public function read()
	{
        $sql = $this->con->prepare("SELECT * FROM usuario_has_nivel WHERE usuario_id=?");
        $sql->execute( array($this->usuario_id) );
        $row = $sql->fetchObject();

        if( $row )
		{
            $this->usuario_id = $row->usuario_id;
			$this->level_id = $row->level_id;	
        }

    }
	
	public function update()
	{

        $sql = $this->con->prepare("SELECT * FROM usuario_has_nivel WHERE usuario_id=?");
        $sql->execute( array($this->usuario_id) );
        $row = $sql->fetchObject();

        if( $row ){
            $this->usuario_id = $row->usuario_id;
			$this->level_id = $row->level_id;	
        }

    }
	
	public function save()
	{
        $sql = $this->con->prepare("UPDATE usuario_has_nivel SET nivel_id=? WHERE usuario_id=?");
        $sql->execute( array($this->nivel_id, $this->usuario_id) );

        if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Nivel de Usuario alterado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
    }
	
	public function all()
	{

        $sql = $this->con->prepare("SELECT * FROM usuario_has_nivel");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);

        return $rows;
    }
	
	public function create()
	{	
		$sql = $this->con->prepare("INSERT INTO usuario_has_nivel VALUES(?,?)");
		$sql->execute( array($this->usuario_id, $thid->nivel_id));
		
		if($sql->errorCode()=='00000'){
            $_SESSION['msg'] = "<div class='alert alert-success'>Nivel de Usuario cadastrado com sucesso</div>";
        }
        else{
            $_SESSION['msg'] = "<div class='alert alert-danger'>".$sql->errorInfo()[2]."</div>";
        }

        header("Location: ../");
	}
}

?>
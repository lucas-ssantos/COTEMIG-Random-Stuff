<?php
session_start();

$con =  new PDO("mysql:host=localhost; dbname=trabalho","root","");
$adm= $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=? AND permissao='administrador'");
$sql= $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=? AND permissao='membro'");
$sql->execute( array($_POST['email'], md5($_POST['senha']) ) );
$adm->execute( array($_POST['email'], md5($_POST['senha']) ) );

$row = $sql->fetchObject();  // devolve um �nico registro
$rows = $adm->fetchObject();  // devolve um �nico registro

// Se o usu�rio foi localizado

if ($rows){
    $_SESSION['usuario'] = $rows;
    header("Location: arearestrita.html");
}else{

if ($row){
    $_SESSION['usuario'] = $row;
    header("Location: index.php");}
else {header("Location: loginmembros.html");}
    
}

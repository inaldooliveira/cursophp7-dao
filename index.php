<?php 

require_once("config.php");

//Seleciona todos os usuarios
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//Seleciona um usuario especifico
$root = new usuario();
$root->loadbyId(3);
echo $root;
?>
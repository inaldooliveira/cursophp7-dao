<?php 

require_once("config.php");

//Seleciona todos os usuarios
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


/*Seleciona um usuario especifico
$root = new usuario();
$root->loadbyId(3);
echo $root;*/

/*Carrega uma lista de Usuarios - O metodo é ESTATICO,
chama direto o metodo, usando ::   
$lista = usuario::getList();
echo json_encode($lista);*/

/*Carrega uma lista buscando pelo LOGIN   
$search = usuario::search("ib");
echo json_encode($search);*/

/*Carrega um usuario usando o LOGIN e a SENHA
$usuario = new usuario();
$usuario->login("ibk", "567");
echo $usuario;*/



/*Incluir REGISTROS
$aluno = new usuario("aluno4", "123");
$aluno->insert();
echo $aluno;*/

/*Alterando um USUARIO especifico
$usuario = new usuario();

$usuario->loadById(8);

$usuario->update("professor", "3");

echo $usuario;*/

/*Alterando um USUARIO especifico*/
$usuario = new usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>
<?php 

require_once("config.php");
//Carrega um usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

//Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// var_dump($search) ;

//Carrega um usuário usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("joão", "987654");
// echo $usuario;

//Criando um novo usuario
// $aluno = new Usuario("Ana", "ana123");
// $aluno->insert();
// echo $aluno;

//
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "prof123");

echo $usuario;
 ?>
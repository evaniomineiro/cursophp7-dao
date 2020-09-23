<?php

require_once("config.php");

//carrega 1 usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#-$");
//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("Caetano", "1234");

$aluno->insert();

echo $aluno;*/

//alterar um usuario 
/*$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor","!@#$%");
echo $usuario;*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

?>
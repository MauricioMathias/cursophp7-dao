<?php

require_once("config.php");

/*// Carrega um usuário
$user = new Usuario();
$user->loadbyId(3);

echo $user;*/

// Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

/*Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("u");
echo json_encode($search);
*/

/* carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("mauricio", "12345");
echo $usuario;
*/

/* Criando um novo usuário 
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;*/


$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("professor", "123programacao");

echo $usuario;

?>
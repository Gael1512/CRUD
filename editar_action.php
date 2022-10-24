<!--comandos de input post para receber os valores e bindvalue para efetivar esses valores-->

<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$valor = filter_input(INPUT_POST,'valor');
$dat_cadastro = filter_input(INPUT_POST,'dat_cadastro');
$status = filter_input(INPUT_POST,'status');
$descricao = filter_input(INPUT_POST,'descricao');

if($id && $nome && $valor && $dat_cadastro && $status && $descricao){
	$sql = $pdo->prepare("UPDATE usuarios SET nome = :nome, valor = :valor, dat_cadastro = :dat_cadastro, status = :status, descricao = :descricao WHERE id = :id");
	
	$sql->bindvalue(':id', $id);
	$sql->bindvalue(":nome", $nome);
	$sql->bindvalue(":valor", $valor);
	$sql->bindvalue(":dat_cadastro", $dat_cadastro);
	$sql->bindvalue(":status", $status);
	$sql->bindvalue(":descricao", $descricao);
	$sql->execute();

	header("Location: index.php");
	exit;
}else{
	header("Location: index.php");
	exit;
}
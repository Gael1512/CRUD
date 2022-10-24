<?php

require 'config.php'; // comando para ter acesso ao arquivo config.php

// variaveis para que toda informação colocada na página web seja adicionada ao banco de dados

$nome = filter_input(INPUT_POST,'nome');
$valor = filter_input(INPUT_POST,'valor');
$dat_cadastro = filter_input(INPUT_POST,'dat_cadastro');
$status = filter_input(INPUT_POST,'status');
$descricao = filter_input(INPUT_POST,'descricao');

$sql = $pdo->prepare("INSERT INTO usuarios (nome, valor, dat_cadastro, status, descricao) 
	VALUES (:nome, :valor, :dat_cadastro, :status, :descricao)");

$sql->bindvalue(":nome", $nome);
$sql->bindvalue(":valor", $valor);
$sql->bindvalue(":dat_cadastro", $dat_cadastro);
$sql->bindvalue(":status", $status);
$sql->bindvalue(":descricao", $descricao);

$sql->execute();

header("Location: index.php");

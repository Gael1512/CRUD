<?php
require 'config.php';

$usuarios = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
	$sql->bindvalue(':id', $id);
	$sql->execute();

	if($sql->rowCount() > 0){
		$usuarios = $sql->fetch(PDO::FETCH_ASSOC);
	} else {
		header("Location: index.php");
		exit;
	}
} else {
	header("Location: index.php");
}

?>

<h1>Editar Usuário</h1>
<form method="post" action="editar_action.php">
	<input type="hidden" name="id" value="<?=$usuarios['id'];?>">
	<label>
		Nome: <input type="text" name="nome" value="<?=$usuarios['nome'];?>" />
	</label>
	<br><br>
	<label>
		Valor: <input type="number" id="valor" name="valor" value="<?=$usuarios['valor'];?>" step="0.010">
	</label>
	<label>
		Data de Cadastro: <input type="date" name="dat_cadastro" value="<?=$usuarios['dat_cadastro'];?>" />
	</label>
	<br><br>
	<label>
		Status: <input type="text" name="status" value="<?=$usuarios['status'];?>" />
	</label>
	<br><br>
	<label>
		Descrição: <textarea name="descricao"></textarea>
	</label>
	<input type="submit" name="atualizar" value="Atualizar">
</form>

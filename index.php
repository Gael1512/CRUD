<!-------Utilizando o PHP para obter informações do config.php------>

<?php

require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if($sql->rowCount() > 0){
	$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>



<!-----Tag h1 para por no título----->
<h1>Lista de Usuários</h1>

<!---Lista em forma de Tabela onde mostrará os cadastros-->
<table border="1">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Valor</th>
		<th>Data de Cadastro</th>
		<th>Status</th>
		<th>Descrição</th>
		<th>Ações</th>
	</tr>
	<?php foreach ($lista as $usuarios): ?>
		<tr>
			<td><?=$usuarios['id'];?></td>
			<td><?=$usuarios['nome'];?></td>
			<td><?=$usuarios['valor'];?></td>
			<td><?=$usuarios['dat_cadastro'];?></td>
			<td><?=$usuarios['status'];?></td>
			<td><?=$usuarios['descricao'];?></td>
			<td>
				<a href="editar.php?id=<?=$usuarios['id'];?>">[ Editar ]</a>
				<a href="excluir.php?id=<?=$usuarios['id'];?>">[ Excluir ]</a>
			</td>
		</tr>

	<?php endforeach; ?>
</table>



<!------tag utilizada para lhe enviar para a página "Cadastrar Usuários"------>
<a href="cadastrar.php">Cadastrar Usuários</a>
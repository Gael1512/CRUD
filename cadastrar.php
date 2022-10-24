<!--Cabeçalho HTML com LABELS E INPUTS para por campos de entrada de informações e um botão de "salvar" as informações-->


<!DOCTYPE>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="">
	<title>Cadastro</title> 
</head>
<body>
	<h1>Cadastro</h1>
	<br><br>
	<form method="post" action="cadastrar_action.php">
		<input type="hidden" name="dat_cadastro">
		<label>
			Nome:<br>
			<input type="text" id="nome" name="nome" placeholder="Digite o nome" required>
		</label>
		<br><br>
		<label>
			Valor:<br>
			<input type="number" id="valor" name="valor" placeholder="Digite o valor" step="0.010" required>
		</label>
		<br><br>
		<label>
			Data de Cadastro:<br>
			<input type="date" id="data" name="dat_cadastro" required>
		</label>
		<br><br>
		<label>
			Status:<br>
			<input type="text" id="status" name="status" placeholder="Digite o status" required>
		</label>
		<br><br>
				<label>
			Descrição:<br>
			<textarea id="descricao" name="descricao" placeholder="Descrição" rows="4" cols="50"></textarea>
		</label>
		<br><br>
		<input type="submit" id="salvar" name="salvar">
	</form>
</body>
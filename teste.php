<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo de formulario</title>
</head>
<body>
	<h2>Exemplo de formulario</h2>
	<form name="cadastro" method="get" action="pagina_form.php">
		Nome: <input type="text" name="nome" size="40" maxlength="20"><br/><br/>
		Senha: <input type="password" name="senha" size="40" maxlength="20"><br/><br/>
		<input type="checkbox" name="termouso" value="termo"/>
		Aceito os termos de uso<br/><br/>
		<input type="radio" name="sexo" value="fem"/>Feminino
		<input type="radio" name="sexo" value="mas"/>Masculino
		<br/>
		<input type="hidden" name="login" value="admin">
		<br/>
		&nbsp; &nbsp; &nbsp;
		<input type="button" name="voltar">
		&nbsp; &nbsp; &nbsp;
		<input type="reset" name="limpar">
		&nbsp; &nbsp; &nbsp;
		<input type="submit" name="enviar">

		<a href="#" onclick="document.cadastro.reset()">Limpar</a>
	</form>

</body>
</html>
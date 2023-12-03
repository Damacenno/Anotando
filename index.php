<!DOCTYPE html>
<html>

	<head>
		<title>Anotando - Estudos</title>
		<link rel="icon" type="image/x-icon" href="assets/img/logos/favcon - lapis (2).png">
		<link rel="shortcut icon" href="img" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
	</head>

	<body style="flex-direction: column;">

		<?php
		if (isset($_GET["cadastro_sucesso"]) && $_GET["cadastro_sucesso"] === "true") {
			echo '
			<div class="mensagem mensagem-sucesso" style="color: white;">
				<div class="mensagem-começo"></div>
				<div style="width:100%;position: absolute;top: 0;padding-top: 3vh;">Cadastrado com sucesso!</div>
			</div>';
		}
		if (isset($_GET["cadastro_sucesso"]) && $_GET["cadastro_sucesso"] === "false") {
			echo '
			<div class="mensagem mensagem-erro" style="color: white;background-color:red">
				<div class="mensagem-começo"></div>
				<div style="width:100%;position: absolute;top: 0;padding-top: 3vh;">Email já cadastrado!</div>
			</div>';
		}
		if (isset($_GET["login_sucesso"]) && $_GET["login_sucesso"] === "false") {
			echo '
			<div class="mensagem mensagem-erro" style="color: white;background-color:red">
				<div class="mensagem-começo"></div>
				<div style="width:100%;position: absolute;top: 0;padding-top: 3vh;">Email ou Senha incorreto(s)!</div>
			</div>';
		}
		?>
		<div class="main">
			<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form action="functions/login_function.php" method="POST" enctype='multipart/form-data'>
					<label for="chk" aria-hidden="true">Cadastrar</label>
					<input type="text" name="cadastro_nome" placeholder="Digite um Apelido" required="">
					<input type="email" name="cadastro_email" placeholder="Digite seu Email" required="">
					<input type="password" name="cadastro_senha" placeholder="Digite sua Senha" required="">
					<button>Cadastrar</button>
				</form>
			</div>
			<div class="login">
				<form action="functions/login_function.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="login_email" placeholder="Email" required="">
					<input type="password" name="login_senha" placeholder="Password" required="">
					<button type="submit">Login</button>
				</form>
			</div>
		</div>
		<script>
			//Remove o parâmetro "cadastro_sucesso" da URL após a página ser carregada
			if (window.location.search.indexOf("cadastro_sucesso=true") !== -1 || window.location.search.indexOf("cadastro_sucesso=false") !== -1) {
				var newURL = window.location.protocol + "//" + window.location.host + window.location.pathname;
				history.replaceState({}, document.title, newURL);
			}


			var mensagemAnimacao = document.querySelector(".mensagem-começo");
			var mensagem = document.querySelector(".mensagem");

			if (mensagemAnimacao) {
				if (mensagem.classList.contains("mensagem-sucesso")) {
					setTimeout(function () {
						mensagemAnimacao.classList.add("mensagem-animacao");
					}, 500);
					setTimeout(function () {
						mensagem.classList.add("mensagem-fechada");
					}, 5000);
				}
				else if (mensagem.classList.contains("mensagem-erro")) {
					setTimeout(function () {
						mensagemAnimacao.classList.add("mensagem-fechada-animacao");
					}, 500);
					setTimeout(function () {
						mensagem.classList.add("mensagem-fechada");
					}, 5000);
				}
			}
		</script>
	</body>

</html>
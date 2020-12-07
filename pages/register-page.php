<?php
	session_start();
	
	if (isset($_SESSION['logged'])) {
		session_destroy();
	}

	if(!isset($_COOKIE['mode'])){
		setcookie('mode', 'light', time()+(60*60*24));
	}
?>

<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link href="../styles/floating-labels.css" rel="stylesheet">
	<link href="../styles/bootstrap-checkbox-color.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
</head>

<body>
	<div id="main_div" class="text-center text-dark" style="height: 100%;">
		<main class="d-flex justify-content-center align-items-center" style="height: 95%;">
			<form class="form-signin rounded-lg p-4 shadow-lg was-validated bg-light" style="width: 350px;"
				oninput='confirm_pw.setCustomValidity(confirm_pw.value != input_pw.value ? "As senhas não são iguais, se certifique de colocar a mesma senha nos dois campos." : "")'>
				<h1 class="h3 mb-4 font-weight-normal">Cadastro</h1>
				<div class="form-label-group">
					<input type="text" id="input_name" class="form-control" placeholder="Nome completo"  required autofocus 
					pattern="[A-zÀ-ž ]{4,50}" title="Seu nome precisa ter entre 4 e 50 letras e não pode conter números ou caracteres especiais">
					<label for="input_name">Nome completo</label>
				</div>
				<div class="form-label-group">
					<input type="email" id="input_email" class="form-control" placeholder="Email" required
					minlength="12" title="Seu email precisa ter ao menos 12 caracteres">
					<label for="input_email">Email</label>
				</div>
				<div class="form-label-group">
					<input type="password" id="input_pw" class="form-control" name="senha" placeholder="Senha" required minlength="6">
					<label for="input_pw">Senha</label>
				</div>
				<div class="form-label-group">
					<input type="password" id="confirm_pw" class="form-control" name="senha"
						placeholder="Confirme sua senha" required>
					<label for="confirm_pw">Confirme sua senha</label>
				</div>
				<input id="show_pw" type="checkbox" class="my-2">
  				<label for="show_pw" class="my-0"> Exibir senha</label>
				<button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Entrar</button>
				<div name="login" class="checkbox mt-2">
					<a href="login-page.php">Retornar ao login</a>
				</div>
			</form>
		</main>
		<button id="dm_btn" class="btn btn-link shadow-none" style="color:#007bff!important;">alternar modo
			escuro</button>
	</div>
	<footer>
		<script src="../scripts/register-script.js"></script>
		<script src="../scripts/darkmode.js"></script>
		<?php
			if($_COOKIE['mode'] == 'dark'){
				echo "<script>";
				echo "$('#main_div').addClass('bg-dark');";
				echo "</script>";
			}
		?>
	</footer>
</body>

</html>
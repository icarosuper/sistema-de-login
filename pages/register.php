<?php
	session_start();
	
	if (isset($_SESSION['logged'])) {
		$_SESSION['logged'] = false;
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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
</head>

<body>
	<div id="main_div" class="text-center text-dark" style="height: 100%;">
		<main class="d-flex justify-content-center align-items-center" style="height: 95%;">
			<form class="form-signin rounded-lg p-4 shadow-lg was-validated bg-light" style="width: 350px;"
				oninput='confirmpw.setCustomValidity(confirmpw.value != inputpw.value ? "As senhas não são iguais, se certifique de colocar a mesma senha nos dois campos." : "")'>
				<h1 class="h3 mb-4 font-weight-normal">Cadastro</h1>
				<div class="form-label-group">
					<input type="text" id="inputname" class="form-control" placeholder="Nome completo" required
						autofocus>
					<label for="inputname">Nome completo</label>
				</div>
				<div class="form-label-group">
					<input type="email" id="inputemail" class="form-control" placeholder="Email" required>
					<label for="inputemail">Email</label>
				</div>
				<div class="form-label-group">
					<input type="password" id="inputpw" class="form-control" name="senha" placeholder="Senha" required>
					<label for="inputpw">Senha</label>
				</div>
				<div class="form-label-group">
					<input type="password" id="confirmpw" class="form-control" name="senha"
						placeholder="Confirme sua senha" required>
					<label for="confirmpw">Confirme sua senha</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
				<div name="login" class="checkbox mt-3">
					<a href="login.php">Retornar ao login</a>
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
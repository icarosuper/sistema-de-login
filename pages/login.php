<?php
	session_start();

	if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
		echo '<script>';
		echo 'window.location.href = "logged.php";';
		echo '</script>';
	}
?>

<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
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
			<form class="form-signin rounded-lg p-5 shadow-lg bg-light" style="width: 350px;" method="POST">
				<h1 class="h3 mb-4 font-weight-normal">Login</h1>
				<div class="form-label-group">
					<input type="email" id="inputemail" class="form-control mb-2" placeholder="Email" required
						autofocus>
					<label for="inputemail">Email</label>
				</div>
				<div class="form-label-group">
					<input type="password" id="inputpw" class="form-control" name="senha" placeholder="Senha" required>
					<label for="inputpw">Senha</label>
				</div>
				<!----- O BOTÃO DE MANTER CONECTADO NÃO FUNCIONA AINDA ----->
				<div name="remember-me" class="checkbox mt-2 mb-1">
					<label class="justify-center">
						<input type="checkbox" value="remember-me">
						Me mantenha conectado<br>
						<a href="register.php">Criar uma conta</a>
					</label>
				</div>
				<button id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
			</form>
		</main>
		<button id="dm_btn" class="btn btn-link shadow-none" style="color:#007bff!important;">alternar modo
			escuro</button>
	</div>
	<footer>
		<script src="../scripts/login-script.js"></script>
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
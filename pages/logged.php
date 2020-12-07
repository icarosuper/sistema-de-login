<?php
	session_start();
	
	if (!(isset($_SESSION['logged'])) || $_SESSION['logged'] == false) {
		echo '<script>';
		echo 'window.location.href = "login.php";';
		echo '</script>';
	}
	
	if(isset($_POST['logout'])){
		unset($_SESSION['logged']);
		unset($_SESSION['name']);
		echo '<script>';
		echo 'window.location.href = "login.php";';
		echo '</script>';
	}
?>

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Seja bem vindo</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>
</head>
<body>
	<div id="main_div" class="text-center" style="height: 100%;">
		<div class="d-flex justify-content-center align-items-center" style="height: 80%;">
			<h1 id="welcome"></h1>
		</div>
		<div class="d-flex justify-content-center align-items-center" style="height: 10%;">
			<form method="POST">
				<input id="logout" type='submit' name='logout' value='Logout'>
			</form>
		</div>
		<button id="dm_btn" class="btn btn-link shadow-none" style="color:#007bff!important;">alternar modo escuro</button>
	</div>
	<footer>
		<script src="../scripts/darkmode.js"></script>
		<script>
			$(document).ready(function(){
				var username = "<?php echo $_SESSION['name']; ?>";
				$('#welcome').text('Bem vindo ' + username);
				$('#logout').click(function(){
					alert('Você não está mais logado!');
				})
			})			
		</script>
		<?php
			if($_COOKIE['mode'] == 'dark'){
				echo '<script>';
				echo 'GoDark();';
				echo '</script>';
			}
		?>
	</footer>
</body>
</html>
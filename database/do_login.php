<?php
	session_start();
	if(isset($_POST['do_login'])){
		$mysqli = new mysqli("localhost", "root", "", "loginsystem");

		$email=$_POST['email'];
		$pass=$_POST['password'];

		$stmt = $mysqli->stmt_init();
		$stmt->prepare("SELECT name FROM user WHERE email=? AND password=?");
		$stmt->bind_param('ss', $email, $pass);
		$stmt->execute();
		$stmt->bind_result($name);

		if($stmt->fetch()){
			$_SESSION['logged'] = true;
			$_SESSION['name']=$name;
			echo "success";
		} 
		else{
			echo "fail";
		}

		$stmt->close();
		$mysqli->close();
		exit();
	}
?>
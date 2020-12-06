<?php
	session_start();
	if(isset($_POST['do_register'])){
		$connect=mysqli_connect('localhost','root','','loginsystem');

		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$select_data=mysqli_query($connect,"INSERT INTO user VALUES(NULL,'$name','$email','$pass')");

		if(mysqli_affected_rows($connect) > 0){
			echo "success";
		} 
		else{
			echo "fail";
		}
		exit();
	}
?>
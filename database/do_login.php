<?php
	session_start();
	if(isset($_POST['do_login'])){
		$connect=mysqli_connect('localhost','root','','loginsystem');

		$email=$_POST['email'];
		$pass=$_POST['password'];
		$select_data=mysqli_query($connect,"SELECT * FROM user WHERE email='$email' and password='$pass'");

		if($row=mysqli_fetch_array($select_data)){
			$_SESSION['logged'] = true;
			$_SESSION['name']=$row['name'];
			echo "success";
		} 
		else{
			echo "fail";
		}
		exit();
	}
?>
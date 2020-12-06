<?php
	session_start();
	if(isset($_POST['do_login'])){
		$connect=mysql_connect('localhost','root','');
		$db=mysql_select_db('loginsystem');

		$email=$_POST['email'];
		$pass=$_POST['password'];
		$select_data=mysql_query("SELECT * FROM user WHERE email='$email' and login='$pass'");

		if($row=mysql_fetch_array($select_data)){
			$_SESSION['email']=$row['email'];
			echo "success";
		} 
		else{
			echo "fail";
		}
		exit();
	}
?>
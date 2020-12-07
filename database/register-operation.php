<?php
	// Include config file
	require_once 'config.php';
	
	// Define variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	// Processing form data when form is submitted
	if($_SERVER['REQUEST_METHOD'] == 'POST'){					
		if($stmt = $mysqli->prepare('SELECT id FROM users WHERE email = ?')){
			$stmt->bind_param('s', $email);
			
			// Attempt to execute the prepared statement
			if($stmt->execute()){
				$stmt->store_result();
				
				if($stmt->num_rows == 1){
					echo 'Esse email já está cadastrado, tente usar outro';
				}
			}

			// Close statement
			$stmt->close();
		}
	}
			
	if($stmt = $mysqli->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)')){
		$stmt->bind_param("sss", $name, $email, $pass);
		
		$pass = password_hash($pass, PASSWORD_DEFAULT); // Creates a password hash
		
		// Attempt to execute the prepared statement
		if($stmt->execute()){
			echo 'success';
		} else{
			echo 'Ocorreu um erro inesperado (Operação: envio de informações para o banco de dados)';
		}

		// Close statement
		$stmt->close();
	}

	// Close connection
	$mysqli->close();
?>
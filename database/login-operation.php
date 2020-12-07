<?php
	require_once 'config.php';
	
	// Define variables
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	// Processing form data when form is submitted
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		if($stmt = $mysqli->prepare('SELECT id, name, password FROM users WHERE email = ?')){
			$stmt->bind_param('s', $email);
			
			// Attempt to execute the prepared statement
			if($stmt->execute()){
				// Store result
				$stmt->store_result();
				
				// Check if username exists, if yes then verify password
				if($stmt->num_rows == 1){                    
					// Bind result variables
					$stmt->bind_result($id, $username, $hashed_password);
					if($stmt->fetch()){
						if(password_verify($pass, $hashed_password)){
							// Password is correct, so start a new session
							session_start();
							
							// Store data in session variables
							$_SESSION['logged'] = true;
							$_SESSION['id'] = $id;
							$_SESSION['username'] = $username;                            
							
							echo 'success';
						} 
						else{
							echo 'A senha inserida é inválida';
						}
					}
				} 
				else{
					echo 'Não há nenhuma conta registrada com esse email';
				}
			} 
			else{
				echo 'Ocorreu um erro inesperado (Operação: busca por email cadastrado)';
			}

			// Close statement
			$stmt->close();
		}
		
		// Close connection
		$mysqli->close();
	}
?>
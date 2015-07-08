<?php
$pdo = Database::connect();
						$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT count(*) FROM users where uemail = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($uemail));
			$count=$q->fetchColumn(); 
			
			if($count==0)
			{
				
						$sql = "INSERT INTO users (ufname,uemail,upwd,status) values(?, ?, ?, ?)";
						$q = $pdo->prepare($sql);
						$q->execute(array($firstname,$uemail,$hashedpassword,"inactive"));
						Database::disconnect();
							echo "Check mail and activate";
							$to  = $email;
				$subject = 'Activation Link';
				$message = 'www.highereg.com/settings/activation.php?uemail='.$uemail.'&?hashedpassword='.$hashedpassword.'';
				$headers = 'From: support@highereg.com' . "\r\n" .
					'Reply-To: support@highereg.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, $message, $headers);
				
			}
			else {
					echo "User Already Exists. Login :";
			}
?>
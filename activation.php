<?php
//write require database line
//

$email= $_GET['uemail'];
$hashedpassword =  $_GET['hashedpassword'];
$pdo = Database::connect();
						$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT count(*) FROM users where uemail = ?";
			$q = $pdo->prepare($sql);
			$q->execute(array($uemail));
			$count=$q->fetchColumn(); 
			if($count==1)
			{
				
						$sql = "UPDATE users  set status = ? WHERE uemail = ? AND hashedpassword=?";
				$q = $pdo->prepare($sql);
				$q->execute(array("active",$email,$hashedpassword));
						Database::disconnect();
							echo "Activated!Login to continue";
			}
			else {
					echo "Incorrect URL, redirect";
			}
			
?>
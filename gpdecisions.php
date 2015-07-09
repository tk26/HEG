<h3>GP List</h3>
                
                
<?php
include 'database.php';
				  
				   $pdo = Database::connect();
				   $sql = "SELECT * FROM gameprojects where status = 'pending' ";
				
				   foreach ($pdo->query($sql) as $row) {
                            echo '<p>';
                            echo '<p> Name:'. $row['gpname'] . '</p>';
							echo '<p> About :'. $row['gpabout'] . '</p>';
							echo '<p> Banner : <br> <img width="1000px" height="100px" src="'. $row['gpbanner'] . '"></p>';
							echo '<p> Team :'. $row['gpteam'] . '</p>';
                            echo '<p> Based In :'. $row['gpbasedin'] . '</p>';
							echo '<p> Funds : '. $row['gpfunds'] . '</p>';
							
							echo '<p>';
                                echo '<a class="btn btn-success" href="approve.php?id='.$row['gpid'].'&type=gp">Approve</a>';
								echo '&nbsp;';
								echo '<a class="btn btn-success" href="deny.php?id='.$row['gpid'].'&type=gp">Deny</a>';
                                
                                echo '</p>';

                            echo '</p>';
							echo '<hr>';
                   }
                   Database::disconnect();
?>
                  </tbody>
            </table>
				   
				   
			  
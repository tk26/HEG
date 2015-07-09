<h3>HW List</h3>
                
                
<?php
include 'database.php';
				  
				   $pdo = Database::connect();
				   $sql = "SELECT * FROM hardware where status = 'pending' ";
				
				   foreach ($pdo->query($sql) as $row) {
                            echo '<p>';
                            echo '<p> Name:'. $row['hwname'] . '</p>';
							echo '<p> About :'. $row['hwabout'] . '</p>';
							echo '<p> Banner : <br> <img width="1000px" height="100px" src="'. $row['hwbanner'] . '"></p>';
							echo '<p> Content :'. $row['hwcontent'] . '</p>';
							echo '<p> Team :'. $row['hwteam'] . '</p>';
                            echo '<p> Based In :'. $row['hwbasedin'] . '</p>';
							echo '<p> Funds : '. $row['hwfunds'] . '</p>';
							
							echo '<p>';
                                echo '<a class="btn btn-success" href="approve.php?id='.$row['hwid'].'&type=hw">Approve</a>';
								echo '&nbsp;';
								echo '<a class="btn btn-success" href="deny.php?id='.$row['hwid'].'&type=hw">Deny</a>';
                                
                                echo '</p>';

                            echo '</p>';
							echo '<hr>';
                   }
                   Database::disconnect();
?>
                  </tbody>
            </table>
				   
				   
			  
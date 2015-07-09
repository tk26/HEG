<h3>WVM List</h3>
                
                
<?php
include 'database.php';
				   				   $pdo = Database::connect();
				   $sql = "SELECT * FROM wvmedia where wvmstatus = 'pending' ";
				
				   foreach ($pdo->query($sql) as $row) {
                            echo '<p>';
                            echo '<p> Name:'. $row['wvmname'] . '</p>';
							echo '<p> Type :'. $row['wvmtype'] . '</p>';
							echo '<p> About :'. $row['wvmabout'] . '</p>';
							echo '<p> Banner : <br> <img width="1000px" height="100px" src="'. $row['wvmbanner'] . '"></p>';
							echo '<p> Content :'. $row['wvmcontent'] . '</p>';
							echo '<p> Team :'. $row['wvmteam'] . '</p>';
                            echo '<p> Based In :'. $row['wvmbasedin'] . '</p>';
							echo '<p> Funds : '. $row['wvmfunds'] . '</p>';
							
							echo '<p>';
                                echo '<a class="btn btn-success" href="approve.php?id='.$row['wvmid'].'&type=wvm">Approve</a>';
								echo '&nbsp;';
								echo '<a class="btn btn-success" href="deny.php?id='.$row['wvmid'].'&type=wvm">Deny</a>';
                                
                                echo '</p>';

                            echo '</p>';
							echo '<hr>';
                   }
                   Database::disconnect();
?>
                  </tbody>
            </table>
				   
				   
			  
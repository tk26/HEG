<?php
require 'database.php';
//session later
$id=$_GET['id'];
$type=$_GET['type'];

if($type=='gp')
{
	
//update gpid status as approved
$pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE gameprojects  set status = 'approved'  WHERE gpid = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
			echo "<script>window.location='gpdecisions.php'</script>";
}
if($type=='hw')
{
	
//update hwid status as approved
$pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE hardware  set status = 'approved'  WHERE hwid = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
			echo "<script>window.location='hwdecisions.php'</script>";
}
if($type=='wvm')
{
	
//update wvmid status as approved
$pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE wvmedia  set status = 'approved'  WHERE wvmid = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($id));
			echo "<script>window.location='wvmdecisions.php'</script>";
}

Database::disconnect();
?>

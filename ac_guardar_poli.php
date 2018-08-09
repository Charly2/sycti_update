<?php
header('Content-type: text/html; charset=UTF-8');
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}




$file = fopen("models/_poli/e.txt", "w");
//fputs($file, utf8_encode($_POST['e']). PHP_EOL);
fputs($file, $_POST['e']. PHP_EOL);
fclose($file);

$file = fopen("models/_poli/l.txt", "w");
//fputs($file, utf8_encode($_POST['l']). PHP_EOL);
fputs($file, $_POST['l']. PHP_EOL);
fclose($file);






include 'config/config.php';



header("Location: ac_politicas.php");


?>

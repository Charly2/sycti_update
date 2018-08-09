<?php
header('Content-type: text/html; charset=UTF-8');
session_start();

if (isset($_SESSION['user'])==0) {
		header("location:login.php");
		
		
	}else{
		$usuario= $_SESSION['user'];
		

	}


	if (!isset($_GET['s'])) {
		$s=0;
	}else{
		$s=$_GET['s'];
	}

include 'config/config.php';

$img_data = file_get_contents('models/_poli/l.txt', true);
$img_data2 = file_get_contents('models/_poli/e.txt', true);


/*
print_r($img_data);


print_r($img_data2);
exit(1);
*/



	/*print_r($img_data);
exit(1);*/
$vis = 'politicas';

include 'views/layaut.php';

?>

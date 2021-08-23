<?php 
	ob_start();
include_once("conn.php");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = $crud->getDeleteDetails($id);
	}
	if ($result) {
		header("Location: kurs1_1.php");
		ob_end_fluch();
	}else{
		echo "O'xshamadi";
	}

 ?>
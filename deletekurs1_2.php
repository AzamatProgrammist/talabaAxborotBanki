<?php 
	ob_start();
include_once("conn.php");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = $crud->getDeleteDetails1_2($id);
	}
	if ($result) {
		header("Location: kurs1_2.php");
		ob_end_fluch();
	}else{
		echo "O'xshamadi";
	}

 ?>
 <?php 

	$host = 'localhost';
	$user = 'root';
	$pass = 'root';
	$database = 'axbanki';
	$charset = 'utf8mb4';

	$dsn = "mysql:host=$host;dbname=$database;charset=$charset";

	try {
		$pdo = new PDO($dsn, $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
		throw new PDOException($e->getMessage());	
	}

	include_once('crud.php');
	$crud = new crud($pdo);

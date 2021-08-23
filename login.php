<?php 
	ob_start();
	include_once("conn.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	body{
		background-color: green;
	}
	.logins{
		box-sizing: border-box;
		background-color: #888;
		width: 30%;
		margin: auto;
		text-align: center;
		margin-top: 10%;
	}
	.passs{
		display: block;
		width: 90%;
		margin: auto;
		padding: 7px 0px;
		margin-bottom: 10px;
	}
	.box{
		padding: 30px;
	}
	.btn{
		margin-bottom: 10px;
	}
	label{
		font-size: 20px;
		color: #fff;
		font-family: sans-serif;
		box-sizing: border-box;

	}
	@media only screen and (max-width: 900px){
		.logins{
		box-sizing: border-box;
		background-color: #888;
		width: 60%;
		margin: auto;
		text-align: center;
		margin-top: 20%;
	}
	}
</style>
</head>
<body>
	<form class="logins" method="POST" action="">
		<div class="box">
			
		<label>Login:</label>
		<input class="passs" type="text" name="log" required>
		<label>Parol:</label>
		<input class="passs" type="password" name="par" required>
		<button class="btn" type="submit" name="kirish">Yangilash</button>
		</div>
	</form>

		<?php 

			if (isset($_POST['log'])) 
				{
					$result = $crud->getKurs1_1();
					$results = $crud->getKurs1_2();
					
					echo "ok";
					$log = $_POST['log'];
					$par = $_POST['par'];
					$stmt = $pdo->prepare("SELECT * FROM parol");
					$stmt->execute();
					if ($stmt->rowCount()>0)
					 {
						while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
						 {
						if (($row['login'] == $log) && ($row['parol'] == $par)) {
							$reg = $log;
							$res = $par;
							if ($result['guruh'] == $reg) {
								header("Location: kurs1_1.php");
								ob_end_flush();
							}elseif ($results['guruh'] == $reg) {
								header("Location: kurs1_2.php");
								ob_end_flush();
							}else{
								echo '<script>alert("xas")</script>';
							}
						}
					}
				}
			}
		 ?>
</body>
</html>


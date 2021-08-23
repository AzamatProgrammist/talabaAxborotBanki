<?php
	ob_start(); 
	include_once("conn.php");
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatiple" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>AxBanki.gul</title>
	</head>
<body>
	<div id="tepa">
		<div class="boy">			
		</div>
	</div>
	<div class="boy">
		<div id="header">
		
			<input class="check" type="checkbox" name="check">
			<span></span>
			<span></span>
			<span></span>
			<ul class="menu">
				<li><a href="index.php">Bosh sahifa</a></li>
				<li class="belgi"><a class="belgi" href="kurs1.php">1-kurs</a></li>
				<li><a href="kurs2.php">2-kurs</a></li>
				<li><a href="kurs3.php">3-kurs</a></li>
				<li><a href="kurs4.php">4-kurs</a></li>
			</ul>
			<form class="searchForma" action="search.php" method="GET">
				<button class="search" class="btn">Qidiruv......</button>
				<input class="search" type="search" name="q" placeholder="Qidiruv" required>
			</form>
		</div>
	</div>
	<div class="insertTalaba">
		
		<a href="insertTalaba.php" class="btns">Talaba Qo'shish</a>
		<a href="export.php" class="btns">Yuklash(to'liq)</a>
	</div>	
<?php 

	$stmt = $pdo->prepare("SELECT * FROM kurs1_1");
	$stmt->execute();
	if ($stmt->rowCount()>0)
	 {
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		 {
				extract($row);
				?>
					<div id="kurs11">
					 	<div class="container">
							<div class="box">
							 		<img src="uploads/<?php echo $row['img']; ?>" style="width: 100px; height: 100px;"><br>
								<p><?php echo $row['fio']; ?></p>
							 		<a href="kurs1_11.php?id=<?php echo $row['id'] ?>">Yangilash</a>
							 		<a onclick="return confirm('Siz <?php echo $row['fio'] ?>ni bazadan olib tashlamoqchimisiz')" href="deletekurs1_11.php?id=<?php echo $row['id'] ?>">O'chirish</a>
							 </div>
					 	</div>
				 	</div>
				<?php
			}	
	}

 ?>
	 
	<div class="clr"></div>
	<div class="footer">
		<p>copyright: &copy; Team Leader</p>
		<p>group by: 8-17</p>
		<p>sayt tayorladi: Azamat Irsaliyev</p>
		<p>Tel:99 463 64 75</p>
	</div>
</body>
</html>

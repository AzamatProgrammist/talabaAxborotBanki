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
<?php 
	if (isset($_GET['q'])) 
	{
		$q = trim($_GET['q']);
		$sql = "SELECT * FROM kurs1_1 WHERE viloyati LIKE '%$q%' OR tumani LIKE '%$q%' OR OTga_kirgan_yil LIKE '%$q%' OR fio LIKE '%$q%' ";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$count = $stmt->rowCount();

		$sql2 = "SELECT * FROM kurs1_2 WHERE viloyati LIKE '%$q%' OR tumani LIKE '%$q%' OR OTga_kirgan_yil LIKE '%$q%' OR fio LIKE '%$q%' ";
		$stmt2 = $pdo->prepare($sql2);
		$stmt2->execute();
		$count2 = $stmt2->rowCount();
		?>
			<form align="center" method="POST" action="exports.php">
				<input  type="hidden" name="q" value="<?php echo $q; ?>">
				<input type="submit"  class="btns" name="export" value="Yuklash">

			</form>
		<?php
		if (($count>0) || $count2>0) {
		
			if ($count>0) {
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		 {
		 		
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

	if($count2>0) {
		while ($row = $stmt2->fetch(PDO::FETCH_ASSOC))
		 {		
			?>
				<div id="kurs11">
				 	<div class="container">
						<div class="box">
						 		<img src="uploads/<?php echo $row['img']; ?>" style="width: 100px; height: 100px;"><br>
							<p><?php echo $row['fio']; ?></p>
						 		<a href="kurs1_12.php?id=<?php echo $row['id'] ?>">Yangilash</a>
						 		<a onclick="return confirm('Siz <?php echo $row['fio'] ?>ni bazadan olib tashlamoqchimisiz')" href="deletekurs1_11.php?id=<?php echo $row['id'] ?>">O'chirish</a>
						 </div>
				 	</div>
			 	</div>
			<?php	
		}
	}
}else{
		?>
		
			<div class="container">
				<h2 style="text-align: center;">Bazadan <?php echo $q; ?> ga doir malumot topilmadi bu yerda faqat talabalar malumotini izlashingiz mumkin!</h2>
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

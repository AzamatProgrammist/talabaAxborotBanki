<?php 
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
				<li><a href="kurs1.php">1-kurs</a></li>
				<li><a href="kurs2.php">2-kurs</a></li>
				<li class="belgi"><a class="belgi" href="kurs3.php">3-kurs</a></li>
				<li><a href="kurs4.php">4-kurs</a></li>
			</ul>
			<form class="searchForma" action="search.php" method="GET">
				<button class="search" class="btn">Qidiruv......</button>
				<input class="search" type="search" name="q" placeholder="Qidiruv" required>
			</form>
		</div>
	</div>
	<div id="kurs1">
		<div class="container">
			<h1>Informatika 3-kurs talabalarining axborot banki</h1>	
			<div class="box1">
				<img alt="8-17" src="img/6.jpg">
				<p><strong>7-15 Guruh</strong></p>
				<button class="batafsil"><a class="btns" href="kurs1_2.php">Batafsil</a></button>
			</div>
			<div class="box1">
				<img alt="8-17" src="img/5.jpg">
				<p><strong>8-15 Guruh</strong></p>
				<button class="batafsil"><a class="btns" href="kurs1_2.php">Batafsil</a></button>
			</div>
		</div>
	</div>
<div class="clr"></div>
	<div class="footer">
		<p>copyright: &copy; Team Leader</p>
		<p>group by: 8-17</p>
		<p>sayt tayorladi: Azamat Irsaliyev</p>
		<p>Tel:99 463 64 75</p>
	</div>
	
</body>
</html>

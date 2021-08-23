<?php 
	$title = "index";
	include_once("conn.php");
	$result = $crud->getRahbarlar();
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
				<li class="belgi"><a class="belgi" href="index.php">Bosh sahifa</a></li>
				<li><a href="kurs1.php">1-kurs</a></li>
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
	<div id="BoshTana">
		<h1>Informatika talabalarining axborot banki</h1>
		<?php foreach ($result as $key): ?>			
				<div class="container">
					<div class="box">
						<h3><?php echo $key['fakulteti']; ?></h3>
						<?php echo '<img src="data:image;base64,'.base64_encode($key['rasmi']).' " style="width: 100px; border-radius: 50%;">'; ?>
						<p><strong><?php echo $key['fio']; ?></strong></p>
						<button class="btn"><a href="rahbar.php?id=<?=$key['id']?>">Batafsil</a></button>
					</div>		
				</div>
		<?php endforeach; ?>
	</div>	
	<div class="clr">
	</div>
	<div class="footer">
		<p>copyright: &copy; Team Leader</p>
		<p>group by: 8-17</p>
		<p>sayt tayorladi: Azamat Irsaliyev</p>
		<p>Tel:99 463 64 75</p>
	</div>
</body>
</html>
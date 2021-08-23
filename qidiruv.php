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
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(document).ready(
				 function(){
				 	$("#dataForm #SelctAll").click(
				 			function(){
				 				$("#dataForm input[type='checkbox']").prop('checked', this.checked);
				 			}
				 		);
				 }
				);
			$(document).ready(
				 function(){
				 	$("#dataForm1 #SelctAll").click(
				 			function(){
				 				$("#dataForm1 input[type='checkbox']").prop('checked', this.checked);
				 			}
				 		);
				 }
				);
			$(document).ready(
				 function(){
				 	$("#dataForm2 #SelctAll").click(
				 			function(){
				 				$("#dataForm2 input[type='checkbox']").prop('checked', this.checked);
				 			}
				 		);
				 }
				);
			$(document).ready(
				 function(){
				 	$("#dataForm3 #SelctAll").click(
				 			function(){
				 				$("#dataForm3 input[type='checkbox']").prop('checked', this.checked);
				 			}
				 		);
				 }
				);
		</script>
	</head>
<body>
	
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
				<li><a href="kurs3.php">3-kurs</a></li>
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
			<h1>Qidiruv tizimi orqali kerakli ma'lumotni(<span style="color: #ff9aaa;">ko'rib</span>/(<span style="color: #ff9aaa;">yuklab</span>) oling</h1>

	<form action="download.php" method="GET">
		<div class="box">
			<div class="box1">
				<h3>1-kurs</h3><br>
				<label>7-17</label>
				<input type="checkbox" name="7-17" value="7-17"><br>
				<label>8-17</label>
				<input type="checkbox" name="8-17" value="8-17">
			</div>
			<div class="box1">
				<input style="width: 100%; margin: 10px 0px; padding: 5px 0px;" type="search" name="q" placeholder="Qidiruv" required>
				<button class="btns" style="margin-bottom: 10px; width: 100%">Yuklash(exel)</button>

			</div>
		</div>
	</form>
	<form action="download.php" method="GET">
		<div class="box">
			<div class="box1">
				<h3>2-kurs</h3><br>
				<label>7-16</label>
				<input type="checkbox" name="7-16" value="7-16"><br>
				<label>8-16</label>
				<input type="checkbox" name="8-16" value="8-16">
			</div>
			<div class="box1">
				<input style="width: 100%; margin: 10px 0px; padding: 5px 0px;" type="search" name="q" placeholder="Qidiruv" required>
				<button class="btns" style="margin-bottom: 10px; width: 100%">Yuklash(exel)</button>

			</div>
		</div>
	</form>
	<form action="download.php" method="GET">
		<div class="box">
			<div class="box1">
				<h3>3-kurs</h3><br>
				<label>7-15</label>
				<input type="checkbox" name="7-15" value="7-15"><br>
				<label>8-15</label>
				<input type="checkbox" name="8-15" value="8-15">
			</div>
			<div class="box1">
				<input style="width: 100%; margin: 10px 0px; padding: 5px 0px;" type="search" name="q" placeholder="Qidiruv" required>
				<button class="btns" style="margin-bottom: 10px; width: 100%">Yuklash(exel)</button>

			</div>
		</div>
	</form>
	<form action="download.php" method="GET">
		<div class="box">
			<div class="box1">
				<h3>4-kurs</h3><br>
				<label>7-14</label>
				<input type="checkbox" name="7-14" value="7-14"><br>
				<label>8-14</label>
				<input type="checkbox" name="8-14" value="8-14">
			</div>
			<div class="box1">
				<input style="width: 100%; margin: 10px 0px; padding: 5px 0px;" type="search" name="q" placeholder="Qidiruv" required>
				<button class="btns" style="margin-bottom: 10px; width: 100%;">Yuklash(exel)</button>

			</div>
		</div>
	</form>





<h1>Ma'lumotlarni tanlash orqali(<span style="color: #ff9aaa;">ko'rib</span>/(<span style="color: #ff9aaa;">yuklab</span>) oling</h1>



















				<div class="box">
					<form action="exel.php" id="dataForm" method="POST">
						<div class="box1">
							<h3>1-kurs</h3><br>
							<label>7-17</label>
							<input type="checkbox" name="7-17" value="7-17"><br>
							<label>8-17</label>
							<input type="checkbox" name="8-17" value="8-17">
						</div>
						<div class="box1">
							<input type="checkbox" name="SelctAll" id="SelctAll"><label for="SelctAll">SelectAll</label>

							<div class="qidTizim fio">
							<input type="checkbox" name="fio" value="fio"><label for="fio">fio</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="guruh" value="guruh"><label for="guruh">guruh</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="fakultet" value="fakultet"><label>fakultet</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="yonalishi" value="yonalishi"><label>yonalishi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="talim_turi" value="talim_turi"><label>talim_turi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kursi" value="kursi"><label>kursi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="viloyati" value="viloyati"><label>viloyati</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="tumani" value="tumani"><label>tumani</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="D_Y_J" value="D_Y_J"><label>D_Y_J</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tel_raqami" value="Tel_raqami"><label>Tel_raqami</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="PasSerRaq" value="PasSerRaq"><label>PasSerRaq</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="OTga_kirgan_yil" value="OTga_kirgan_yil"><label>OTga_kirgan_yil</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kurator" value="kurator"><label>kurator</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tug_yil_oy_kun" value="Tug_yil_oy_kun"><label>Tug_yil_oy_kun</label><br>
							</div>
						</div>
						<button class="btns" style="margin-bottom: 10px">Yuklash(exel)</button>
					</form>
			</div>
				<div class="box">
					<form action="exel.php" id="dataForm1" method="POST">
						<div class="box1">
							<h3>2-kurs</h3><br>
							<label>7-17</label>
							<input type="checkbox" name="7-17"><br>
							<label>8-17</label>
							<input type="checkbox" name="8-17">
						</div>
						<div class="box1">
							<input type="checkbox" name="SelctAll" id="SelctAll"><label for="SelctAll">SelectAll</label>

							<div class="qidTizim fio">
							<input type="checkbox" name="fio" value="fio"><label for="fio">fio</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="guruh" value="guruh"><label for="guruh">guruh</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="fakultet" value="fakultet"><label>fakultet</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="yonalishi" value="yonalishi"><label>yonalishi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="talim_turi" value="talim_turi"><label>talim_turi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kursi" value="kursi"><label>kursi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="viloyati" value="viloyati"><label>viloyati</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="tumani" value="tumani"><label>tumani</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="D_Y_J" value="D_Y_J"><label>D_Y_J</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tel_raqami" value="Tel_raqami"><label>Tel_raqami</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="PasSerRaq" value="PasSerRaq"><label>PasSerRaq</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="OTga_kirgan_yil" value="OTga_kirgan_yil"><label>OTga_kirgan_yil</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kurator" value="kurator"><label>kurator</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tug_yil_oy_kun" value="Tug_yil_oy_kun"><label>Tug_yil_oy_kun</label><br>
							</div>
						</div>
						<button class="btns" style="margin-bottom: 10px">Yuklash(exel)</button>
					</form>
			</div>
				<div class="box">
					<form action="exel.php" id="dataForm2" method="POST">
						<div class="box1">
							<h3>3-kurs</h3><br>
							<label>7-17</label>
							<input type="checkbox" name="7-17"><br>
							<label>8-17</label>
							<input type="checkbox" name="8-17">
						</div>
						<div class="box1">
							<input type="checkbox" name="SelctAll" id="SelctAll"><label for="SelctAll">SelectAll</label>

							<div class="qidTizim fio">
							<input type="checkbox" name="fio" value="fio"><label for="fio">fio</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="guruh" value="guruh"><label for="guruh">guruh</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="fakultet" value="fakultet"><label>fakultet</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="yonalishi" value="yonalishi"><label>yonalishi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="talim_turi" value="talim_turi"><label>talim_turi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kursi" value="kursi"><label>kursi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="viloyati" value="viloyati"><label>viloyati</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="tumani" value="tumani"><label>tumani</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="D_Y_J" value="D_Y_J"><label>D_Y_J</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tel_raqami" value="Tel_raqami"><label>Tel_raqami</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="PasSerRaq" value="PasSerRaq"><label>PasSerRaq</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="OTga_kirgan_yil" value="OTga_kirgan_yil"><label>OTga_kirgan_yil</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kurator" value="kurator"><label>kurator</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tug_yil_oy_kun" value="Tug_yil_oy_kun"><label>Tug_yil_oy_kun</label><br>
							</div>
						</div>
						<button class="btns" style="margin-bottom: 10px">Yuklash(exel)</button>
					</form>
			</div>
				<div class="box">
					<form action="exel.php" id="dataForm3" method="POST">
						<div class="box1">
							<h3>4-kurs</h3><br>
							<label>7-17</label>
							<input type="checkbox" name="7-17"><br>
							<label>8-17</label>
							<input type="checkbox" name="8-17">
						</div>
						<div class="box1">
							<input type="checkbox" name="SelctAll" id="SelctAll"><label for="SelctAll">SelectAll</label>

							<div class="qidTizim fio">
							<input type="checkbox" name="fio" value="fio"><label for="fio">fio</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="guruh" value="guruh"><label for="guruh">guruh</label><br>
							</div>
							<div class="qidTizim">
							<input type="checkbox" name="fakultet" value="fakultet"><label>fakultet</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="yonalishi" value="yonalishi"><label>yonalishi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="talim_turi" value="talim_turi"><label>talim_turi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kursi" value="kursi"><label>kursi</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="viloyati" value="viloyati"><label>viloyati</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="tumani" value="tumani"><label>tumani</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="D_Y_J" value="D_Y_J"><label>D_Y_J</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tel_raqami" value="Tel_raqami"><label>Tel_raqami</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="PasSerRaq" value="PasSerRaq"><label>PasSerRaq</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="OTga_kirgan_yil" value="OTga_kirgan_yil"><label>OTga_kirgan_yil</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="kurator" value="kurator"><label>kurator</label><br>
							</div>
							<div class="qidTizim">
								<input type="checkbox" name="Tug_yil_oy_kun" value="Tug_yil_oy_kun"><label>Tug_yil_oy_kun</label><br>
							</div>
						</div>
						<button class="btns" style="margin-bottom: 10px">Yuklash(exel)</button>
					</form>
				</div>
		</div>
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
















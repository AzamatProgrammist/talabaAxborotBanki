<?php 
	ob_start();
	include_once("conn.php");	
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$result = $crud->getKurs1_12($id);
	}
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
				<li><a href="#">3-kurs</a></li>
				<li><a href="#">4-kurs</a></li>
			</ul>
			<form class="searchForma" action="search.php" method="GET">
				<button class="search" class="btn">Qidiruv......</button>
				<input class="search" type="search" name="q" placeholder="Qidiruv" required>
			</form>
		</div>
	</div>
 	<?php if ($result['id'] == $id) { ?>
	<div id="kurs1_11">
		<div class="container">
			<h1 align="center">Informatika 1-kurs <?php echo $result['fio'] ?></h1>
			<img src="uploads/<?php echo $result['img']; ?>" style="width: 100px;">
			
			<form class="kurs1_11Forma" action="" method="POST" enctype="multipart/form-data">
				<br>
			<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
			<div class="forma">
				<label>Rasmi o'zgartirish:</label>
				<input  type="file" name="image">
				<input type="hidden" name="image_old" value="<?php echo $result['img'] ?>">
			</div>
			<div class="forma">
				<label>Guruh:</label>
				<input  type="text" name="guruh" value="<?php echo $result['guruh'] ?>">
			</div>
			<div class="forma">
				<label>fio:</label>
				<input type="text" name="fio" value="<?php echo $result['fio'] ?>">
			</div>
			<div class="forma">	
				<label>fakultet:</label>
				<input type="text" name="fakultet" value="<?php echo $result['fakultet'] ?>">
			</div>
			<div class="forma">	
				<label>yonalishi:</label>
				<input type="text" name="yonalishi" value="<?php echo $result['yonalishi'] ?>">
			</div>
			<div class="forma">	
				<label>talim_turi:</label>
				<input type="text" name="talim_turi" value="<?php echo $result['talim_turi'] ?>">
			</div>
			<div class="forma">	
				<label>kursi:</label>
				<input type="text" name="kursi" value="<?php echo $result['kursi'] ?>">
			</div>
			<div class="forma">	
				<label>viloyati:</label>
				<input type="text" name="viloyati" value="<?php echo $result['viloyati'] ?>">
			</div>
			<div class="forma">	
				<label>tumani:</label>
				<input type="text" name="tumani" value="<?php echo $result['tumani'] ?>">
			</div>
			<div class="forma">	
				<label>Doyimiy yashash joyi:</label>
				<input type="text" name="D_Y_J" value="<?php echo $result['D_Y_J'] ?>">
			</div>
			<div class="forma">	
				<label>Tel_raqami:</label>
				<input type="text" name="Tel_raqami" value="<?php echo $result['Tel_raqami'] ?>">
			</div>
			<div class="forma">	
				<label>PasSerRaq:</label>
				<input type="text" name="PasSerRaq" value="<?php echo $result['PasSerRaq'] ?>">
			</div>
			<div class="forma">	
				<label>OTga_kirgan_yil:</label>
				<input type="number" name="OTga_kirgan_yil" value="<?php echo $result['OTga_kirgan_yil'] ?>">
			<div class="forma">	
				<label>kurator:</label>
				<input type="text" name="kurator" value="<?php echo $result['kurator'] ?>">
			</div>
			<div class="forma">
				<label>Tug_yil_oy_kun:</label>
				<input type="date" name="Tug_yil_oy_kun" value="<?php echo $result['Tug_yil_oy_kun'] ?>">
			</div>
				<button class="btn" type="submit" name="update">Yangilash</button>
			</form>


		</div>
	</div>
	<?php } ?>

	<?php 
 	if (isset($_POST['update'])) {
	$old_image = $_POST['image_old'];

	if (isset($_FILES['image']['name']) && ($_FILES['image']['name']!="")) 
	{
	 	$new_image = $_FILES['image']['name'];
		$tmp_dir = $_FILES['image']['tmp_name'];
		$imageSize = $_FILES['image']['size'];
		$upload_dir = 'uploads/';
		$imgExt = strtolower(pathinfo($old_image,PATHINFO_EXTENSION));
		$valid_extension = array('jpeg', 'jpg', 'png', 'gif');
		$picProfile = rand(1000, 1000000).".".$imgExt;
		unlink($upload_dir.$old_image); 
		move_uploaded_file($tmp_dir, $upload_dir.$new_image);
	}
	else
	{
		$new_image = $old_image;
	}

 	$id = $_POST['id'];
 	$guruh = $_POST['guruh'];
 	$fio = $_POST['fio'];
 	$fakultet = $_POST['fakultet'];
 	$yonalishi = $_POST['yonalishi'];
 	$talim_turi =$_POST['talim_turi'];
 	$kursi = $_POST['kursi'];
 	$viloyati = $_POST['viloyati'];
 	$tumani = $_POST['tumani'];
 	$D_Y_J = $_POST['D_Y_J'];
 	$Tel_raqami = $_POST['Tel_raqami'];
 	$PasSerRaq = $_POST['PasSerRaq'];
 	$OTga_kirgan_yil = $_POST['OTga_kirgan_yil'];
 	$kurator = $_POST['kurator'];
 	$Tug_yil_oy_kun = $_POST['Tug_yil_oy_kun'];

 	$result = $crud->getUpdateKursBir($id, $new_image, $guruh, $fio, $fakultet, $yonalishi, $talim_turi, $kursi, $viloyati, $tumani, $D_Y_J, $Tel_raqami, $PasSerRaq, $OTga_kirgan_yil, $kurator, $Tug_yil_oy_kun);

		if ($result) {
			header("Location: kurs1_2.php");
			ob_end_fluch();
		}else{
			echo "O'xshamadii";
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

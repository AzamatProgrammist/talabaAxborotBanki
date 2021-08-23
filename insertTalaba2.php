<?php 
	ob_start();
	include_once "conn.php";
	$result = $crud->getKurs1_2();
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
	<div id="kurs1_11">
		<div class="container">
			<h1 align="center">Yangi talabaning ma'lumotini to'liq kiriting</h1>
			<form class="kurs1_11Forma" action="" method="POST" enctype="multipart/form-data">
				<br>
			<div class="forma">
				<label>Rasm qo'yish:</label>
				<input type="file" name="image" id="image" required>
			</div>
			<div class="forma">
				<label>Guruh:</label>
				<input  type="text" name="guruh" value="<?php echo $result['guruh'] ?>" required>
			</div>
			<div class="forma">
				<label>fio:</label>
				<input type="text" name="fio">
			</div>
			<div class="forma">	
				<label>fakultet:</label>
				<input type="text" name="fakultet" value="<?php echo $result['fakultet'] ?>" required>
			</div>
			<div class="forma">	
				<label>yonalishi:</label>
				<input type="text" name="yonalishi" value="<?php echo $result['yonalishi'] ?>" required>
			</div>
			<div class="forma">	
				<label>talim_turi:</label>
				<input type="text" name="talim_turi"  value="<?php echo $result['talim_turi'] ?>" required>
			</div>
			<div class="forma">	
				<label>kursi:</label>
				<input type="text" name="kursi"  value="<?php echo $result['kursi'] ?>" required>
			</div>
			<div class="forma">	
				<label>viloyati:</label>
				<input type="text" name="viloyati" required>
			</div>
			<div class="forma">	
				<label>tumani:</label>
				<input type="text" name="tumani" required>
			</div>
			<div class="forma">	
				<label>Doyimiy yashash joyi:</label>
				<input type="text" name="D_Y_J" required>
			</div>
			<div class="forma">	
				<label>Tel_raqami:</label>
				<input type="number" name="Tel_raqami" required>
			</div>
			<div class="forma">	
				<label>PasSerRaq:</label>
				<input type="text" name="PasSerRaq" required>
			</div>
			<div class="forma">	
				<label>OTga_kirgan_yil:</label>
				<input type="number" name="OTga_kirgan_yil" required>
			<div class="forma">	
				<label>kurator:</label>
				<input type="text" name="kurator" value="<?php echo $result['kurator'] ?>">
			</div>
			<div class="forma">
				<label>Tug_yil_oy_kun:</label>
				<input type="date" name="Tug_yil_oy_kun" required>
			</div>
				<button class="btn" type="submit" name="insert">Qo'shish</button>
			</form>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#insert').click(function(){
			var image_name = $('#image').val();
			if (image_name == '') {
				alert("Iltimos rasm tanlang");
				return false;
			}
			else
			{
				var = extension = $('#image').val().split('.').pop().tolowelCase();
				if (JQuery.inArray(extension, ['png','jpg','jpeg']) == -1) 
				{
					alert("Rasm tanlashingiz kerak");
					$('#image').val('');
					return false;
				}
			}
		})
	})
</script>

<?php 

	if (isset($_POST['insert'])) {
		$images = $_FILES['image']['name'];
		$tmp_dir = $_FILES['image']['tmp_name'];
		$imageSize = $_FILES['image']['size'];

		$upload_dir = 'uploads/';
		$imgExt = strtolower(pathinfo($images,PATHINFO_EXTENSION));
		$valid_extension = array('jpeg', 'jpg', 'png', 'gif');
		$picProfile = rand(1000, 1000000).".".$imgExt;
		move_uploaded_file($tmp_dir, $upload_dir.$images);
	 	//$img = base64_encode(file_get_contents($_FILES['image']['tmp_name']));	 	
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
	
		$results2 = $crud->getInsertDetails2($images, $guruh, $fio, $fakultet, $yonalishi, $talim_turi, $kursi, $viloyati, $tumani, $D_Y_J, $Tel_raqami, $PasSerRaq, $OTga_kirgan_yil, $kurator, $Tug_yil_oy_kun);
		if ($results2) {
			header("Location: kurs1_2.php");
			ob_end_fluch();
		}else{
			echo "Xatolik";
		}
	}

 ?> 
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
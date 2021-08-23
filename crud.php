<?php 
	 class crud{
		//Shaxsiy ma'lumotlar bazasi ob'ekti\
	 	private $db;
	 	//xususiy o'zgaruvchini ma'lumotlar bazasiga ulanishni boshlash uchun konstruktor
	 	function __construct($conn){
	 		$this->db = $conn;
	 	} 
	 	//5 Ma'lumotlar bazasini chaqirish Select
	 	public function getRahbarlar(){
	 		$sql = "SELECT * FROM rahbarlar";
	 		$result = $this->db->query($sql);
	 		return $result;
	 	}
	 	public function getKurs1_1(){
	 		$sql = "SELECT * FROM kurs1_1 ORDER BY id DESC";
	 		$stmt = $this->db->prepare($sql);
	 		$result = $stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
	 		return $result;
	 	}
	 	public function getKurs1_2(){
	 		$sql = "SELECT * FROM kurs1_2 ORDER BY id DESC";
	 		$stmt = $this->db->prepare($sql);
	 		$result = $stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
	 		return $result;
	 	}
	 	public function getKurs1_11($id){	
	 		$sql = "SELECT * FROM kurs1_1 WHERE id = :uid";
	 		$stmt = $this->db->prepare($sql);
	 		$stmt->execute(array(':uid'=>$id));
	 		$result = $stmt->fetch(PDO::FETCH_ASSOC);
	 		return $result;
	 	}
	 	public function getKurs1_12($id){	
	 		$sql = "SELECT * FROM kurs1_2 WHERE id = :uid";
	 		$stmt = $this->db->prepare($sql);
	 		$stmt->execute(array(':uid'=>$id));
	 		$result = $stmt->fetch(PDO::FETCH_ASSOC);
	 		return $result;
	 	}
	 	//1 ma'lumotlar bazasiga yangi talaba qo'shish Insert
	 	public function getInsertDetails($images, $guruh ,$fio ,$fakultet ,$yonalishi ,$talim_turi ,$kursi ,$viloyati ,$tumani ,$D_Y_J, $Tel_raqami, $PasSerRaq, $OTga_kirgan_yil, $kurator, $Tug_yil_oy_kun){
	 		
	 		try {
	 			$sql = "INSERT INTO kurs1_1(img, guruh, fio, fakultet, yonalishi, talim_turi, kursi, viloyati, tumani, D_Y_J, Tel_raqami, PasSerRaq, OTga_kirgan_yil, kurator, Tug_yil_oy_kun) VALUES( :images, :guruh, :fio, :fakultet, :yonalishi, :talim_turi, :kursi, :viloyati, :tumani, :D_Y_J, :Tel_raqami, :PasSerRaq, :OTga_kirgan_yil, :kurator, :Tug_yil_oy_kun)";
	 			$stmt = $this->db->prepare($sql);
	 			//bind all placeholders to the actual values
	 			$stmt->bindparam(':images',$images);
	 			$stmt->bindparam(':guruh',$guruh);
	 			$stmt->bindparam(':fio',$fio);
	 			$stmt->bindparam(':fakultet',$fakultet);
	 			$stmt->bindparam(':yonalishi',$yonalishi);
	 			$stmt->bindparam(':talim_turi',$talim_turi);
	 			$stmt->bindparam(':kursi',$kursi);
	 			$stmt->bindparam(':viloyati',$viloyati);
	 			$stmt->bindparam(':tumani',$tumani);
	 			$stmt->bindparam(':D_Y_J',$D_Y_J);
	 			$stmt->bindparam(':Tel_raqami',$Tel_raqami);
	 			$stmt->bindparam(':PasSerRaq',$PasSerRaq);
	 			$stmt->bindparam(':OTga_kirgan_yil',$OTga_kirgan_yil);
	 			$stmt->bindparam(':kurator',$kurator);
	 			$stmt->bindparam(':Tug_yil_oy_kun',$Tug_yil_oy_kun);
	 			//execute statement
	 			$result = $stmt->execute();
	 			return $result;
	 		} catch (PDOException $e){
	 			echo $e->getMessage();
	 		}
	 	}
//1-kurs 2-guruh talabalarini qo'shish
	 	public function getInsertDetails2($images, $guruh ,$fio ,$fakultet ,$yonalishi ,$talim_turi ,$kursi ,$viloyati ,$tumani ,$D_Y_J, $Tel_raqami, $PasSerRaq, $OTga_kirgan_yil, $kurator, $Tug_yil_oy_kun){
	 		
	 		try {
	 			$sql = "INSERT INTO kurs1_2(img, guruh, fio, fakultet, yonalishi, talim_turi, kursi, viloyati, tumani, D_Y_J, Tel_raqami, PasSerRaq, OTga_kirgan_yil, kurator, Tug_yil_oy_kun) VALUES( :images, :guruh, :fio, :fakultet, :yonalishi, :talim_turi, :kursi, :viloyati, :tumani, :D_Y_J, :Tel_raqami, :PasSerRaq, :OTga_kirgan_yil, :kurator, :Tug_yil_oy_kun)";
	 			$stmt = $this->db->prepare($sql);
	 			//bind all placeholders to the actual values
	 			$stmt->bindparam(':images',$images);
	 			$stmt->bindparam(':guruh',$guruh);
	 			$stmt->bindparam(':fio',$fio);
	 			$stmt->bindparam(':fakultet',$fakultet);
	 			$stmt->bindparam(':yonalishi',$yonalishi);
	 			$stmt->bindparam(':talim_turi',$talim_turi);
	 			$stmt->bindparam(':kursi',$kursi);
	 			$stmt->bindparam(':viloyati',$viloyati);
	 			$stmt->bindparam(':tumani',$tumani);
	 			$stmt->bindparam(':D_Y_J',$D_Y_J);
	 			$stmt->bindparam(':Tel_raqami',$Tel_raqami);
	 			$stmt->bindparam(':PasSerRaq',$PasSerRaq);
	 			$stmt->bindparam(':OTga_kirgan_yil',$OTga_kirgan_yil);
	 			$stmt->bindparam(':kurator',$kurator);
	 			$stmt->bindparam(':Tug_yil_oy_kun',$Tug_yil_oy_kun);
	 			//execute statement
	 			$result = $stmt->execute();
	 			return $result;
	 		} catch (PDOException $e){
	 			echo $e->getMessage();
	 		}
	 	}
	 	//sql bayonotini bajarishga tayyorlang ->private($sql);
	 	//barcha joylarni haqiqiy qiymatlarga bog'lash ->bindparam(':name', $name);
	 	//bayonotni ijro etish ->execute();
	 	//2 Ma'lumotlar bazasidagi talabani malumotini yangilash(o'zgartirish) Update
	 	public function getUpdateKurs($id, $picProfile, $guruh, $fio, $fakultet, $yonalishi, $talim_turi, $kursi, $viloyati, $tumani, $D_Y_J, $Tel_raqami, $PasSerRaq, $OTga_kirgan_yil, $kurator, $Tug_yil_oy_kun){
	 		try{
	 			$sql = "UPDATE `kurs1_1` SET `img` = :picProfile, `guruh` = :guruh, `fio` = :fio, `fakultet` = :fakultet, `yonalishi` = :yonalishi, `talim_turi` = :talim_turi, `kursi` = :kursi, `viloyati` = :viloyati, `tumani` = :tumani, `D_Y_J` = :D_Y_J, `Tel_raqami` = :Tel_raqami, `PasSerRaq` =  :PasSerRaq, `OTga_kirgan_yil` = :OTga_kirgan_yil, `kurator` = :kurator, `Tug_yil_oy_kun` = :Tug_yil_oy_kun WHERE id = :id";
				$stmt = $this->db->prepare($sql);
		 		$stmt->bindparam(':id',$id);
		 		$stmt->bindparam(':picProfile',$picProfile);
		 		$stmt->bindparam(':guruh',$guruh);
		 		$stmt->bindparam(':fio',$fio);
		 		$stmt->bindparam(':fakultet',$fakultet);
		 		$stmt->bindparam(':yonalishi',$yonalishi);
		 		$stmt->bindparam(':talim_turi',$talim_turi);
		 		$stmt->bindparam(':kursi',$kursi);
		 		$stmt->bindparam(':viloyati',$viloyati);
		 		$stmt->bindparam(':tumani',$tumani);
		 		$stmt->bindparam(':D_Y_J',$D_Y_J);
		 		$stmt->bindparam(':Tel_raqami',$Tel_raqami);
		 		$stmt->bindparam(':PasSerRaq',$PasSerRaq);
		 		$stmt->bindparam(':OTga_kirgan_yil',$OTga_kirgan_yil);
		 		$stmt->bindparam(':kurator',$kurator);
		 		$stmt->bindparam(':Tug_yil_oy_kun',$Tug_yil_oy_kun);
		 		$result = $stmt->execute();
		 		return $result;
		 	} catch (PDOException $e){
	 			echo $e->getMessage();
		 		}
	 	}
	 	public function getUpdateKursBir($id, $new_image, $guruh, $fio, $fakultet, $yonalishi, $talim_turi, $kursi, $viloyati, $tumani, $D_Y_J, $Tel_raqami, $PasSerRaq, $OTga_kirgan_yil, $kurator, $Tug_yil_oy_kun){
	 		try{

	 				$sql = "UPDATE `kurs1_2` SET `img` = :new_image, `guruh` = :guruh, `fio` = :fio, `fakultet` = :fakultet, `yonalishi` = :yonalishi, `talim_turi` = :talim_turi, `kursi` = :kursi, `viloyati` = :viloyati, `tumani` = :tumani, `D_Y_J` = :D_Y_J, `Tel_raqami` = :Tel_raqami, `PasSerRaq` =  :PasSerRaq, `OTga_kirgan_yil` = :OTga_kirgan_yil, `kurator` = :kurator, `Tug_yil_oy_kun` = :Tug_yil_oy_kun WHERE id = :id";
					$stmt = $this->db->prepare($sql);
			 		$stmt->bindparam(':id',$id);
			 		$stmt->bindparam(':new_image',$new_image);
			 		$stmt->bindparam(':guruh',$guruh);
			 		$stmt->bindparam(':fio',$fio);
			 		$stmt->bindparam(':fakultet',$fakultet);
			 		$stmt->bindparam(':yonalishi',$yonalishi);
			 		$stmt->bindparam(':talim_turi',$talim_turi);
			 		$stmt->bindparam(':kursi',$kursi);
			 		$stmt->bindparam(':viloyati',$viloyati);
			 		$stmt->bindparam(':tumani',$tumani);
			 		$stmt->bindparam(':D_Y_J',$D_Y_J);
			 		$stmt->bindparam(':Tel_raqami',$Tel_raqami);
			 		$stmt->bindparam(':PasSerRaq',$PasSerRaq);
			 		$stmt->bindparam(':OTga_kirgan_yil',$OTga_kirgan_yil);
			 		$stmt->bindparam(':kurator',$kurator);
			 		$stmt->bindparam(':Tug_yil_oy_kun',$Tug_yil_oy_kun);
	 			
		 		$result = $stmt->execute();
		 		return $result;
		 	} catch (PDOException $e){
	 			echo $e->getMessage();
		 		}
	 	}
	 	//3 Ma'lumotlar bazasidan biror talabani o'chirib tashlash Delete
	 	public function getDeleteDetails($id){
	 		try {
	 			$stmt_select = $this->db->prepare("SELECT * FROM kurs1_1 WHERE id = :sid");
	 			$stmt_select->execute(array(':sid'=>$id));
	 			$imgrow = $stmt_select->fetch(PDO::FETCH_ASSOC);
	 			unlink("uploads/".$imgrow['img']);
	 			$sql = "DELETE FROM kurs1_1 WHERE id = :uid";
		 		$stmt = $this->db->prepare($sql);
		 		$stmt->bindparam(':uid',$id);
		 		$result = $stmt->execute();
		 		return $result;
	 		} catch (Exception $e) {
	 			echo $e->getMessage();
	 		}
	 	}
	 	public function getDeleteDetails1_2($id){
	 		try {
	 			$stmt_select = $this->db->prepare("SELECT * FROM kurs1_2 WHERE id = :id");
	 			$stmt_select->execute(array(':id'=>$id));
	 			$imgrow = $stmt_select->fetch(PDO::FETCH_ASSOC);
	 			unlink("uploads/".$imgrow['img']);
	 			$sql = "DELETE FROM kurs1_2 WHERE id = :id";
		 		$stmt = $this->db->prepare($sql);
		 		$stmt->bindparam(':id',$id);
		 		$result = $stmt->execute();
		 		return $result;
	 		} catch (Exception $e) {
	 			echo $e->getMessage();
	 		}
	 	}
	 	//4 Ma'lumotlar bazasidan biror kishini to'liq malumotini ko'rish
	 	public function getParols(){
	 		$sql = "SELECT * FROM parol";
	 		$stmt = $this->db->prepare($sql);
	 		$parols = $stmt->execute();
			$parols = $stmt->fetch(PDO::FETCH_ASSOC);
	 		return $parols;
	 	}
	}

 ?>
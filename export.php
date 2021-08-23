<?php 
		$conn = mysqli_connect("localhost","root","root","axbanki");
		
		header('Content-type: application/vnd-ms-excel');
		$filename = "user_dala.xls";
		header("Content-Disposition:attachment;filename=\"$filename\"");
 ?>
 <table border="1">
 	<thead>
 		<tr>
 			<th>a1</th>
 			<th>a2</th>
 			<th>a3</th>
 			<th>a4</th>
 			<th>a5</th>
 			<th>a6</th>
 			<th>a7</th>
 			<th>a8</th>
 			<th>a9</th>
 			<th>a10</th>
 			<th>a11</th>
 			<th>a12</th>
 			<th>a13</th>
 			<th>a14</th>
 			<th>a15</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 			$sn = 1;
 			$sql = "SELECT * FROM kurs1_1";
 			$row = mysqli_query($conn, $sql);
 			while ($user_data=mysqli_fetch_assoc($row)) 
 			{

 		 ?>
 		<tr>
 			<td><?php echo $sn; ?></td>
 			<td><?php echo $user_data['guruh']; ?></td>
 			<td><?php echo $user_data['fio']; ?></td>
 			<td><?php echo $user_data['fakultet']; ?></td>
 			<td><?php echo $user_data['yonalishi']; ?></td>
 			<td><?php echo $user_data['talim_turi']; ?></td>
 			<td><?php echo $user_data['kursi']; ?></td>
 			<td><?php echo $user_data['viloyati']; ?></td>
 			<td><?php echo $user_data['tumani']; ?></td>
 			<td><?php echo $user_data['D_Y_J']; ?></td>
 			<td><?php echo $user_data['Tel_raqami']; ?></td>
 			<td><?php echo $user_data['PasSerRaq']; ?></td>
 			<td><?php echo $user_data['OTga_kirgan_yil']; ?></td>
 			<td><?php echo $user_data['kurator']; ?></td>
 			<td><?php echo $user_data['Tug_yil_oy_kun']; ?></td>
 		</tr>
 	<?php
 		$sn++;
 	 } ?>
 	</tbody>
 </table>
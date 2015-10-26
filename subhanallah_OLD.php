<style type="text/css">.td1{width:100px}</style>
<?php

session_start();

include "koneksi.php";

if($_SESSION['HAK'] = "admin"){

   if(isset($_POST[HAPUS]))   {

	   $id = $_POST[ID];
	   

	   $jumlah = count($id);
   

	   //echo $jumlah;

	   

	   

	   for($i=0;$i<=$jumlah;$i++)

	   {

		   //echo $id[$i]."<br>";   

		   

		   $sql_hapus = "DELETE FROM buyer WHERE ID = '$id[$i]'";

		   

		   //$hasil_hapus = mysqli_query($mysqli, $sql_hapus);
		   $hasil_hapus = mysql_query($sql_hapus);

		   

	   }

	      

		echo "<script>alert('Hapus $jumlah record Berhasil')</script>";  

	   

   }









?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>
<body bgcolor="#F0EEEE">
<table width="900" border="0" align="center">
<tr>
<td align="center"><a href="logout.php"><input type="button" value="Sign Out" /></a></td>
<td align="center"><a href="broadcast-email.php"><input type="button" value="Email" /></a></td>
<td align="center"><a href="reportperhari.php"><input type="button" value="Report Per Hari Ini" /></a></td>
<td align="center"><a href="reportpernegara.php"><input type="button" value="Report Per Negara" /></a></td>
<td align="center"><a href="reportperbenua.php"><input type="button" value="Report Per Benua" /></a></td>
</tr>
</table>
<form method="post" action="subhanallah.php">
<table width="900px" border="1" align="center" cellspacing="0" cellpadding="2" bgcolor="#FFFFFF" style="font-family:'Trebuchet MS',Arial,Helvetica,sans-serif">
<tr>
<th colspan="10" align="center">Tabel Hasil Pameran</th>
</tr>
<tr>
<th>Date Time</th>
<th>Benua</th>
<th>Country</th>
<th>Company</th>
<th>Buyer</th>
<th class="td1">Email</th>
<th>Status</th>
<th>Action</th>
</tr>
<br />
<?php

  $sql = "SELECT * FROM buyer order by ID DESC";

  $hasil_sql = mysql_query($sql);
 $total= mysql_num_rows($hasil_sql);
  

  while($data = mysql_fetch_assoc($hasil_sql))

  {

	echo "<tr>";

	 // echo "<td align='center'><input type='checkbox' name='ID[]' value='$data[ID]'></td>";

	  echo "<td align='center'>$data[tgl]<br>$data[wkt]</td>";
	  
	  echo "<td align='center'>$data[benua]</td>";

	  echo "<td align='center'>$data[negara]</td>";

	  echo "<td align='center'>$data[company]</td>";

	  echo "<td align='center'>$data[buyer]</td>";

	  echo "<td align='center' class='td1'>$data[email]</td>";

	  //echo "<td align='center'>$data[status]</td>";

  	  echo "<td align='center'>$data[progress]</td>";
	  
	  //echo "<td align='center'>$data[PIC]</td>";

	  echo "<td align='center'><a href='detail.php?ID=$data[ID]' style='text-decoration:none;'><input type='button' value='Detail' style='background-color:#F00;color:#FFF;'></a></td>";

	

	echo "</tr>";  

  }


?>
<tr>
<td colspan="6" align="right"><b>total visitor</b></td>
<td colspan="4" align="center"><b><?php echo $total; ?></b></td>
</tr>
<tr>
<td colspan="10" align="right"></td>
</tr>
</table>
</form>
</body>
</html>
<?php

}

else

{

  echo "Anda Tidak Berhak";	

}

?>
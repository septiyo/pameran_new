<?php

session_start();

include "koneksi.php";





if($_SESSION['HAK'] = "admin")

{





   if(isset($_POST[HAPUS]))

   {

	   $id = $_POST[ID];

	   

	   $jumlah = count($id);

	   

	   //echo $jumlah;

	   

	   

	   for($i=0;$i<=$jumlah;$i++)

	   {

		   //echo $id[$i]."<br>";   

		   

		   $sql_hapus = "DELETE FROM buyer WHERE ID = '$id[$i]'";

		   

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

<!--a href="logout.php" style="margin-left:250px;text-decoration:none;"><input type="button" value="Sign Out" /></a>
<a href="reportperhari.php" style="margin-left:130px;text-decoration:none;"><input type="button" value="Report Per Hari Ini" /></a>
<a href="reportpernegara.php" style="margin-left:150px;text-decoration:none;"><input type="button" value="Report Per Negara" /></a>
<a href="reportperbenua.php" style="margin-left:150px;text-decoration:none;"><input type="button" value="Report Per Benua" /></a-->

<table width="900" border="0" align="center">
<tr>
<td width="134" align="center"><a href="logout.php"><input type="button" value="Sign Out" /></a></td>
<td width="148" align="center"><a href="subhanallah.php"><input type="button" value="Home" /></a></td>
<td width="197" align="center"><a href="reportperhari.php"><input type="button" value="Report Per Hari Ini" /></a></td>
<td width="219" align="center"><a href="reportpernegara.php"><input type="button" value="Report Per Negara" /></a></td>
<td width="180" align="center"><a href="reportperbenua.php"><input type="button" value="Report Per Benua" /></a></td>
</tr>
</table>

<form method="post" action="subhanallah.php">

 <table width="900" border="1" align="center" cellspacing="0" cellpadding="3" bgcolor="#FFFFFF"

  style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">

 <tr>
    <th colspan="8" align="center">Tabel Hasil Pameran Per Negara</th>
 </tr>

 <tr>

    <!--th>Check</th-->

    <th>Date Time</th>

    <th>Country</th>

    <th>Company</th>

    <th>Buyer</th>

    <th>Email</th>

    <th>Status</th>

    <th>Action</th>
	
 </tr> 
<!--label><input type="checkbox" name="checkbox" value="value">Text</label--><br />

<?php

  $sql = "SELECT * FROM buyer ORDER BY negara ASC";

  $hasil_sql = mysql_query($sql);
  $total2 = mysql_num_rows($hasil_sql);

  
  

  while($data = mysql_fetch_assoc($hasil_sql))

  {

	echo "<tr>";

	 # echo "<td align='center'><input type='checkbox' name='ID[]' value='$data[ID]'></td>";

	  echo "<td align='center'>$data[tgl]<br>$data[wkt]</td>";

	  echo "<td bgcolor='#FFE8E8' align='center'>$data[negara]</td>";

	  echo "<td align='center'>$data[company]</td>";

	  echo "<td align='center'>$data[buyer]</td>";

	  echo "<td align='center'>$data[email]</td>";

	  echo "<td align='center'>$data[status]</td>";

	  echo "<td align='center'><a href='detail.php?ID=$data[ID]' style='text-decoration:none;'><input type='button' value='Detail' style='background-color:#F00;color:#FFF;'></a></td>";


	echo "</tr>";  

	  

  }







?>

<tr>

  <!--td colspan="8" align="right"><input type="submit" value="HAPUS" name="HAPUS" /></td-->
<td colspan="5" align="right"><b>Total Visitor</b></td><td colspan="2"><b><?php echo $total2; ?></b></td>
</tr>

 </table>

 </form> 
 
 <br />
 
<table width="900" border="1" align="center" cellspacing="0" cellpadding="3" bgcolor="#FFFFFF"
  style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
  <tr><th>Negara</th><th>Total</th></tr>
  
  
	

  
	
	

 
  <?php
  $sql2 = "SELECT negara, COUNT(negara) AS TOTAL FROM buyer GROUP BY negara ORDER BY negara ASC";
  	
 

  $hasil_sql2 = mysql_query($sql2);
  $total= mysql_num_rows($hasil_sql2);
  
  while($data2 = mysql_fetch_assoc($hasil_sql2))
  {
	  echo"<tr><td>$data2[negara]</td><td align='center'>$data2[TOTAL]</td></tr>";
  }
   

  
  echo"<tr><td><b>Total Negara Visitor </b></td><td align='center'><b>$total</b></td></tr>";
  
  ?>
  </table>


</body>

</html>

<?php

}

else

{

  echo "Anda Tidak Berhak";	

}

?>
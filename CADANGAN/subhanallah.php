<?php
session_start();
include "koneksi.php";


if($_SESSION['HAK'] = "admin")
{


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>

<body bgcolor="#F0EEEE">
 <table width="900" border="1" align="center" cellspacing="0" cellpadding="3" bgcolor="#FFFFFF"
  style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
 <tr>
    <th colspan="7" align="center">Tabel Hasil Pameran</th>
 </tr>
 <tr>
    <th>Date Time</th>
    <th>Country</th>
    <th>Company</th>
    <th>Buyer</th>
    <th>Email</th>
    <th>Status</th>
    <th>Action</th>
 </tr> 
<?php

  $sql = "SELECT * FROM buyer";
  $hasil_sql = mysqli_query($mysqli, $sql);
  
  while($data = mysqli_fetch_assoc($hasil_sql))
  {
	echo "<tr>";
	  echo "<td align='center'>$data[tglwkt]</td>";
	  echo "<td align='center'>$data[negara]</td>";
	  echo "<td align='center'>$data[company]</td>";
	  echo "<td align='center'>$data[buyer]</td>";
	  echo "<td align='center'>$data[email]</td>";
	  echo "<td align='center'>$data[status]</td>";
	  echo "<td align='center'><a href='detail.php?ID=$data[ID]' style='text-decoration:none;'><input type='button' value='Detail' style='background-color:#F00;color:#FFF;'></a></td>";
	
	echo "</tr>";  
	  
  }



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
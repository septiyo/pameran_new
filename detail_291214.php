<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail Buyer</title>
</head>

<body #F0EEEE>
<?php
include "koneksi.php";

$ID = $_GET[ID];

 $sql = "SELECT * FROM buyer WHERE ID = '$ID'";
 $hasil_sql = mysqli_query($mysqli, $sql);
 
 $data = mysqli_fetch_assoc($hasil_sql);
 
 
?>
<a href="subhanallah.php" style="margin-left:200px;"><img src="back.png" /></a>
<table border="1" cellspacing="0" cellpadding="2" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
<tr>
      <th align="center" colspan="5"><h3>Inquiry</h3></th>
</tr>
<tr>
      <th align="center">Price List</th>
      <th align="center">Factory Visit</th>
      <th align="center">Private Label</th>
      <th align="center">Best Price</th>
      <th align="center">Sample</th>
      
</tr>
<tr>
      <th align="center"><?php if($data[price_list] == "Ya"){echo "<img src='cek.png' width='20' height='20'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>
      <th align="center"><?php if($data[factory_visit] == "Ya"){echo "<img src='cek.png' width='20' height='20'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>
      <th align="center"><?php if($data[private_label] == "Ya"){echo "<img src='cek.png' width='20' height='20'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>
      <th align="center"><?php if($data[best_price] == "Ya"){echo "<img src='cek.png' width='20' height='20'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>
      <th align="center"><?php if($data[sample] == "Ya"){echo "<img src='cek.png' width='20' height='20'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>
      
</tr>



</table><br><br>


<table border="1" cellspacing="0" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">
   <tr>
      <th align="center" colspan="2"><h3>Detail Buyer</h3></th>
   </tr>
   <tr>
      <th align="center">Date Time</th>
      <th align="center"><?php echo $data[tglwkt];?></th>
   </tr>
   <tr>
      <th align="center">Continent </th>
      <th align="center"><?php echo $data[benua];?></th>
   </tr>
   <tr>
      <th align="center">Country</th>
      <th align="center"><?php echo $data[negara];?></th>
   </tr>
   <tr>
      <th align="center">Company </th>
      <th align="center"><?php echo $data[company];?></th>
   </tr>
   <tr>
      <th align="center">Buyer </th>
      <th align="center"><?php echo $data[buyer];?></th>
   </tr>
   <tr>
      <th align="center">Email </th>
      <th align="center"><?php echo $data[email];?></th>
   </tr>
    <tr>
      <th align="center">Status</th>
      <th align="center" style="font-family:Tahoma, Geneva, sans-serif;font-size:20px"><?php echo $data[status];?></th>
   </tr>
   
   <tr>
      <th align="center">Name Card Image</th>
      <th align="center"><img src="<?php echo $data[direktori_card];?>" width="600" height="450" /></th>
   </tr>
   <tr>
      <th align="center">Buyer Image</th>
      <th align="center"><img src="<?php echo $data[direktori_buyer];?>" width="600" height="450" /></th>
   </tr>

   
   
  
   

</table>

</body>
</html>
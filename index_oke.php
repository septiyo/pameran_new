<?php
session_start();

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kokola Group</title>
    <link rel="stylesheet" href="themes2/new_style.min.css" />
	<link rel="stylesheet" href="themes2/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />

    
	<!--link rel="stylesheet" href="themes/sip.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" /-->
	<script src="themes/jquery-1.11.1.min.js"></script>
	<script src="themes/jquery.mobile-1.4.5.min.js"></script>
    <link rel="shortcut icon" href="favicon.jpg">
</head>
<body>
<?php
include "koneksi.php";

if(isset($_GET['APLIKASI'])) {
	
	$aplikasi = $_GET['APLIKASI'];
	
	if($aplikasi == 'Exebition') {
	   
	   echo "<script>window.location='pameran';</script>";	
	}
	else if($aplikasi == 'Eproposal') {
		
	   echo "<script>window.location='e-proposal';</script>";	
	
	}
	
   	

	
	
}//end if iaaet






?>

	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline">
			<h1>Welcome To Kokola Group</h1>
		</div>
		<div data-role="content" data-theme="a">
		
        <div style="margin: 0 auto;"><img src="logo.png"></div>
        
        
        <form method="get" action="index.php" data-ajax="false">
           <b>Pilih Aplikasi :</b>
           <select name="APLIKASI" onChange="this.form.submit()">
              <option value="">Pilih Aplikasi</option>
              <option value="Exebition">Kokola Exebition Apps</option>
              <option value="Eproposal">Kokola E-Proposal</option>
           </select>
        
			<!--b>Username</b>
            <input type="text" name="USER" placeholder="Username" maxlength="30">
            <b>Password</b>
            <input type="password" name="PASS" placeholder="Password" maxlength="30"-->
            <!--input type="submit" value="SIGN IN" name="SIGNIN" style="background-color:#F00;color:#FFF;"  -->
         </form>
		</div>
        <div data-role="footer">
		<h4>Kokola Inc.</h4>
        
	</div><!-- /footer -->
	</div>
</body>
</html>
<!--ini adalah percobaan dengan sesuaut yang sangat baik dan berguna bagi kemerdekaan bangsa. Oleh karena itu, kita harus mengerjakan proyek ini degnan sanget baik, karena itu menjaid penilaian bagi kita semua agar kita tidak dianggap seseorang yang ngaanggur saja dari tadi, oleh karean iu kita harus selalu usaha untuk ini adalah ini adalah percobaan saja.-->



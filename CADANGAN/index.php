<?php
session_start();

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exebition Apps</title>
	<link rel="stylesheet" href="themes/sip.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />
	<script src="themes/jquery-1.11.1.min.js"></script>
	<script src="themes/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<?php
include "koneksi.php";

if(isset($_POST['SIGNIN']))
{
	//print_r($_POST);
	
   	$user = $_POST['USER'];
	$pass = $_POST['PASS'];
	
  if(preg_match('/^[a-z\d_]{2,20}$/i', $user)) 
  {
    /*echo "<script>alert('BOleh Masuk');</script>";*/
	 $sql   = "SELECT * FROM user WHERE user = '$user' AND pass = '$pass'";

	  //echo $sql;
	 
	 $hasil = mysqli_query($mysqli, $sql);
	 $data  = mysqli_fetch_array($hasil);
	 
	// echo $data['user'];
	 
	 
	 if(empty($data['user']))
	 { 
      	  echo "<script>
		          alert('Maaf User / Pass anda tidak cocok');
				 
		       </script>";	
	 }
	 else
	 {
		 
		 
		 
	    $_SESSION['HAK'] = $data['hak'];
		
		//echo $_SESSION['HAK'];
		
		if($_SESSION['HAK'] == "user")
		{
		   echo "<script>
		            alert('Welcome');
					window.location='exebition.php';
				  </script>";	
		}
		if($_SESSION['HAK'] == "admin")
		{
		   echo "<script>
		            alert('Welcome admin');
					window.location='subhanallah.php';
				  </script>";	
		}	 
		/*if(empty($_SESSION['HAK']))
		{
		 
			   	 echo "<script>
		              alert('Maaf User / Pass anda tidak cocok');
				  
		             </script>";	
		}*/
	 
	 }//end of empty data
	 
	 
	 
	 
	 }//end if pregmath
	 else
	 {
	    echo "<script>alert('Dilarang Memasukkan Symbol');</script>";	 
	 }

	
	
}//end if iaaet






?>

	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline">
			<h1>Exhibition Apps</h1>
		</div>
		<div data-role="content" data-theme="a">
        <form method="post" action="index.php" data-ajax="false">
			<b>Username</b>
            <input type="text" name="USER" placeholder="Username" maxlength="30">
            <b>Password</b>
            <input type="password" name="PASS" placeholder="Password" maxlength="30">
            <input type="submit" value="SIGN IN" name="SIGNIN" style="background-color:#96F" >
         </form>
		</div>
        <div data-role="footer">
		<h4>Kokola Inc.</h4>
        
	</div><!-- /footer -->
	</div>
</body>
</html>
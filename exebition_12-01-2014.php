<?php

session_start();

include "koneksi.php";



if($_SESSION['HAK'] == "user")

{





?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Exebition</title>



    <link rel="stylesheet" href="themes/sip.min.css" />

	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />

	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />

	<script src="themes/jquery-1.11.1.min.js"></script>

	<script src="themes/jquery.mobile-1.4.5.min.js"></script>

    

    

    <link rel="stylesheet" href="validation/validation.css" type="text/css"/>



    <script src="validation/jquery.validate.js"></script>

   

   <script>

    

  

    jQuery.validator.addMethod("lettersonly", function(value, element) {



  return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value);



}, "Harus huruf alphabet"); 







    $(function(){



        $("#FORM").validate({



            //errorClass:'myClass',



            



            rules:



               {



                 NEGARA:

                 {



                    required: true



                  },



                COMPANY:

				{

					  required: true

				},

				BUYER:

				{

				     required: true	

				},



                 EMAIL:

                {



                    required: true,



                    email : true

                },



               



         CARD_NAME:



         {



           required: true



         },



         IMG_BUYER:

         {



           required: true



         }



          },



            messages: {



                NEGARA:



                {



                    required: "Negara belum terisi"



                },

				COMPANY:

				{

					  required: "Company belum terisi"

				},

				BUYER:

				{

					  required: "Buyer belum terisi"

				},



                EMAIL:



                {



                    required: "Email  belum terisi",



                    email : "Format email belum benar"



                },



                



        CARD_NAME:



        {



           required: "Gambar Card Name Belum ada"



        },



        IMG_BUYER:

         {



           required: "Gambar Buyer Belum ada"



         }

                   



            }



        })



    });



    </script>



    

</head>



<body>

<?php



if(isset($_POST[SAVE]))

{

	

	//print_r($_POST);

	



	    date_default_timezone_set("Asia/Jakarta");



		        $tgl = date(Y)."-".date(m)."-".date(d);



			    $wkt = date('H:i:s'); 



	

	

	$benua   = $_POST[BENUA];

    $negara  = $_POST[NEGARA];

	$company = $_POST[COMPANY];

	$buyer   = $_POST[BUYER];

	$email   = $_POST[EMAIL];

	$serius  = $_POST[SERIUS];

	$price_list    = $_POST[PRICE_LIST];

    $factory_visit = $_POST[FACTORY_VISIT];

	$private_label = $_POST[PRIVATE_LABEL];

    $best_price    = $_POST[BEST_PRICE];

	$sample        = $_POST[SAMPLE];

	

	$price_list_ket      = $_POST[PRICE_LIST_KET];

    $factory_visit_ket   = $_POST[FACTORY_VISIT_KET];

	$private_label_ket   = $_POST[PRIVATE_LABEL_KET];

	$best_price_ket      = $_POST[BEST_PRICE_KET];

	$sample_ket          = $_POST[SAMPLE_KET];



	

	

	

	 // $ukuran_gbr = GetImageSize($direktori);

      $lokasi_file_card = $_FILES['fcardname']['tmp_name'];

      $nama_file_card   = $_FILES['fcardname']['name'];

      $ukuran_file_card = $_FILES['fcardname']['size'];

      $direktori_card   = "cardname/$nama_file_card";

	  

	  //echo "<b>".$lokasi_file_card."</b>";

	

	

	  $lokasi_file_buyer = $_FILES['fbuyer']['tmp_name'];

      $nama_file_buyer   = $_FILES['fbuyer']['name'];

      $ukuran_file_buyer = $_FILES['fbuyer']['size'];

      $direktori_buyer   = "buyer/$nama_file_buyer";

	  

	  

	  
	#sample1
	  $lokasi_file_sample1 = $_FILES['fsample1']['tmp_name'];

      $nama_file_sample1   = $_FILES['fsample1']['name'];

      $ukuran_file_sample1 = $_FILES['fsample1']['size'];

      $direktori_sample1   = "sample/$nama_file_sample1";

	  
	  
	 #sample2 
	  $lokasi_file_sample2 = $_FILES['fsample2']['tmp_name'];

      $nama_file_sample2   = $_FILES['fsample2']['name'];

      $ukuran_file_sample2 = $_FILES['fsample2']['size'];

      $direktori_sample2   = "sample/$nama_file_sample2";

	 
	  
	  #sample3
	   $lokasi_file_sample3 = $_FILES['fsample3']['tmp_name'];

      $nama_file_sample3   = $_FILES['fsample3']['name'];

      $ukuran_file_sample3 = $_FILES['fsample3']['size'];

      $direktori_sample3   = "sample/$nama_file_sample3";


	  move_uploaded_file($lokasi_file_card,"$direktori_card");

	  move_uploaded_file($lokasi_file_buyer,"$direktori_buyer");

	  move_uploaded_file($lokasi_file_sample1,"$direktori_sample1");
	  move_uploaded_file($lokasi_file_sample2,"$direktori_sample2");
	  move_uploaded_file($lokasi_file_sample3,"$direktori_sample3");
	  
	  

	  if($_SESSION[BENUA] == "AF")

	  {

		  $benua_asli = "AFRICA";  

	  }

	  else if($_SESSION[BENUA] == "AN")

	  {

		  $benua_asli = "ANTARTICA";

	  }

	  else if($_SESSION[BENUA] == "AS")

	  {

		  $benua_asli = "ASIA";

	  }

	  else if($_SESSION[BENUA] == "EU")

	  {

		  $benua_asli = "EUROPE";

	  }

	  else if($_SESSION[BENUA] == "NA")

	  {

		  $benua_asli = "NORTH AMERICA";

	  }

	  else if($_SESSION[BENUA] == "OC")

	  {

		  $benua_asli = "OCEANIA";

	  }

	  else if($_SESSION[BENUA] == "SA")

	  {

		  $benua_asli = "SOUTH AMERICA";

	  }



	  

	  

	  $sql_input = "INSERT INTO buyer SET  tglwkt  = '$tgl $wkt',

	                                       benua   = '$benua_asli',

	                                       negara  = '$negara', 

	                                       company = '$company',

	                                       buyer   = '$buyer',

										   email   = '$email',

										   nama_file_card    = '$nama_file_card',

										   ukuran_file_card  = '$ukuran_file_card',

										   direktori_card    = '$direktori_card',

										   nama_file_buyer   = '$nama_file_buyer',

										   ukuran_file_buyer = '$ukuran_file_buyer',

										   direktori_buyer   = '$direktori_buyer',

										   status            = '$serius',

										   price_list        = '$price_list',

										   factory_visit     = '$factory_visit',

										   private_label     = '$private_label',

										   best_price        = '$best_price',

										   sample            = '$sample',

										   price_list_ket    = '$price_list_ket',

										   factory_visit_ket = '$factory_visit_ket',

										   private_label_ket = '$private_label_ket',

										   best_price_ket    = '$best_price_ket',

										   sample_ket        = '$sample_ket',
										   
										   nama_sample_1		= '$nama_file_sample1', 
											
										   ukuran_sample_1		= '$ukuran_file_sample1',

										   direktori_sample_1	= '$direktori_sample1',
										   
										   nama_sample_2		= '$nama_file_sample2', 
											
										   ukuran_sample_2		= '$ukuran_file_sample2',

										   direktori_sample_2	= '$direktori_sample2',
										   
										   nama_sample_3		= '$nama_file_sample3', 
											
										   ukuran_sample_3		= '$ukuran_file_sample3',

										   direktori_sample_3	= '$direktori_sample3'
										   
										   ";
										   
										   
										   

										   

      $hasil_input = mysqli_query($mysqli, $sql_input);

	  echo $sql_input;

	  

	  $to  = $email;

	  $subjek = "Thanks for visiting us at Trade Expo";

	  $message = " <html>

<head>

<title>Litelmaxx Email</title>

</head>



<body style='background-color:#F0EEEE'>

<table border='0' align='center' width='600'>

 <tr>

    <td align='center'><div style='font-family:Arial, Helvetica, sans-serif;font-weight:bold;

			font-size:15px;margin-bottom:10px;padding-top:10px;color:#06C;'>KOKOLA BISCUIT</div></td>

 </tr>

</table><br>

			

			

<table align='center' width='600' height='600' border='0' cellpadding='3' cellspacing='0'>

  <tr>

     <td width='620' height='130'><img src='http://kokola.co.id/email/mentego.png'></td>

  </tr>

  <tr>

    <td bgcolor='#FFFFFF'><div style='padding-left:2px;'>

    <p style='font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;text-align:justify;font-size:14px'>

   <br> Dear <b>".$buyer."</b><br>



Good day to you,<br><br>

Thanks for visiting us at Trade Expo __ <br><br>



We are one of the leading biscuit and wafer manufacturer in Indonesia located in Surabaya.<br>

We serve local Indonesia market and Global markets for Europe, Australia, Asia and Africa.<br>

We have complied HACCP, HALAL, ISO 22000 : 2005 and BRC Certification.<br><br>



Believing that ___ have a great potential market with their special need and requirements, we looking for potential partner to serve the market.<br><br>



Based on our discussion, please find attached ___<br><br>



Looking forward your positive response.<br>

Should you have any inquiry, please don't hesitate to contact us.<br><br>



Have a great day ...<br><br>



 ==== WE HAPPY TO SHARE HAPPINESS WITH YOU ====<br><br>



Thanks.<br><br>



Best Regards,<br>

Ms. Putri Ardini<br>

Overseas Business Development<br><br>



PT. UNGGUL INDO MODERN SEJAHTERA<br>

PT. MEGA GLOBAL FOOD INDUSTRY<br>

E-mail : export@kokola.co.id<br>

Cellular: +628385848399<br>

Phone : +62317590008<br>

Fax : +62317508988<br>

Yahoo messenger: export_kokola@yahoo.com<br>

skype: export_kokola<br>

    </p>

    

       

    </div></td>

  </tr>

  <tr height='100'>

    <td bgcolor='#FFFFFF'><!--div style='padding-left:2px;'>'.$footer.'</div-->

     <div style='background-color:#FFF;width:620px;'>

      <div style='padding-top:10px;'>

         <a href='http://kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> |  <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C;

			color:#FFF;' value='View Factory Profile' >View Factory Profile</button></a>

      </div><!--end of tombol-->

   </div><!--end of footer tulisan-->

    </td>

  </tr>

</table><br>



<table align='center' width='620' height='80' border='0' bgcolor='#bea173' style='color:#FFF;font-family:'Trebuchet MS',Arial, Helvetica, sans-serif;border: 1.5px solid #3dcdfc;'>

  <tr>

     <td align='center'>

 <img src='http://kokola.co.id/email/home.png'>

        <a href='http://kokola.co.id' style='text-decoration:none;color:#FFF;'>kokola.co.id</a>

     </td>

      

      <td align='center' width='300' style='font:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#FFF;'>

         <img src='http://kokola.co.id/email/phone.png' width='10'>+628385848399

      </td>

    <td align='center'>

         <img src='http://kokola.co.id/email/mail.png'><a href='mailto:export@kokola.co.id' style='text-decoration:none;color:#FFF;'>export@kokola.co.id</a>

    </td>

  </tr>

  <tr>

    <td colspan='3' align='right'>

    <div style='padding-right:10px'>

     <a href='https://id-id.facebook.com/pages/Biskuit-Kokola/132981243502488'><img src='http://kokola.co.id/email/fb.png'></a><a href='https://twitter.com/biskuit_kokola'><img src='http://kokola.co.id/email/twitter.png'></a></div>

    </td>

  </tr>

</table>

</body>

</html>";



    $headers  = "MIME-Version: 1.0" . "\r\n";

	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$headers .= 'From: Kokola Group <export@kokola.co.id>' . "\r\n";

  

	

	$maile = mail($to,  $subjek,  $message, $headers); 



	  

	  

	  

	  if($hasil_input)

	  {

		 echo "<script>alert('Save Berhasil');

		               window.location='exebition.php'; 

		      </script>";  

	  }

	  else

	  {

		echo "<script>alert('Save belum barhasil');

		                window.location='exebition.php'; 

		      </script>";    

	  }

	  

	  

	  										   

	

	

	

}









?>





<div data-role="page" data-theme="a">

  <div data-role="header" data-position="inline">

			<h1>Exhibition Apps</h1>

  </div><!--End off header-->



  <div data-role="content" data-theme="a">

   <form method="post" action="exebition.php" id="FORM" data-ajax="false" enctype="multipart/form-data">

      <b> Continents</b>



    <div class="ui-field-contain">



    <select name="BENUA" id="BENUA" data-mini="true" onchange="this.form.submit();Sedot()">

        <option value="">Choose Continents</option>

        <option value="AF">Africa</option>

        <option value="AN">Antartica</option>

        <option value="AS">Asia</option>

        <option value="EU">Europe</option>

        <option value="NA">North America</option>

        <option value="SA">South America</option>

        <option value="OC">Oceania</option>

    </select>

    </div><!--end of select-->

    

    <div class="ui-field-contain">

    <select name="NEGARA"  data-mini="true">

        <option value="">Choose Country</option>

        <?php

        

		if(isset($_POST[BENUA]))

		{

		   $benua = $_POST[BENUA];

		   

		   $_SESSION[BENUA] = $benua;

			

		

		   

		   $sql_negara = "SELECT code,name FROM countries WHERE continent_code = '$benua' GROUP BY name ORDER BY name ASC";

		   

		   //echo $sql_negara;

 

 		   $hasil_negara = mysqli_query($mysqli, $sql_negara);

		   

		   while($data_negara = mysqli_fetch_assoc($hasil_negara))

		   {

			   echo " <option value='$data_negara[name]'>$data_negara[name]</option>";

		   }

		   

		   	echo "<br><b>".$_SESSION['BENUA']."</b>";

		   

		   

		}//enf if isset

			

		?>

        



    </select>

    </div><!--end of select-->

    <!--Hidden benua <input type="text" name="BENUA2" id="BENUA2" onchange="Sedot()" /-->

    

    

    <!--script>

       function Sedot()

	   {

		 /*  var x =  document.getElementById('BENUA');

		   var y =  document.getElementById('BENUA2');*/

		   

		   document.getElementById("BENUA2").value = document.getElementById("BENUA").value;

		   

		  // document.getElementById('BENUA2').value = x

		  // var y =  document.getElementById('BENUA2');

		  //alert(x.value);

			

			   

	   }

    

    </script-->

    

    

   

    <b>Company Name</b>

    <input type="text" name="COMPANY" placeholder="Company Name" />

    <b>Buyer Name</b>

    <input type="text" name="BUYER" placeholder="Buyer Name" />

    <b>Email</b>

    <input type="text" name="EMAIL" placeholder="Email" /><br>

	



       <fieldset data-role="controlgroup">

        <input name="SERIUS" id="SERIUS" value="Serious Buyer" checked="checked" type="radio">

        <label for="SERIUS">S</label>

        <input name="SERIUS" id="NOT_SERIUS" value="Not Serious Buyer" type="radio">

        <label for="NOT_SERIUS">NS</label>

       </fieldset>

    

    

    <!--div class="ui-field-contain">



     <select name="SERIUS" id="select-native-2" data-mini="true">

        <option value="Serious Buyer">Serious Buyer</option>

        <option value="Not Serious Buyer">Not Serious Buyer</option>

     </select>

    </div--><!--end of select-->

    

       <fieldset data-role="controlgroup">

        <legend><b>Inquiry Category</b></legend>

        <input name="PRICE_LIST" id="PRICE_LIST" value="Ya" type="checkbox"><label for="PRICE_LIST">Price List</label>

          <input type="text" name="PRICE_LIST_KET" placeholder="Keterangan Tambahan Price List" />

        <input name="FACTORY_VISIT" id="FACTORY_VISIT" value="Ya" type="checkbox"><label for="FACTORY_VISIT">Factory Visit</label>

          <input type="text" name="FACTORY_VISIT_KET" placeholder="Keterangan Tambahan Factory Visit" />

        <input name="PRIVATE_LABEL" id="PRIVATE_LABEL" value="Ya" type="checkbox"><label for="PRIVATE_LABEL">Private Label</label>

          <input type="text" name="PRIVATE_LABEL_KET" placeholder="Keterangan Tambahan Private Label" />

        <input name="BEST_PRICE" id="BEST_PRICE" value="Ya" type="checkbox"><label for="BEST_PRICE">Best Price</label>

          <input type="text" name="BEST_PRICE_KET" placeholder="Keterangan Tambahan Best Price" />

        <input name="SAMPLE" id="SAMPLE" value="Ya" type="checkbox"><label for="SAMPLE">Sample</label>

          <input type="text" name="SAMPLE_KET" placeholder="Keterangan Tambahan Sample" />

    </fieldset>

    

   

    <b>Image Card Name</b>

    <input type="file" accept="image/*;capture=camera" name="fcardname" id="CARD_NAME"/>

    <b>Image Buyer</b>

    <input type="file" accept="image/*;capture=camera" name="fbuyer" id="IMG_BUYER" />
    
    <b>Image Sample 1</b>

    <input type="file" accept="image/*;capture=camera" name="fsample1" id="IMG_SAMPLE1" />
    
    <b>Image Sample 2</b>

    <input type="file" accept="image/*;capture=camera" name="fsample2" id="IMG_SAMPLE2" />
    
    <b>Image Sample 3</b>

    <input type="file" accept="image/*;capture=camera" name="fsample3" id="IMG_SAMPLE3" />

    <input type="submit" value="SAVE" name="SAVE" style="background-color:#96F"/>

    



    

   

   </form>

    

      

    <br><br>  

   <a href="logout.php" style="text-decoration:none;" onclick="metu()"><input type="button" value="Sign Out" style="background-color:#F00;color:#FFF;"  /></a>   

   

   <script>

   function metu()

   {

	   location.assign("logout.php");   

   }

   

   </script>

  

  </div><!--end of content-->

  

  <div data-role="footer">

    

  

	<h4>Kokola Inc 2015.</h4>

        

  </div><!-- /footer -->



</div><!--end of paga-->



</body>

</html>

<?php

}

else

{

  echo "Anda tidak Berhak";	

}





?>
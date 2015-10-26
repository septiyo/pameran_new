<?php
//include("exebition.php");

class email_class{



    function notifikasi($tgl,$company,$gender,$buyer,$email,$discussion,$rating,$packing1,$packing2,$packing3,$type1,$type2,$type3,$type4,$type5,$type6,$factory_visit,$sample,$trader,$owndistribution,$middleman,
	$importothercountry,$indonesiabiscuit,$never,$others){


       echo "<script>alert('fungsi sudah dipanggil');</script>";


        if($discussion == "DISCUSSION"){

            $to  = $email;
            $pieces = explode(",", $to);
            $jumlah = count($pieces);
            $subjek = "Thanks for visiting us at  Trade Expo Indonesia on 21-25 October 2015 ";

            $message = "<html>
		<head>
			<title>Exibithion Email</title>
		</head>

	
		<body style='background-color:#F0EEEE;'>
			<div style='font-size:9px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;'>
				<table border='0' align='center' width='620'>
				 <tr>
    				<td align='center'>
						<div style='font-family:Arial, Helvetica, sans-serif;font-weight:bold;font-size:15px;color:#06C;'>KOKOLA BISCUIT</div>
					</td>
				 </tr>
				</table>
				<br>
				
				<table align='center' border='0' cellpadding='0' cellspacing='0' style='min-width:620px !important; ' >
				  <tr>
			     	<td>
					<div style='background-color:#FFF;width:620px;'>
						<div>
					<img src='http://kokola.co.id/email/kiri.png' style='margin-bottom:0px;margin-top:0;padding-bottom:0px;padding-top:0;'>
					
					<img src='http://kokola.co.id/email/kanan.png' style='float:right;margin-left:0px;margin-top: 0px;margin-left:0px;' />
	   				<br>";


            $message.= "<div style='padding-left:5px;text-transform:capitalize;'> Dear <b> ".$gender." ".$buyer."</b></div><br><br>
		<div style='padding-left:5px;text-align:justify;'>	Thanks for visiting us at  Trade Expo Indonesia on ".$tgl."<br><br>

We are one of the leading biscuit and wafer manufacturers in Indonesia, located in Surabaya.<br>
To guarantee our product quality and customer satisfaction, We had complied with Food Safety System such as ISO 22000, FSSC, BRC version 6 and Halal Certificate.<br>
We have been exporting our products to many countries in South East Asia, China, Middle East, Europe, Australia and Africa.<br>

<br>

<br>

 <div style='font-size:13px;'><b>


Please find the following summary of our discussion <br><br>";

            /*if($price_list == 'Ya')

            {
                $tulis_pricelist = "Price List";
            }*/


            if($factory_visit == 'Ya')

            {
                $tulis_factory_visit = " Factory Visit";
            }


            /*if($private_label == 'Ya')

            {
               $tulis_private_label = ", Private Label";
            }*/

            /*if($best_price == 'Ya')
            {
                $tulis_best_price = ", Best Price";
            }*/

            if($sample == 'Ya')
            {
                $tulis_sample= ", Sample";
            }


            $message .="


1. You have requested : ".$tulis_pricelist."

                       ".$tulis_factory_visit."

		       ".$tulis_best_price."

                       ".$tulis_sample." <br><br>";
//php lagi	
            if($packing1 != "")
            {
                $packing1 = $packing1.", ";
            }

            if($packing2 != "")
            {
                $packing2 = $packing2.", ";
            }

            if($packing3 != "")
            {
                $packing3 = $packing3.", ";
            }
//masuk html			   

            $message .="

	2. Product priority by packing : $packing1 $packing2 $packing3 <br><br>";
//masuk php lagi

            if($type1 != "")
            {
                $type1 = $type1;
            }

            if($type2 != "")
            {
                $type2 = $type2;
            }

            if($type3 != "")
            {
                $type3 = $type3;
            }

            if($type4 != "")
            {
                $type4 = $type4;
            }

            if($type5 != "")
            {
                $type5 = $type5;
            }

            if($type6 != "")
            {
                $type6 = $type6;
            }
//masuk HTML	

            $message.="
	3. Product priority by category : $type1 $type2 $type3 $type4 $type5 $type6 <br><br>";
            //masuk php

            if($others =="")
            {
                $tampil = "";
            }
            else
            {
                $tampil = $others;
            }

            $message.="$others <br>";

            /*
              if($revisitbooth_on != "0000-00-00")
              {
                  $kata = "We have appointment for further discussion on ".$revisitbooth_on;
              }

              if($revisitbooth_on == "")
              {
                  $kata = "We will follow up the above inquiry as soon as possible";
              }
              */
            $message.="
	<br />
	$kata <br><br>			

	Your most valued feedback will be highly appreciated.

</b>

 </div>      

      <br>

      Enjoy your day ...<br>

      <br><br>

      Thanks.<br><br>

      Best Regards,<br>

      Ms. Putri Ardini<br>

      Overseas Business Development<br><br>

      PT. UNGGUL INDO MODERN SEJAHTERA<br>

      <br>

      PT. MEGA GLOBAL FOOD INDUSTRY<br>

      <br>
      E-mail : export@kokola.co.id<br>

      Cellular: +628385848399<br>
	  
      Phone : +62317590008<br>

      Fax : +62317508988<br>

      Yahoo messenger: export_kokola@yahoo.com<br>

      skype: export_kokola<br>
</div>
    </div></div></td>

  </tr>


  <tr height='100'>

    <td bgcolor='#FFFFFF'><!--div style='padding-left:2px;'>'.$footer.'</div-->

     <div style='background-color:#FFF;width:620px;'>

      <div style='padding-top:10px;'>

         <a href='http://www.kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> |  <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C;

			color:#FFF;' value='View Factory Profile' >View Factory Profile</button></a>

      </div><!--end of tombol-->

   </div><!--end of footer tulisan-->

    </td>

  </tr>

</table><br>


<table align='center' width='620' height='80' border='0' bgcolor='#a6cfcc' style='color:#FFF;font-family:'Trebuchet MS',Arial, Helvetica, sans-serif;border: 1.5px solid #3dcdfc;'>


  <tr>

     <td align='center'>

 <img src='http://kokola.co.id/email/home.png'>

        <a href='http://kokola.co.id' style='text-decoration:none;color:#000;'>kokola.co.id</a>

     </td>

      <td align='center' width='300' style='font:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#000;'>

         <img src='http://kokola.co.id/email/phone.png' width='10'>+628385848399

      </td>

    <td align='center'>

         <img src='http://kokola.co.id/email/mail.png'><a href='mailto:export@kokola.co.id' style='text-decoration:none;color:#000;'>export@kokola.co.id</a>

    </td>
  </tr>

  <tr>
    <td colspan='3' align='right'>
    <div style='padding-right:10px'>

     <a href='https://id-id.facebook.com/pages/Biskuit-Kokola/132981243502488'><img src='http://kokola.co.id/email/fb.png'></a><a href='https://twitter.com/biskuit_kokola'><img src='http://kokola.co.id/email/twitter.png'></a></div>
    </td>
  </tr>
</table>

</div>

</body>
</html>";

            $headers  = "MIME-Version: 1.0" . "\r\n";

            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            $headers .= 'From: Kokola Group <export@kokola.co.id>' . "\r\n";


//untuk pengulangan kirim email


            echo $message;


            for($i=0;$i<$jumlah;$i++){


                $maile = mail($pieces[$i],  $subjek,  $message, $headers);

                // echo $pieces[$i]."<br>";


            }//end for




        }
        else if($discussion == "NODISCUSSION") {




            //echo $discussion;

            $to  = $email;
            $pieces = explode(",", $to);
            $jumlah = count($pieces);
            $subjek = "Thanks for visiting us at Trade Expo, Indonesia on 21-25 October 2015";

            $message = "<html>
		<head>
			<title>Litelmaxx Email</title>
		</head>

<body style='background-color:#F0EEEE;'>
	<div style='font-size:9px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;'>
		<table border='0' align='center' width='620'>
		 <tr>
		    <td align='center'><div style='font-family:Arial, Helvetica, sans-serif;font-weight:bold;
				font-size:15px;padding-top:10px;color:#06C;'>KOKOLA BISCUIT</div></td>
		 </tr>
		</table><br>

		<table align='center' width='620' height='600' border='0' cellpadding='0' cellspacing='0'>
  		  <tr>
		     <td>
					<div style='background-color:#FFF;width:620px;'>
						<div>
					<img src='http://kokola.co.id/email/kiri.png' style='margin-bottom:0px;margin-top:0;padding-bottom:0px;padding-top:0;'>
					
					<img src='http://kokola.co.id/email/kanan.png' style='float:right;margin-left:0px;margin-top: 0px;margin-left:0px;' />
	   				<br>";

            $message.= "
			<div style='padding-left:5px;'>
			Dear <b> ".$gender." ".$buyer."</b><br><br>
			Thanks for visiting us at Trade Expo, Indonesia on ".$tgl."<br><br>
			We are one of the leading biscuit and wafer manufacturers in Indonesia, located in Surabaya<br>
			To guarantee our product quality and customer satisfaction, We had complied with Food Safety System such as ISO 22000, FSSC, BRC version 6 and Halal Certificate.<br>
			We have been exporting our products to many countries in South East Asia, China, Middle East, Europe, Australia and Africa.<br>
			<br>
      		<br>
			 Should you have any inquiry, please do not hesitate to contact us.<br><br>

      		Enjoy your day ...<br>
	      <br><br>
	      Thanks.<br><br>
	      Best Regards,<br>
      	  Ms. Putri Ardini<br>
	      Overseas Business Development<br><br>
	      PT. UNGGUL INDO MODERN SEJAHTERA<br>
	      <br>
	
      PT. MEGA GLOBAL FOOD INDUSTRY<br>
	  <br>
      E-mail : export@kokola.co.id<br>
      Cellular: +628385848399<br>
      Phone : +62317590008<br>
      Fax : +62317508988<br>
      Yahoo messenger: export_kokola@yahoo.com<br>
      skype: export_kokola<br>
	  </div>
    </div></td>
  </tr>

  <tr height='100'>
    <td bgcolor='#FFFFFF'><!--div style='padding-left:2px;'>'.$footer.'</div-->
     <div style='background-color:#FFF;width:620px;'>
      <div style='padding-top:10px;'>
         <a href='http://www.kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> |  <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C;
			color:#FFF;' value='View Factory Profile' >View Factory Profile</button></a>
      </div><!--end of tombol-->
   </div><!--end of footer tulisan-->
    </td>
  </tr>
</table><br>

<table align='center' width='620' height='80' border='0' bgcolor='#a6cfcc' style='color:#FFF;font-family:'Trebuchet MS',Arial, Helvetica, sans-serif;border: 1.5px solid #3dcdfc;'>

  <tr>
     <td align='center'>

 <img src='http://kokola.co.id/email/home.png'>

        <a href='http://kokola.co.id' style='text-decoration:none;color:#000;'>kokola.co.id</a>
     </td>
      <td align='center' width='300' style='font:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#000;'>
         <img src='http://kokola.co.id/email/phone.png' width='10'>+628385848399
      </td>

    <td align='center'>
         <img src='http://kokola.co.id/email/mail.png'><a href='mailto:export@kokola.co.id' style='text-decoration:none;color:#000;'>export@kokola.co.id</a>
    </td>

  </tr>

  <tr>
    <td colspan='3' align='right'>
    <div style='padding-right:10px'>
     <a href='https://id-id.facebook.com/pages/Biskuit-Kokola/132981243502488'><img src='http://kokola.co.id/email/fb.png'></a><a href='https://twitter.com/biskuit_kokola'><img src='http://kokola.co.id/email/twitter.png'></a></div>
    </td>
  </tr>

</table>

</div>
</body>
</html>";

            $headers2  = "MIME-Version: 1.0" . "\r\n";
            $headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers2 .= 'From: Kokola Group <export@kokola.co.id>' . "\r\n";

           echo $message;
            for($i=0;$i<$jumlah;$i++)
            {
                $maile = mail($pieces[$i],  $subjek,  $message, $headers2);
            }//end for



        }//end if



    }//end function notifikasi


}//end class
?>
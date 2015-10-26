<style>


.td1 {
	width:100px;
	}

</style>

<?php

session_start();

include "koneksi.php";


if($_SESSION['HAK'] = "admin")
{

   if(isset($_POST[SEND_MAIL])) {

	   $email = $_POST[EMAIL];
	   $subjek = $_POST[SUBJEK];   	   
	   $from  = $_POST[FROM]; 
	   $jumlah = count($email);
	   
	   if($jumlah == 0) {
		
		echo "<script>alert('Anda belum memilih Satupun Email');</script>";
		goto metu;
		   
	   }
	   else {
		 
		 goto lanjut;   
	   }
  
     lanjut:

	   
	   /*Untuk ambil template yahg sudah disave*/
	   
	   $sql_template   = "SELECT * FROM setting_template";
	   $hasil_template = mysqli_query($mysqli, $sql_template);
	   $data_template  = mysqli_fetch_assoc($hasil_template);
	   
	     $header = $data_template['header'];
         $isi    = $data_template['isi'];
		 $footer = $data_template['footer'];
         $temp   = $data_template['template'];
		 
		        date_default_timezone_set("Asia/Jakarta");

	   		        $tgl = date(Y)."-".date(m)."-".date(d);

					$wkt = date('H:i:s'); 
		 
		 
	 for($i=0;$i<=$jumlah;$i++) {
		 
	   if($i <= 100) {	 

		  // echo $email[$i]."<br>";   
	   
	         $pecah1 = explode('&',$email[$i]);
			 
			// echo $pecah1[0]."<br>"; //email
			// echo $pecah1[1]."<br>"; //Mr Ms
 			// echo $pecah1[2]."<br>"; //Namanya buyer
			 
			 /*ini untuk kirim email*/
			 
	 $message = "
  <html>
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
			
			
<table align='center' width='600' height='600' border='0' cellpadding='0' cellspacing='0'>
  <tr>
     <td width='620' height='130'><img src='http://kokola.co.id/email/$temp'></td>
  </tr>
   <tr height='50'>
    <td bgcolor='#FFFFFF'><br>
      &nbsp; Dear $pecah1[1] $pecah1[2]  <br><br>
	  <div style='padding-left:2px;'>".$header."</div>
	</td>
  </tr>
  <tr height='200'>
    <td bgcolor='#FFFFFF'><div style='padding-left:2px;'>".$isi."</div></td>
  </tr>
  <tr height='50'>
    <td bgcolor='#FFFFFF'><div style='padding-left:2px;'>".$footer."</div>
     <div style='background-color:#FFF;width:620px;'>
      <div style='padding-top:2px;'>
         <a href='http://www.kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> |  <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C;
			color:#FFF;' value='View Factory Profile' >View Factory Profile</button></a>
      </div><!--end of tombol-->
   </div><!--end of footer tulisan-->
    </td>
  </tr>
</table><br>

<!--table align='center' width='620' height='80' border='0' bgcolor='#bea173' style='color:#FFF;font-family:'Trebuchet MS',Arial, Helvetica, sans-serif;border: 1.5px solid #3dcdfc;'-->
<table align='center' width='620' height='80' border='0' bgcolor='#bea173' style='color:#FFF; font:'Trebuchet MS', Arial, Helvetica, sans-serif;'>
  <tr>
     <td align='center'>
 <img src='http://kokola.co.id/email/home.png'>
        <a href='http://kokola.co.id' style='text-decoration:none;color:#FFF;'>kokola.co.id</a>
     </td>
      
      <td align='center' width='300' style='font:'Trebuchet MS', Arial, Helvetica, sans-serif; color:#FFF;'>
         <img src='http://kokola.co.id/email/phone.png' width='10'><a  style='text-decoration:none;color:#FFF;'>+628385848399</a>
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
	
	$headers .= 'From: '.$from . "\r\n";
	
	
	mail($pecah1[0],$subjek,$message,$headers);	 
	
	}
	else {
	
	  echo "Sudah lebih dari 2 makanya distop";
	  goto metu;	
		
	}
	
	
			 	/*Input ke Outbox*/
	/*$sql_outbox = "INSERT INTO outbox SET tujuan   = '$pecah1[0]',
	                                       subjek  = '$subjek',
										   message = '$message',
										   tglwkt  = '$tgl $wkt'";
										   
																				   
    $hasil_outbox = mysqli_query($mysqli, $sql_outbox);	*/	
	

							   
             /*End Input ke Outbox*/
			 

		   

	   }//end for
		 
		 echo "<script>alert('Kirim ke $jumlah Email Berhasil')</script>";  
  

   }


?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<!--untuk Validasi-->

    <link rel="stylesheet" href="validation/validation.css" type="text/css"/>
    <script src="validation/jquery-1.11.1.min.js"></script>
    <script src="validation/jquery.validate.js"></script>
   <script>



$.validator.addMethod("valueNotEquals", function(value, element, arg){

  return arg != value;

 }, "Value must not equal arg.");



    $(function(){



        $("#FORMX").validate({

            //errorClass:'myClass',

           rules: {

              
				SUBJEK:{

				     required: true
					 

				},
				FROM:{

				     required: true,
					 email : true	

				}
				

        },

            messages: {

                SUBJEK:{

				     required: "Subjek Belum diisi"	

				},
				FROM:{

				     required: "From Belum diisi",
					 email: "Format Email Belum Benar"

				}


            },
	  	 errorPlacement: function(error, element) {
			 
         if ( element.is(":checkbox") ) {
			 
            error.appendTo( element.parents('.container1') );
        }
        else {
		 // This is the default behavior
            error.insertAfter( element );
        }
      }//end of error placement


     })


    });



    </script>

    <!--end of untuk Validasi-->
    
<!--untuk checkbox All-->   
<script>
function toggle(source) {
  checkboxes = document.getElementsByName('EMAIL[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
<!--End of untuk checkbox All-->   


<!--script>
$('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':EMAIL[]').each(function() {
            this.checked = true;                        
        });
    }
});
</script-->




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Bulk Email</title>

</head>



<body bgcolor="#F0EEEE">
<?php 

metu:

?>

<table width="900" border="0" align="center">
<tr>
<td align="center"><a href="subhanallah.php" style="text-decoration:none"><input type="button" value="Back" /></a></td>
<td align="center"><a href="set-template.php" style="text-decoration:none"><input type="button" value="Setting Template" /></a></td>
</tr>
</table>

<form method="post" action="broadcast-email.php" id="FORMX">

 <table width="900px" border="1" align="center" cellspacing="0" cellpadding="2" bgcolor="#FFFFFF"

  style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;">

 <tr>
    <th colspan="10" align="center">Bulk Email</th>
 </tr>
 <tr>
  <td>Subjek: </td><td colspan="8"><input type="text" name="SUBJEK" placeholder="Subjek :" size="50" /></td>
</tr>
<tr>
  <td>From:</td><td colspan="8"><input type="text" name="FROM" placeholder="From :" size="50" /></td>
</tr>

 <tr>

    <th><input type="checkbox" name="select-all" id="select-all" onClick="toggle(this)"/></th>

    <th >Date Time</th>
    
    <th >Benua</th>

    <th >Country</th>

    <th >Company</th>

    <th>Buyer</th>

    <th class="td1">Email</th>

    <!--th>Buyer Rating</th-->
    
    <th>Status</th>
    
    <!--th>PIC</th-->
    

    <th>Action</th>
	
 </tr> 
<!--label><input type="checkbox" name="checkbox" value="value">Text</label-->
<br />

<?php

  $sql = "SELECT * FROM buyer order by ID DESC";

  $hasil_sql = mysqli_query($mysqli, $sql);
 $total= mysqli_num_rows($hasil_sql);
  

  while($data = mysqli_fetch_assoc($hasil_sql)) {

	echo "<tr>";

	  echo "<td align='center'><label><input type='checkbox' name='EMAIL[]' value='$data[email]&$data[gender]&$data[buyer]'></label></td>";

	  echo "<td align='center'>$data[tgl]<br>$data[wkt]</td>";
	  
	  echo "<td align='center'>$data[benua]</td>";

	  echo "<td align='center'>$data[negara]</td>";

	  echo "<td align='center'>$data[company]</td>";

	  echo "<td align='center'>$data[buyer]</td>";

	  echo "<td align='center' class='td1'>$data[email]</td>";

  	  echo "<td align='center'>$data[progress]</td>";
	  
	  echo "<td align='center'><a href='detail.php?ID=$data[ID]' style='text-decoration:none;'><input type='button' value='Detail' style='background-color:#F00;color:#FFF;'></a></td>";

	

	echo "</tr>";  

  }



?>

<tr>
	<td colspan="8" align="right"><b>total visitor</b></td>
    <td colspan="4" align="center"><b><?php echo $total; ?></b></td>

</tr>


<tr>

  <td colspan="10" align="right"><input type="submit" value="SEND MAIL" name="SEND_MAIL"></td>

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
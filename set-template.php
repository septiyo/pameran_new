<?php
session_start();

include "koneksi.php";

if($_SESSION[HAK] == 'admin')
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	 width: 600,
     height: 200,

    selector: "textarea",
        plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
        ],

        toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink | insertdatetime preview | forecolor backcolor",
       /* toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",*/

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ],

        templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
        ]
 });
</script>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Setting Header Footer</title>
<style>
 table
 {
	font-family:Verdana, Geneva, sans-serif; 
 }

</style>
</head>

<body bgcolor="#F0EEEE">

<?php


if(isset($_POST[SAVE]))
{
	//print_r($_POST);
	
	$header = $_POST['HEADER'];
    $isi    = $_POST['ISI'];
	$footer = $_POST['FOOTER'];
	$template = $_POST['TEMP'];
	
	
	$sql = "UPDATE 	setting_template SET header    = '$header',
	                                    isi     = '$isi',
	                                   footer   = '$footer',
 				                       template = '$template'
				                       WHERE ID = 1";
							 
	$hasil = mysqli_query($mysqli, $sql);
	
	if($hasil)
	{
	   echo "Setting Berhasil di Save";	
	}
	else
	{
	   echo "Setting belum Berhasil di Save";	
	}						 
}

$sql_ambil = "SELECT * FROM setting_template WHERE ID = 1";
$hasil_ambil = mysqli_query($mysqli, $sql_ambil);
$data_ambil = mysqli_fetch_array($hasil_ambil);


//echo $sql_ambil;
?>




<form method="post" action="set-template.php">
<table align="center" border="1" cellpadding="0" cellspacing="0.5" >
  <tr>
     <td align="center" colspan="2"><h2>Form Setting Header dan Footer</h2></td>
  </tr>
  <tr>
     <td valign="top"><b>Setting Header :</b></td>
      <td><textarea name="HEADER"><?php echo "$data_ambil[header]";?></textarea></td>
  </tr>
  <tr>
     <td valign="top"><b>Setting Pesan Default :</b></td>
      <td><textarea name="ISI"><?php echo "$data_ambil[isi]";?></textarea></td>
  </tr>
 <tr>
     <td valign="top"><b>Settting Footer</b></td>
     <td><textarea name="FOOTER"><?php echo "$data_ambil[footer]";?></textarea></td>
  </tr>
  <tr height="100">
     <td valign="top"><b>Pilih Template</b></td>
     <td>
        <input type="radio" name="TEMP" value="1.png" <?php if($data_ambil[template] == "1.png"){echo "checked='checked'";}?> ><img src="http://kokola.co.id/email/1.png" width="200" height="50" />
        <input type="radio" name="TEMP" value="2.png" <?php if($data_ambil[template] == "2.png"){echo "checked='checked'";}?>><img src="http://kokola.co.id/email/2.png" width="200" height="50" /><br>
        <input type="radio" name="TEMP" value="3.png" <?php if($data_ambil[template] == "3.png"){echo "checked='checked'";}?>><img src="http://kokola.co.id/email/3.png" width="200" height="50" />
        <input type="radio" name="TEMP" value="mentego.png" <?php if($data_ambil[template] == "mentego.png"){echo "checked='checked'";}?>><img src="http://kokola.co.id/email/mentego.png" width="200" height="50" />
     
     
     </td>
     
  </tr>
  <tr>
    <td align="right" colspan="2">
       <a href="broadcast-email.php"><input type="button" value="BACK" /></a><input type="submit" name="SAVE" value="SAVE" />
    </td>
  
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
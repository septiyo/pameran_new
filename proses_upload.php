<?php
$fileName_card   = $_FILES["uploaded_file"]["name"]; // The file name
$fileTmpLoc_card = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder
$ImageExt_card   = substr($fileName, strrpos($fileName, '.')); //file extension
$fileType_card   = $_FILES["uploaded_file"]["type"]; // The type of file it is
$fileSize_card   = $_FILES["uploaded_file"]["size"]; // File size in bytes
$fileErrorMsg_card = $_FILES["uploaded_file"]["error"]; // 0 for false... and 1 for true
$kaboom_card     = explode(".", $fileName); // Split file name into an array using the dot
$fileExt_card    = end($kaboom); // Now target the last array element to get the file extension

$RandNumber = uniqid(rand()); //Random number to make each filename unique.
//$NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($FileTitle));
$NewFileName = $fileName.'_'.$RandNumber.$ImageExt;
$uploaddir = "cardname/";
$formats = array("jpg", "png", "gif", "bmp", "jpeg", "PNG", "JPG", "JPEG", "GIF", "BMP");

$jml = 1;
while(file_exists("/cardname/".$fileName_card)) {
	$name_file = $kaboom_card[0].'_'.$jml.".".$kaboom_card[1];
	$jml = $jml +1;
	$fileName = $name_file;
}


if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    exit();
} else if (!preg_match("/.(zip|rar|pdf|doc|docx|xls|xlsx|jpg||jpeg|png)$/i", $fileName_card) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo "ERROR: Your file document was not .zip .rar .pdf .doc .docx .xls .xlsx .jpg .png";
     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
     exit();
} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    echo "ERROR: An error occured while processing the file. Try again.";
    exit();
} else if(file_exists('../cardname/' . $fileName_card)){
    echo "ERROR: File with that name already exists.";
	exit();
}

// ---------------- resize ----------------------------------- -//
$img = imagecreatefromjpeg($fileTmpLoc_card);
$exif = exif_read_data($fileTmpLoc_card);
if ($img && $exif && isset($exif['Orientation'])){
	$ort = $exif['Orientation'];
if ($ort == 6 || $ort == 5)
	$img = imagerotate($img, 270, null);
if ($ort == 3 || $ort == 4)
	$img = imagerotate($img, 180, null);
if ($ort == 8 || $ort == 7)
	$img = imagerotate($img, 90, null);
if ($ort == 5 || $ort == 4 || $ort == 7)
	imageflip($img, IMG_FLIP_HORIZONTAL);
}

$width = imagesx($img);
$height = imagesy($img);
$new_width = 352;
$new_height = ($new_width/$width) * $height;
$tmp_img = imagecreatetruecolor( $new_width, $new_height );
imagecopyresampled( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

$okkk2 = "cardname/$fileName_card";

imagejpeg($tmp_img, $okkk2, 100);
// imagejpeg( $tmp_img, "upload/"."$kode_edan$nama_file_stock");
imagedestroy($tmp_img);
//imagedestroy($lokasi_file_standart[$no]);
// ---------------------- akhir resize -------------------------------- //

if (file_exists("cardname/".$fileName_card)) {
	echo "SUCCESS: ".$fileName_card;
}

?>


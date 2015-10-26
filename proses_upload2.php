<?php

$acak = uniqid(rand());

$fileName_card   = $_FILES["uploaded_file"]["name"]; // The file name
$fileTmpLoc_card = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder

/*------------------------------------------------------------------------------*/ 
 

$fileName_buyer   = $_FILES["uploaded_file2"]["name"]; // The file name
$fileTmpLoc_buyer = $_FILES["uploaded_file2"]["tmp_name"]; // File in the PHP tmp folder
//$dir = "cardname/$acak$fileName_card"; //direktori

/*move_uploaded_file($fileName_card, $dir);

echo "SUCCESS:"."cardname/".$acak."-".$fileName_card;*/


if(empty($fileName_buyer)){
    
   // move_uploaded_file($fileTmpLoc_card, $direktori_card);
    
$img = imagecreatefromjpeg($fileTmpLoc_card);//Create a new image from file or URL

$width = imagesx($img);   //mendeklarasikan panjang 
$height = imagesy($img);  ////mendeklarasikan tinggi 

$new_width = 500; // pangjang real yang diminta setelah resize

$new_height = ($new_width/$width) * $height; //penyesuasain tinggi dnegan panjang tadi

$tmp_img = imagecreatetruecolor($new_width, $new_height);//Create a new true color image

imagecopyresampled( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height ); //Copy and resize part of an image with resampling

$dir = "cardname/$acak$fileName_card"; //direktori

imagejpeg( $tmp_img, $dir);//Output image to browser or file

if(file_exists("cardname/".$acak.$fileName_card)) {
	echo "SUCCESS:"."cardname/".$acak.$fileName_card;

}else{
    
    echo "gagal cardname ".$acak.$fileName_card;
    
}


imagedestroy($tmp_img); //Destroy an image
    
        
    
}
else if(empty($fileName_card)){
    
   // move_uploaded_file($fileTmpLoc_buyer, $direktori_buyer);
    
$img = imagecreatefromjpeg($fileTmpLoc_buyer);//Create a new image from file or URL

$width = imagesx($img);   //mendeklarasikan panjang 
$height = imagesy($img);  ////mendeklarasikan tinggi 

$new_width = 500; // pangjang real yang diminta setelah resize

$new_height = ($new_width/$width) * $height; //penyesuasain tinggi dnegan panjang tadi

$tmp_img = imagecreatetruecolor($new_width, $new_height);//Create a new true color image

imagecopyresampled( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height ); //Copy and resize part of an image with resampling

$dir = "buyer/$acak$fileName_buyer"; //direktori

imagejpeg( $tmp_img, $dir);//Output image to browser or file

if(file_exists("buyer/".$acak.$fileName_buyer)){
    
        echo "SUCCESS:"."buyer/".$acak.$fileName_buyer;
}else{
    
    echo "gagal buyer";
    
}

imagedestroy($tmp_img); //Destroy an image
    
    
}



?>
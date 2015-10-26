<?php
session_start();
include "koneksi.php";
$pic = $_SESSION['USERNAME'];


//if(isset($_POST[SAVE])){
//print_r($_POST);
date_default_timezone_set("Asia/Jakarta");
// date_default_timezone_set("Asia/Dubai");

$tgl = date(Y)."-".date(m)."-".date(d);

//$tgl_inter = date(d)."-".date(m)."-".date(Y);


$wkt = date('H:i:s');

$negara  = $_POST[NEGARA];

$sql_cari_negara = "SELECT UPPER(NAME)AS NAME, continent_code FROM countries WHERE NAME LIKE '%$negara%'";
$hasil_negara = mysql_query( $sql_cari_negara);
$data_negara = mysql_fetch_assoc($hasil_negara);

$benuanya = $data_negara[continent_code];

$benua   = $_POST[BENUA];

$sql_cari_benua = "SELECT * FROM continents WHERE code = '$benuanya'";
$hasil_cari_benua = mysql_query($sql_cari_benua);
$data_benua = mysql_fetch_assoc($hasil_cari_benua);

$benua_asli = $data_benua[name];





$company = $_POST[COMPANY];

$gender  = $_POST[GENDER];

//$GLOBALS['BUYER'] = $_POST[BUYER];

$buyer   = $_POST[BUYER];

$email   = $_POST[EMAIL];

$discussion = $_POST[DISCUSSION];

$rating  = $_POST[SERIUS];

$serius2 = $_POST[score];

$packing = $_POST[RESULT];

$pecah_packing = explode(" ",$packing);

$packing1 = $pecah_packing[0];
$packing2 = $pecah_packing[1];
$packing3 = $pecah_packing[2];



if($packing1==Portion_Control_Pack)
{
    $packing1="Portion Control Pack";
}

if($packing2==Portion_Control_Pack)
{
    $packing2="Portion Control Pack";
}

if($packing3==Portion_Control_Pack)
{
    $packing3="Portion Control Pack";
}




$type_biskuit = $_POST[RESULT2];

$pecah_type = explode(" ",$type_biskuit);

$type1 = $pecah_type[0];
$type2 = $pecah_type[1];
$type3 = $pecah_type[2];
$type4 = $pecah_type[3];
$type5 = $pecah_type[4];
$type6 = $pecah_type[5];




$price_list    = $_POST[PRICE_LIST];
$factory_visit = $_POST[FACTORY_VISIT];
$best_price    = $_POST[BEST_PRICE];
$sample        = $_POST[SAMPLE];



$trader= $_POST[TRADER];

$owndistribution = $_POST[OWNDISTRIBUTION];

$middleman = $_POST[MIDDLEMAN];

$importothercountry = $_POST[IMPORTOTHERCOUNTRY];

$indonesiabiscuit = $_POST[INDONESIABISCUIT];

$never = $_POST[NEVER];

$file_name1 = $_POST[DIREKTORI];

$file_name2 = $_POST[DIREKTORI2];

//$otherbrief = $_POST[OTHERBRIEF];

//$revisitbooth_on = $_POST[REVISITBOOTH_ON];

$others = $_POST[OTHERS];

if($_SESSION[BENUA] == "AF") {


    $benua_asli = "AFRICA";
}else if($_SESSION[BENUA] == "AN"){

    $benua_asli = "ANTARTICA";
} else if($_SESSION[BENUA] == "AS") {


    $benua_asli = "ASIA";
}  else if($_SESSION[BENUA] == "EU") {

    $benua_asli = "EUROPE";
} else if($_SESSION[BENUA] == "NA") {

    $benua_asli = "NORTH AMERICA";
} else if($_SESSION[BENUA] == "OC") {


    $benua_asli = "OCEANIA";

} else if($_SESSION[BENUA] == "SA") {

    $benua_asli = "SOUTH AMERICA";

}

$sql_input = "INSERT INTO buyer SET   PIC = '$pic',
                                               tgl  = '$tgl',
   					      wkt   = '$wkt',
                                            benua   = '$benua_asli',
                                            negara  = '$negara',
                                            company = '$company',
                                             gender = '$gender',
                                            buyer   = '$buyer',
                   			    email   = '$email',
                                  direktori_card    = '$file_name1',
			          direktori_buyer   = '$file_name2',
                                	   trader   ='$trader',
                                             own    = '$owndistribution',
                                          middleman = '$middleman',
                                import_othercountry = '$importothercountry',
                                 indonesia_biscuit  = '$indonesiabiscuit',
                                              never = '$never',
                                         discussion = '$discussion',
                                             rating = '$rating',
                                           packing1 = '$packing1',
                                           packing2 = '$packing2',
                                           packing3 = '$packing3',
                                      biscuit_type1 = '$type1',
                                      biscuit_type2 = '$type2',
                                      biscuit_type3 = '$type3',
                                      biscuit_type4 = '$type4',
                                      biscuit_type5 = '$type5',
                                      biscuit_type6 = '$type6',
                                  price_list        = '$price_list',
			          factory_visit     = '$factory_visit',
				  best_price        = '$best_price',
			          sample            = '$sample',
                                 others             = '$others'";


$hasil_input = mysql_query($sql_input);

include("email_class.php");


$class = new email_class();

$class->notifikasi($tgl,$company,$gender,$buyer,$email,$discussion,$rating,$packing1,$packing2,$packing3,$type1,$type2,
    $type3,$type4,$type5,$type6,$factory_visit,$sample,$trader,$owndistribution,$middleman,
    $importothercountry,$indonesiabiscuit,$never,$others);

// echo "<script>alert('Sudah sampai pemangginlan Fungsi');</script>";

/*------------------------------------*/


if($hasil_input)  {


    echo "<script>alert('Save Berhasil');
                         window.location='exebition.php';  
         	      </script>";

    //header("Location: exebition.php");
}

else {


    echo "<script>alert('Save belum barhasil');
                          window.location='exebition.php';  
		      </script>";
    header("Location: exebition.php");

}

//}


?>
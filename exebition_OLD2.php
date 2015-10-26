<?php session_start();

include "koneksi.php";

$pic= $_SESSION['USERNAME'];

if($_SESSION['HAK'] == "user"){

?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<title>Exebition</title>


 <script src="themes/jquery-1.11.1.min.js"></script>
 <!--script src="jquery-2.1.4.min.js"></script-->
 <script src="animatescroll.js"></script>	
  

 <!--script src="themes/jquery.mobile-1.4.5.min.js"></script-->
 <!--ini untuk autosugest-->
 <!--link rel="stylesheet" href="json/css/jquery-ui.css"/>

<script src="json/js/jquery-ui-1.10.3.js"></script-->
<script>
  $(function() 
  {

   $("#tags").autocomplete({
   	
   source: 'source.php'
   
   
  });
  });
</script>
<!---->


 <!--link rel="stylesheet" href="themes2/new_style.min.css" /> 

 <link rel="stylesheet" href="themes2/jquery.mobile.icons.min.css" /> 

 <link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" /-->
 
 


 

 <!--link rel="stylesheet" href="date/jqm-datebox-1.4.5.min.css" />

<script type="text/javascript" src="date/jqm-datebox-1.4.5.core.min.js"></script>

<script type="text/javascript" src="date/jqm-datebox-1.4.5.mode.flipbox.min.js"></script--> 

<!--script type="text/javascript">

 jQuery.extend(jQuery.mobile, {

 ajaxEnabled: false });

 </script-->

<!--end--> <!--untuk rating--> <link type="text/css" href="jq-rating/labs.css" rel="stylesheet" /> <link type="text/css" href="jq-rating/jquery.raty.css" rel="stylesheet" />

<style>.functions .demo { margin-bottom: 10px; }

.functions .item { background-color: #FEFEFE; border-radius: 4px; display: inline-block; margin-bottom: 5px; padding: 5px 10px; }

.functions .item a { border: 1px solid #CCC; margin-left: 10px; padding: 5px; text-decoration: none; }

.functions .item input { display: inline-block; margin-left: 2px; padding: 5px 6px; width: 120px; }

.functions .item label { display: inline-block; font-size: 1.1em; font-weight: bold; }

.hint { text-align: center; width: 160px }

div.hint { font-size: 1.4em; height: 46px; margin-top: 15px; padding: 7px } </style> <script src="jq-rating/jquery.js"></script> <script src="jq-rating/jquery.raty.js"></script> <script src="jq-rating/labs.js" type="text/javascript"></script>

<script> $(function() { AntiBOT.init('.new_comment');

 CommentResponder.init();

 $('#comment_body').taby(); }); </script> 

 </div>

 <script> $.fn.raty.defaults.path = 'images';

 $(function() {

 $('#ratingx').raty({ cancel : true, target : '#SERIUS', targetType : 'score' }); //------------------------------------------------------------ 

$('#score').raty({ score: 3 });

$('#score-callback').raty({ score: function() { return $(this).attr('data-score'); } });

$('#scoreName').raty({ scoreName: 'entity[score]' });

$('#number').raty({ number: 10 });

$('#number-callback').raty({ number: function() { return $(this).attr('data-number'); } });

$('#numberMax').raty({ numberMax : 5, number : 100 });

$('#readOnly').raty({ readOnly: true, score: 3 });

$('#readOnly-callback').raty({ readOnly: function() { return 'true becomes readOnly' == 'true becomes readOnly'; } });

$('#noRatedMsg').raty({ readOnly : true, noRatedMsg : "I'am readOnly and I haven't rated yet!" });

$('#halfShow-true').raty({ score: 3.26 });

$('#halfShow-false').raty({ halfShow : false, score : 3.26 });

$('#round').raty({ round : { down: .26, full: .6, up: .76 }, score : 3.26 });

$('#half').raty({ half : true, hints : [['bad 1/2', 'bad'], ['poor 1/2', 'poor'], ['regular 1/2', 'regular'], ['good 1/2', 'good'], ['gorgeous 1/2', 'gorgeous']] });

$('#starHalf').raty({ half : true, path : null, starHalf : 'images/star-half-mono.png', starOff : 'images/star-off.png', starOn : 'images/star-on.png' });

$('#click').raty({ click: function(score, evt) { alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type); } });

$('#click-prevent').raty({ click: function(score, evt) { alert('Score will not change.') return false; } });

$('#hints').raty({ hints: ['a', null, '', undefined, '*_*']});

$('#star-off-and-star-on').raty({ path : 'images', starOff : 'off.png', starOn : 'on.png' });

$('#cancel').raty({ cancel: true });

$('#cancelHint').raty({ cancel : true, cancelHint : 'My cancel hint!' });

$('#cancelPlace').raty({ cancel : true, cancelPlace : 'right' });

$('#star-off-and-star-on').raty({ path : 'images', starOff : 'off.png', starOn : 'on.png' });

$('#cancel-off-and-cancel-on').raty({ cancel : true, cancelOff : 'images/cancel-custom-off.png', cancelOn : 'images/cancel-custom-on.png', path : null, starOff : 'images/star-off.png', starOn : 'images/star-on.png' });

$('#iconRange').raty({ path : null, starOff : '../lib/images/star-off.png', iconRange : [ { range: 1, on: 'images/1.png', off: 'images/0.png' }, { range: 2, on: 'images/2.png', off: 'images/0.png' }, { range: 3, on: 'images/3.png', off: 'images/0.png' }, { range: 4, on: 'images/4.png', off: 'images/0.png' }, { range: 5, on: 'images/5.png', off: 'images/0.png' } ] });

$('#size').raty({ path : 'images', cancel : true, cancelOff : 'cancel-off.png', cancelOn : 'cancel-on.png', half : true, starHalf : 'star-half.png', starOff : 'star-off.png', starOn : 'star-on.png' });

$('#target-div').raty({ cancel : true, target : '#target-div-hint' });

$('#target-text').raty({ cancel : true, target : '#target-text-hint' });

$('#target-textarea').raty({ cancel : true, target : '#target-textarea-hint' });

$('#target-select').raty({ cancel : true, target : '#target-select-hint' });

$('#targetType').raty({ cancel : true, target : '#targetType-hint', targetType : 'score' });

$('#targetKeep').raty({ cancel : true, target : '#targetKeep-hint', targetKeep : true });

$('#targetText').raty({ target : '#targetText-hint', targetText : '--' });

$('#targetFormat').raty({ target : '#targetFormat-hint', targetFormat : 'Rating: {score}' });

$('#targetScore').raty({ targetScore: '#target-score' });

$('#mouseover').raty({ mouseover: function(score, evt) { alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type); } });

$('#mouseout').raty({ mouseout: function(score, evt) { alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type); } });

$('#precision').raty({ cancel : true, cancelOff : 'cancel-off.png', cancelOn : 'cancel-on.png', path : 'images', starHalf : 'star-half.png', starOff : 'star-off.png', starOn : 'star-on.png', target : '#precision-hint', targetKeep : true,

 precision : true });

$('#space').raty({ space: false });

$('#single').raty({ single: true });

$('#starType').raty({ cancel : true, half : true, starType : 'i' });

$('#functions').raty({ cancel : true, cancelOff : 'cancel-off.png', cancelOn : 'cancel-on.png', path : 'images', precision : true, starHalf : 'star-half.png', starOff : 'star-off.png', starOn : 'star-on.png', target : '#functions-hint', targetKeep : true, click: function(score, evt) { alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type); }, hints: [ ['bad 1' , 'bad 2' , 'bad 3' , 'bad 4' , 'bad 5' , 'bad 6' , 'bad 7' , 'bad 8' , 'bad 9' , 'bad' ], ['poor 1' , 'poor 2' , 'poor 3' , 'poor 4' , 'poor 5' , 'poor 6' , 'poor 7' , 'poor 8' , 'poor 9' , 'poor' ], ['regular 1' , 'regular 2' , 'regular 3' , 'regular 4' , 'regular 5' , 'regular 6' , 'regular 7' , 'regular 8' , 'regular 9' , 'regular' ], ['good 1' , 'good 2' , 'good 3' , 'good 4' , 'good 5' , 'good 6' , 'good 7' , 'good 8' , 'good 9' , 'good' ], ['gorgeous 1' , 'gorgeous 2' , 'gorgeous 3' , 'gorgeous 4' , 'gorgeous 5' , 'gorgeous 6' , 'gorgeous 7' , 'gorgeous 8' , 'gorgeous 9' , 'gorgeous' ] ] });

$('#score-function-run').on('click', function() { $('#functions').raty('score', $('#' + this.id.replace('-run', '')).val()); });

$('#click-function-run').on('click', function() { $('#functions').raty('click', $('#' + this.id.replace('-run', '')).val()); });

$('#readOnly-function-run').on('click', function() { var isReadOnly = $('#' + this.id.replace('-run', '')).val() === 'true';

 $('#functions').raty('readOnly', isReadOnly); });

$('#cancel-function-run').on('click', function() { var isTrigger = $('#' + this.id.replace('-run', '')).val() === 'true';

 $('#functions').raty('cancel', isTrigger); });

$('#reload-function-run').on('click', function() { $('#functions').raty('reload'); });

$('#get-score-function-run').on('click', function() { alert('score: ' + $('#functions').raty('score')); });

$('#set-score-function-run').on('click', function() { $('#functions').raty('score', $('#' + this.id.replace('-run', '')).val()); });

$('#set-function-run').on('click', function() { var options = $('#' + this.id.replace('-run', '').val()), command = "$('#functions').raty('set', " + options + ");";

 eval(command); });

$('#destroy-function-run').on('click', function() { $('#functions').raty('destroy'); });

$('#move-function-run').on('click', function() { $('#functions').raty('move', $('#' + this.id.replace('-run', '')).val()); }); }); </script>

<!--end of untnuk rating-->

<!--untuk Validasi--> <link rel="stylesheet" href="validation/validation.css" type="text/css"/>

 <script src="validation/jquery.validate.js"></script>

 <script>

 jQuery.validator.addMethod("lettersonly", function(value, element) {

 return this.optional(element) || /^[a-zA-Z\s]+$/i.test(value); 

}, "Harus huruf alphabet"); 

 $(function(){

 $("#FORM").validate({

 //errorClass:'myClass',

 rules: {

 NEGARA: {

 required: true

 },

 COMPANY:{ 

 required: true

 }, 

 BUYER:{ 

 required: true 

 },

 EMAIL: { 

 required: true 

 // email : true

 }, 

 CARD_NAME: { required: true

 }, IMG_BUYER: { required: true 

 } },

 messages: {

 NEGARA:{

 required: "Negara belum terisi" 

 },

 COMPANY:{

 required: "Company belum terisi" 

 },

 BUYER:{

 required: "Buyer belum terisi"

 },

 EMAIL: { 

 required: "Email belum terisi", 

 email : "Format email belum benar" 

 }, 

 CARD_NAME: { required: "Gambar Card Name Belum ada" },

 IMG_BUYER: {

 required: "Gambar Buyer Belum ada" 

 }

 } 

 }) 



 });

 </script> <!--end of untuk Validasi--> 

 </head> 

<body> <?php

if(isset($_POST[SAVE])){ 

 print_r($_POST);

 //date_default_timezone_set("Asia/Jakarta"); date_default_timezone_set("Asia/Dubai");

 $tgl = date(Y)."-".date(m)."-".date(d); $tgl_inter = date(d)."-".date(m)."-".date(Y); 

 $wkt = date('H:i:s'); 

 $benua = $_POST[BENUA]; 

 $negara = $_POST[NEGARA];

 $company = $_POST[COMPANY];

 $gender = $_POST[GENDER];

 $buyer = $_POST[BUYER];

 $email = $_POST[EMAIL];

 $serius = $_POST[SERIUS]; $serius2 = $_POST[score];

 $price_list = $_POST[PRICE_LIST];

 $factory_visit = $_POST[FACTORY_VISIT];

 $private_label = $_POST[PRIVATE_LABEL];

 $best_price = $_POST[BEST_PRICE];

 $sample = $_POST[SAMPLE];

 $price_list_ket = $_POST[PRICE_LIST_KET];

 $factory_visit_ket = $_POST[FACTORY_VISIT_KET];

 $private_label_ket = $_POST[PRIVATE_LABEL_KET];

 $best_price_ket = $_POST[BEST_PRICE_KET];

 $sample_ket = $_POST[SAMPLE_KET];

 $trader= $_POST[TRADER];

 $owndistribution = $_POST[OWNDISTRIBUTION];

 $middleman = $_POST[MIDDLEMAN];

 $haveownbrand = $_POST[HAVEOWNBRAND];

 $haveownbrandket = $_POST[HAVEOWNBRANDKET]; 

 $importothercountry = $_POST[IMPORTOTHERCOUNTRY];

 $importothercountryket = $_POST[IMPORTOTHERCOUNTRYKET];

 $indonesiabiscuit = $_POST[INDONESIABISCUIT];

 $indonesiabiscuitket = $_POST[INDONESIABISCUITKET];

 $never = $_POST[NEVER];

 $otherbrief = $_POST[OTHERBRIEF];

 $packing1 = $_POST[PACKING1];

 $packing2 = $_POST[PACKING2];

 $packing3 = $_POST[PACKING3];

 $packing4 = $_POST[PACKING4];

 $packing5 = $_POST[PACKING5]; 

 $packing6 = $_POST[PACKING6]; 

 $biscuittype1 = $_POST[BISCUITTYPE1]; 

 $biscuittype2 = $_POST[BISCUITTYPE2]; 

 $biscuittype3 = $_POST[BISCUITTYPE3]; 

 $biscuittype4 = $_POST[BISCUITTYPE4]; 

 $biscuittype5 = $_POST[BISCUITTYPE5]; 

 $biscuittype6 = $_POST[BISCUITTYPE6]; 

 $revisitbooth_on = $_POST[REVISITBOOTH_ON];

 $discussion = $_POST[DISCUSSION]; 

 $colour = $_POST[COLOUR];

 $flavour = $_POST[FLAVOUR];

 $vegan = $_POST[VEGAN];

 $halal = $_POST[HALAL];

 $allergen = $_POST[ALLERGEN]; 

 $others = $_POST[OTHERS]; 

 // $ukuran_gbr = GetImageSize($direktori);

 $lokasi_file_card = $_FILES['fcardname']['tmp_name']; 

 $nama_file_card = $_FILES['fcardname']['name']; 

 $ukuran_file_card = $_FILES['fcardname']['size']; 

 $direktori_card = "cardname/$nama_file_card";

 //echo "<b>".$lokasi_file_card."</b>"; 

 $lokasi_file_buyer = $_FILES['fbuyer']['tmp_name']; 

 $nama_file_buyer = $_FILES['fbuyer']['name']; 

 $ukuran_file_buyer = $_FILES['fbuyer']['size']; 

 $direktori_buyer = "buyer/$nama_file_buyer"; 

 #sample1 

 $lokasi_file_sample1 = $_FILES['fsample1']['tmp_name']; 

 $nama_file_sample1 = $_FILES['fsample1']['name']; 

 $ukuran_file_sample1 = $_FILES['fsample1']['size']; 

 $direktori_sample1 = "sample/$nama_file_sample1"; 

 #sample2 

 $lokasi_file_sample2 = $_FILES['fsample2']['tmp_name']; 

 $nama_file_sample2 = $_FILES['fsample2']['name']; 

 $ukuran_file_sample2 = $_FILES['fsample2']['size']; 

 $direktori_sample2 = "sample/$nama_file_sample2"; 

 

 #sample3 

 $lokasi_file_sample3 = $_FILES['fsample3']['tmp_name']; 

 $nama_file_sample3 = $_FILES['fsample3']['name']; 

 $ukuran_file_sample3 = $_FILES['fsample3']['size']; 

 $direktori_sample3 = "sample/$nama_file_sample3"; 

 move_uploaded_file($lokasi_file_card,"$direktori_card"); 



 move_uploaded_file($lokasi_file_buyer,"$direktori_buyer"); 

 move_uploaded_file($lokasi_file_sample1,"$direktori_sample1"); 

 move_uploaded_file($lokasi_file_sample2,"$direktori_sample2"); 

 move_uploaded_file($lokasi_file_sample3,"$direktori_sample3");

 if($_SESSION[BENUA] == "AF") { 

 $benua_asli = "AFRICA"; }else if($_SESSION[BENUA] == "AN"){ $benua_asli = "ANTARTICA"; } else if($_SESSION[BENUA] == "AS") { 

 $benua_asli = "ASIA"; } else if($_SESSION[BENUA] == "EU") {

 $benua_asli = "EUROPE"; } else if($_SESSION[BENUA] == "NA") { $benua_asli = "NORTH AMERICA"; } else if($_SESSION[BENUA] == "OC") { 

 $benua_asli = "OCEANIA";

 } else if($_SESSION[BENUA] == "SA") {

 $benua_asli = "SOUTH AMERICA";

 }

 $sql_input = "INSERT INTO buyer SET tgl = '$tgl', 

 PIC = '$pic', wkt = '$wkt',

 benua = '$benua_asli', 

 negara = '$negara', 

 company = '$company', 

 gender = '$gender', 

 buyer = '$buyer', 

 email = '$email', 

 nama_file_card = '$nama_file_card', 

 ukuran_file_card = '$ukuran_file_card', 

 direktori_card = '$direktori_card', 

 nama_file_buyer = '$nama_file_buyer', 



 ukuran_file_buyer = '$ukuran_file_buyer', 

 direktori_buyer = '$direktori_buyer', 

 status = '$serius2', 

 price_list = '$price_list', 

 factory_visit = '$factory_visit', 

 private_label = '$private_label', 



 best_price = '$best_price', 

 sample = '$sample', 



 price_list_ket = '$price_list_ket', 

 factory_visit_ket = '$factory_visit_ket', 

 private_label_ket = '$private_label_ket', 

 best_price_ket = '$best_price_ket', 

 sample_ket = '$sample_ket', 

 trader='$trader', 

 own = '$owndistribution', 

 middleman= '$middleman', 

 have_ownbrand= '$haveownbrand', 

 have_ownbrand_ket = '$haveownbrandket', 

 import_othercountry = '$importothercountry', 

 import_othercountry_ket = '$importothercountryket', 

 indonesia_biscuit = '$indonesiabiscuit', 

 indonesia_biscuit_ket = '$indonesiabiscuitket', 

 never = '$never', 

 others_brief = '$otherbrief', 

 packing1 = '$packing1', 

 packing2 = '$packing2', 

 packing3 = '$packing3', 

 packing4 = '$packing4', 

 packing5 = '$packing5', 

 packing6 = '$packing6', 

 biscuit_type1 = '$biscuittype1', 

 biscuit_type2 = '$biscuittype2', 

 biscuit_type3 = '$biscuittype3', 

 biscuit_type4 = '$biscuittype4', 

 biscuit_type5 = '$biscuittype5', 

 biscuit_type6 = '$biscuittype6', 

 revisit_booth_on = '$revisitbooth_on', 

 discussion = '$discussion', 

color = '$colour', 

 flavour = '$flavour', 

 labelcontent_vegan = '$vegan', 

 labelcontent_halal = '$halal', 

 labelcontent_allergen = '$allergen', 

 others = '$others', 

 

 

 nama_sample_1 = '$nama_file_sample1', 

 

 ukuran_sample_1 = '$ukuran_file_sample1', 

 



 direktori_sample_1 = '$direktori_sample1', 

 

 nama_sample_2 = '$nama_file_sample2', 

 

 ukuran_sample_2 = '$ukuran_file_sample2', 

 



 direktori_sample_2 = '$direktori_sample2', 

 

 nama_sample_3 = '$nama_file_sample3', 

 

 ukuran_sample_3 = '$ukuran_file_sample3', 

 



 direktori_sample_3 = '$direktori_sample3'

 "; 

 $hasil_input = mysqli_query($mysqli, $sql_input); 



 echo $sql_input; 

 if($discussion == "DISCUSSION")

 { 

 $to = $email; $pieces = explode(",", $to); $jumlah = count($pieces); 

 $subjek = "Thanks for visiting us at Gulfood exhibition, Dubai";

 $message = "<html> 

<head>

<title>Litelmaxx Email</title> 

</head> 

<body style='background-color:#F0EEEE;'> 

 <div style='font-size:9px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;'> 

<table border='0' align='center' width='620'> 

 <tr>

 <td align='center'><div style='font-family:Arial, Helvetica, sans-serif;font-weight:bold;

 font-size:15px;margin-bottom:10px;padding-top:10px;color:#06C;'>KOKOLA BISCUIT</div></td>

 </tr> 

 </table><br> 

<table align='center' width='620' height='600' border='0' cellpadding='3' cellspacing='0'> 

 <tr>

 <td width='620' height='130'><img src='http://kokola.co.id/email/gullfood.png'></td>

 </tr> 

 <tr> 

 <td bgcolor='#FFFFFF'><div style='padding-left:2px;'> 

 <br>";

 

 $message.= "Dear <b> ".$gender." ".$buyer."</b><br><br> 

 Thanks for visiting us at Gulfood exhibition, Dubai on ".$tgl_inter."<br><br> 



We are one of the leading biscuit and wafer manufacturer in Indonesia located in Surabaya.<br> 

 



We had complied ISO 22000, FSSC, BRC version 6, Woolworths Quality Assurance and Halal Certificate.<br> 

 



We have been exporting our products globally such as South East Asia, China, Middle East, Europe,<br> Australia and Africa..<br> 

 <br> 

 



 <br> 

 

 <div style='font-size:13px;'><b> 

 

 

 

 

 Please find below summary of our discussion <br><br>"; 



if($price_list == 'Ya') 

 { 

 $tulis_pricelist = "Price List"; 

 } 

 if($factory_visit == 'Ya') 

 { 

 $tulis_factory_visit = ", Factory Visit"; 

 } 

 if($private_label == 'Ya') 

 { 

 $tulis_private_label = ", Private Label"; 

 } 

 if($best_price == 'Ya') 

 { 

 $tulis_best_price = ", Best Price"; 

 } 

 if($sample == 'Ya') 

 { 

 $tulis_sample= ", Sample"; 

 } 

 



$message .=" 

 



1. You have requested : ".$tulis_pricelist." ".$price_list_ket 

 .$tulis_factory_visit." ".$factory_visit_ket 

 .$tulis_private_label." ".$private_label_ket 

 .$tulis_best_price." ".$best_price_ket 

 .$tulis_sample." ".$sample_ket."<br><br>"; 

 

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

 if($packing4 != "") 

 { 

 $packing4 = $packing4.", "; 

 } 

 if($packing5 != "") 

 { 

 $packing5 = $packing5.", "; 

 } 

 if($packing6 != "") 

 { 

 $packing6 = $packing6; 

 } 

 

 

 //masuk html 

 

 



 

 $message .=" 

 2. Product priority by packing : $packing1 $packing2 $packing3 $packing4 $packing5 $packing6 <br><br>"; 

 

 

 //masuk php lagi 

 



 

 if($biscuittype1 != "") 

 

 

 { 

 $biscuittype1 = $biscuittype1.", "; 

 } 

 if($biscuittype2 != "") 

 { 

 $biscuittype2 = $biscuittype2.", "; 

 } 

 if($biscuittype3 != "") 

 { 

 $biscuittype3 = $biscuittype3.", "; 

 } 

 if($biscuittype4 != "") 

 { 

 $biscuittype4 = $biscuittype4.", "; 

 } 

 if($biscuittype5 != "") 

 { 

 $biscuittype5 = $biscuittype5.", "; 

 } 

 if($biscuittype6 != "") 

 { 

 $biscuittype6 = $biscuittype6; 

 } 

 

 

 //masuk HTML 

 

 

 $message.=" 

 

 3. Product priority by category : $biscuittype1 $biscuittype2 $biscuittype3 $biscuittype4 $biscuittype5 $biscuittype6 <br><br>"; 

 

 

 //masuk php 

 if($colour != "") 

 { 

 $colour = $colour; 

 } 

 if($flavour != "") 

 { 

 $flavour = " and ".$flavour; 

 } 

 

 

 

 

 $message.=" 

 

 4. Ingredients by regulatory : $colour $flavour <br><br>"; 

 

 

 //masuk PHP 

 

 if($halal == 'Ya') 

 { 

 $halal = "Halal, "; 

 } 

 if($vegan == "Ya") 

 { 

 $vegan = "Vegan, "; 

 } 

 if($allergen == "Ya") 

 { 

 $allergen = "Allergen"; 

 } 

 

 

 

 

 $message.=" 

 5. Labeling content : $halal $vegan $allergen <br><br>"; 

 if($others =="")

 {

 $tampil = ""; 

 }

 else

 {

 $tampil = $others; 

 }

 

 $message.="$others <br>"; 

 

 

 if($revisitbooth_on != "0000-00-00") 

 { 

 $kata = "We have appointment for further discussion on ".$revisitbooth_on; 

 } 

 if($revisitbooth_on == "") 

 { 

 $kata = "We will follow up the above inquiry as soon as possible"; 

 } 

 $message.=" 



 <br />

 

 $kata <br><br> 

 

 

 

 

 

 Looking forward for your positive response. 

 

 </b> 

 

 

 </div> 

 

 <br> 

 

 

 

 Have a great day ...<br> 

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

 

 

 



 

 



 

 



 </div></td> 

 



 </tr> 

 



 <tr height='100'> 

 



 <td bgcolor='#FFFFFF'><!--div style='padding-left:2px;'>'.$footer.'</div--> 

 



 <div style='background-color:#FFF;width:620px;'> 

 



 <div style='padding-top:10px;'> 

 

 <a href='http://www.kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> | <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C; 

 



 color:#FFF;' value='View Factory Profile' >View Factory Profile</button></a> 

 



 </div><!--end of tombol--> 

 



 </div><!--end of footer tulisan--> 

 



 </td> 

 



 </tr> 

 



</table><br> 

 

 

 

 

 <table align='center' width='620' height='80' border='0' bgcolor='#f1f6de' style='color:#FFF;font-family:'Trebuchet MS',Arial, Helvetica, sans-serif;border: 1.5px solid #3dcdfc;'> 

 



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



 $headers = "MIME-Version: 1.0" . "\r\n";

 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

 $headers .= 'From: Kokola Group <export@kokola.co.id>' . "\r\n"; 

//untuk pengulangan kirim email 

 for($i=0;$i<$jumlah;$i++){ $maile = mail($pieces[$i], $subjek, $message, $headers); // echo $pieces[$i]."<br>"; 

 }//end for 

 

 }//end of if discussion 

 else if($discussion == "NODISCUSSION") {

 $to = $email; 

 $pieces = explode(",", $to); $jumlah = count($pieces); 

 



 $subjek = "Thanks for visiting us at Gulfood exhibition, Dubai"; 

 



 $message = "<html> 

 



<head> 

 



<title>Litelmaxx Email</title> 

 



</head> 

 

 

 

 

 <body style='background-color:#F0EEEE;'> 

 <div style='font-size:9px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;'> 

 



<table border='0' align='center' width='620'> 

 



 <tr> 

 



 <td align='center'><div style='font-family:Arial, Helvetica, sans-serif;font-weight:bold; 

 



 font-size:15px;margin-bottom:10px;padding-top:10px;color:#06C;'>KOKOLA BISCUIT</div></td> 

 



 </tr> 

 



</table><br> 

 



 

 



 

 



<table align='center' width='620' height='600' border='0' cellpadding='3' cellspacing='0'> 

 



 <tr> 

 



 <td width='620' height='130'><img src='http://kokola.co.id/email/gullfood.png'></td> 

 



 </tr> 

 



 <tr> 

 



 <td bgcolor='#FFFFFF'><div style='padding-left:2px;'> 

 

 

 

 

 <br>"; 

 

 $message.= "Dear <b> ".$gender." ".$buyer."</b><br><br> 

 Thanks for visiting us at Gulfood exhibition, Dubai on ".$tgl_inter."<br><br> 

 

 

 

 

 We are one of the leading biscuit and wafer manufacturer in Indonesia located in Surabaya.<br> 

 



We had complied ISO 22000, FSSC, BRC version 6, Woolworths Quality Assurance and Halal Certificate.<br> 

 



We have been exporting our products globally such as South East Asia, China, Middle East, Europe,<br> Australia and Africa..<br> 

 <br> 

 

 <br> 

 Should you have any inquiry, please do not hesitate to contact us.<br><br> 



 

 

 Have a great day ...<br> 

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

 

 

 



 

 



 

 



 </div></td> 

 



 </tr> 

 



 <tr height='100'> 

 



 <td bgcolor='#FFFFFF'><!--div style='padding-left:2px;'>'.$footer.'</div--> 

 



 <div style='background-color:#FFF;width:620px;'> 

 



 <div style='padding-top:10px;'> 

 



 <a href='http://www.kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> | <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C; 

 



 color:#FFF;' value='View Factory Profile' >View Factory Profile</button></a> 

 



 </div><!--end of tombol--> 

 



 </div><!--end of footer tulisan--> 

 



 </td> 

 



 </tr> 

 



</table><br> 

 

 

 

 

 <table align='center' width='620' height='80' border='0' bgcolor='#f1f6de' style='color:#FFF;font-family:'Trebuchet MS',Arial, Helvetica, sans-serif;border: 1.5px solid #3dcdfc;'> 

 



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



 $headers = "MIME-Version: 1.0" . "\r\n"; 

 



 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

 



 $headers .= 'From: Kokola Group <export@kokola.co.id>' . "\r\n"; 

 for($i=0;$i<$jumlah;$i++){ $maile = mail($pieces[$i], $subjek, $message, $headers); }//end for 

 

 

 }//end of if no discussion 

 

 if($hasil_input) { 

 echo "<script>alert('Save Berhasil'); 



 </script>"; // window.location='exebition.php'; 

 } 

 



 else { 

 echo "<script>alert('Save belum barhasil'); 

 </script>"; 

 //window.location='exebition.php'; 

 

 } 

 



 

 } 

 

 

 

?> 

 

 

 

<div data-role="page" data-theme="a"> 

 



 <div data-role="header" data-position="inline"> 

 



 <h1>Kokola Group Exhibition Apps</h1> 

 



 </div><!--End off header--> 

 

 

 

 

 <div data-role="content" data-theme="a"> 

 



 <form method="post" action="exebition.php" id="FORM" data-ajax="false" enctype="multipart/form-data"> 

 



 <b> Continents</b> 
 <div class="ui-widget">
  <input type="text" name="NEGARA" placeholder="Company Name" id="tags" /> 
 </div>



<!--input type="text" name="pic" placeholder="pic" value="<?php // echo $pic;?>" /--> 

 <b>Company Name</b> 

 



 <input type="text" name="COMPANY" placeholder="Company Name" /> 

 

 

 <table>

 <tr>

 <td> <select name="GENDER" id="GENDER" data-mini="true">

 <option value="Mr">Mr</option>

 <option value="Ms">Ms</option>

 </select>

 </td>

 <td><b>Buyer Name</b></td>

 <td><input type="text" name="BUYER" placeholder="Buyer Name" /></td>

 </tr>

 </table>


 <b>Email</b> 

 



 <input type="text" name="EMAIL" placeholder="Email" /><br> 

  

 <fieldset data-role="controlgroup"> 

 



 <legend><b>Company Brief</b></legend> 

 <label for="TRADER"><input name="TRADER" id="TRADER" value="Ya" type="checkbox"> 

 Trader</label> 

 

 

 <label for="OWNDISTRIBUTION"><input name="OWNDISTRIBUTION" id="OWNDISTRIBUTION" value="Ya" type="checkbox"> 

 Own Distribution</label> 

 

 

 <label for="MIDDLEMAN"><input name="MIDDLEMAN" id="MIDDLEMAN" value="Ya" type="checkbox"> 

 MiddleMan</label> 

 

 </fieldset> 

 

 <fieldset data-role="controlgroup"> 

 



 <legend><b>Biscuit Experience</b></legend> 
 
 <a href="#" onclick="$('#section-2').animatescroll({scrollSpeed:1000,easing:'easeOutElastic'});"><h2>linknya tuh disini</h2></a>

 <label for="HAVEOWNBRAND"><input name="HAVEOWNBRAND" id="HAVEOWNBRAND" value="Ya" type="checkbox"> 

 Have own brand</label> 

 <input type="text" name="HAVEOWNBRANDKET" placeholder="Keterangan Tambahan Have Own Brand" /> 

 

 <label for="IMPORTOTHERCOUNTRY"><input name="IMPORTOTHERCOUNTRY" id="IMPORTOTHERCOUNTRY" value="Ya" type="checkbox"> 

 Import other country</label> 

 <input type="text" name="IMPORTOTHERCOUNTRYKET" placeholder="Keterangan Tambahan Import Other Country" /> 

 

 <label for="INDONESIABISCUIT"><input name="INDONESIABISCUIT" id="INDONESIABISCUIT" value="Ya" type="checkbox"> 

 Indonesia biscuit</label> 

 <input type="text" name="INDONESIABISCUITKET" placeholder="Keterangan Tambahan Indonesia Biscuit" /> 

 <label for="NEVER"><input name="NEVER" id="NEVER" value="Ya" type="checkbox"> 

 Never </label> 

 </fieldset> 

 

 <b>Others Brief</b> 

 

 <textarea name="OTHERBRIEF"></textarea> 

 



 <b>Product Inquiry</b> 

 



 <table data-role="table" id="my-table" data-mode="reflow" class="ui-responsive table-stroke"> 

 <thead> 

 <tr> 

 <th width="23%">Priority</th> 

 <th width="14%" align="center">1</th> 

 <th align="center" width="14%">2</th> 

 <th align="center" width="12%">3</th> 

 <th align="center" width="11%">4</th> 

 <th align="center" width="12%">5</th> 

 <th align="center" width="11%">6</th> 

 </tr> 

 </thead> 

 

 <tbody> 

 <tr> 

 

 <td><b>Packing</b></td> 

 

 <td> 

 

 <select name="PACKING1" id="PACKING1" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Pcp">Pcp</option> 

 <option value="Family">Family</option> 

 <option value="Box">Box</option> 

 </select> 

 <!--end of select--> 

 </td> 

 

 <td> 

 <select name="PACKING2" id="PACKING2" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Pcp">Pcp</option> 

 <option value="Family">Family</option> 

 <option value="Box">Box</option> 

 </select> 

 <!--end of select--></td> 

 

 <td> 

 <select name="PACKING3" id="PACKING3" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Pcp">Pcp</option> 

 <option value="Family">Family</option> 

 <option value="Box">Box</option> 

 </select> 

 <!--end of select--> 

 </td> 

 

 <td> 

 <select name="PACKING4" id="PACKING4" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Pcp">Pcp</option> 

 <option value="Family">Family</option> 

 <option value="Box">Box</option> 

 </select> 

 <!--end of select--> 

 </td> 

 

 <td> 

 <select name="PACKING5" id="PACKING5" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Pcp">Pcp</option> 

 <option value="Family">Family</option> 

 <option value="Box">Box</option> 

 </select> 

 <!--end of select--> 

 </td> 

 <td align="center"> 

 <select name="PACKING6" id="PACKING6" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Pcp">Pcp</option> 

 <option value="Family">Family</option> 

 <option value="Box">Box</option> 

 </select> 

 <!--end of select--></td> 

 

 </tr> 

 

 

 

 <tr><td><b>Biscuit Type</b></td> 

 

 <td> 

 <select name="BISCUITTYPE1" id="BISCUITTYPE1" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Harddough">Harddough</option> 

 <option value="Cookies">Cookies</option> 

 <option value="Wirecut">Wirecut</option> 

 <option value="Crackers">Crackers</option> 

 <option value="Waferstick">Waferstick</option> 

 <option value="Wafer">Wafer</option> 

 </select></td> 

 

 <td> <select name="BISCUITTYPE2" id="BISCUITTYPE2" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Harddough">Harddough</option> 

 <option value="Cookies">Cookies</option> 

 <option value="Wirecut">Wirecut</option> 

 <option value="Crackers">Crackers</option> 

 <option value="Waferstick">Waferstick</option> 

 <option value="Wafer">Wafer</option> 

 </select></td> 

 

 <td> <select name="BISCUITTYPE3" id="BISCUITTYPE3" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Harddough">Harddough</option> 

 <option value="Cookies">Cookies</option> 

 <option value="Wirecut">Wirecut</option> 

 <option value="Crackers">Crackers</option> 

 <option value="Waferstick">Waferstick</option> 

 <option value="Wafer">Wafer</option> 

 </select></td> 

 

 <td> <select name="BISCUITTYPE4" id="BISCUITTYPE4" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Harddough">Harddough</option> 

 <option value="Cookies">Cookies</option> 

 <option value="Wirecut">Wirecut</option> 

 <option value="Crackers">Crackers</option> 

 <option value="Waferstick">Waferstick</option> 

 <option value="Wafer">Wafer</option> 

 </select></td> 

 

 <td> <select name="BISCUITTYPE5" id="BISCUITTYPE5" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Harddough">Harddough</option> 

 <option value="Cookies">Cookies</option> 

 <option value="Wirecut">Wirecut</option> 

 <option value="Crackers">Crackers</option> 

 <option value="Waferstick">Waferstick</option> 

 <option value="Wafer">Wafer</option> 

 </select></td> 

 

 <td> <select name="BISCUITTYPE6" id="BISCUITTYPE6" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Harddough">Harddough</option> 

 <option value="Cookies">Cookies</option> 

 <option value="Wirecut">Wirecut</option> 

 <option value="Crackers">Crackers</option> 

 <option value="Waferstick">Waferstick</option> 

 <option value="Wafer">Wafer</option> 

 </select></td> 

 </tr> 

 </tbody> 

 <tfoot><tr><td colspan="7">&nbsp;</td></tr></tfoot> 

 </table> 

 

 

 

 <div id="section-2"></div>

 

<b>Ingridient</b> 

 <table data-role="table" id="my-table" data-mode="reflow" class="ui-responsive table-stroke" border="0.5"> 

 <thead><tr><th colspan="6">&nbsp;</th></tr></thead> 

 <tbody> 

 <tr> 

 <td colspan="3" align="center"> 

 <b>COLOUR</b> 

 </td> 

 

 

 <td colspan="3" align="center"><b>FLAVOUR</b></td> 

 

 </tr> 

 

 <tr> 

 <td colspan="3"> 

 

 <select name="COLOUR" id="COLOUR" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Artificial Colour">Artificial</option> 

 <option value="Ni Colour">NI</option> 

 <option value="Natural Colour">NATURAL</option> 

 </select> 

 



 <!--end of select--> 

 </td> 

 

 <td colspan="3"> 

 <select name="FLAVOUR" id="FLAVOUR" data-mini="true"> 

 <option value="">Choose</option> 

 <option value="Artificial Flavour">Artificial</option> 

 <option value="Ni Flavour">NI</option> 

 <option value="Natural Flavour">NATURAL</option> </select> 

 



 <!--end of select--></td> 

 

 

 

 

 </tr> 

 

 </tbody> 

 <tfoot><tr><td colspan="6">&nbsp;</td></tr></tfoot> 

 </table> 

 



<b>Label content</b> 

 <table data-role="table" id="my-table" class="ui-responsive table-stroke" border="0.5"> 

 <thead><tr><th colspan="3">&nbsp;</th></tr></thead> 

 <tbody> 

 <tr> 

 <td> 

 <input name="VEGAN" id="VEGAN" value="Ya" type="checkbox"><label for="VEGAN">Vegan</label> 

 </td> 

 <td> 

 <input name="HALAL" id="HALAL" value="Ya" type="checkbox"><label for="HALAL">Halal</label> 

 </td> 

 <td> 

 <input name="ALLERGEN" id="ALLERGEN" value="Ya" type="checkbox"><label for="ALLERGEN">Allergen</label> 

 </td> 

 </tr> 

 </tbody> 

 <tfoot><tr><td colspan="3">&nbsp;</td></tr></tfoot> 

 </table> 

 

 

 

<b>Others</b> 

 <textarea name="OTHERS"></textarea> 

 

 

 

 

 



 

 

 

 



 

 



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

<b>Revisit booth on</b> 

 <!--input type="text" data-role="date" name="REVISITBOOTH" id="tanggal"--> 

 <label for="REVISITBOOTH_ON">Date</label> 

 <input name="REVISITBOOTH_ON" id="REVISITBOOTH_ON" type="text" data-role="datebox" data-options='{"mode":"flipbox"}' /> 

 

 <br />

 

 <fieldset data-role="controlgroup"> 

 <input name="DISCUSSION" id="DISCUSSION" value="DISCUSSION" checked="checked" type="radio"> 

 <label for="DISCUSSION">Discussion</label> 

 <input name="DISCUSSION" id="NODISCUSSION" value="NODISCUSSION" type="radio"> 

 <label for="NODISCUSSION">No Discussion</label> 

 </fieldset>

 <br /> <b>Seriuos Rating</b> <div id="ratingx"></div><br> <input type="hidden" id="SERIUS" name="SERIUS" readonly="readonly" /> 

 

 <!--fieldset data-role="controlgroup"> 

 <input name="SERIUS" id="SERIUS" value="Serious Buyer" checked="checked" type="radio"> 

 <label for="SERIUS">S</label> 

 <input name="SERIUS" id="NOT_SERIUS" value="Not Serious Buyer" type="radio"> 

 <label for="NOT_SERIUS">NS</label> 

 </fieldset--> 

 <b>Name Card Image</b> 

 



 <input type="file" name="fcardname" id="CARD_NAME"/> 

 



 <b>Buyer Image</b> 

 



 <input type="file" name="fbuyer" id="IMG_BUYER" /> 

 

 <b>Sample 1 Image</b> 

 



 <input type="file" name="fsample1" id="IMG_SAMPLE1" /> 

 

 <b>Sample 2 Image</b> 

 



 <input type="file" name="fsample2" id="IMG_SAMPLE2" /> 

 

 <b>Sample 3 Image</b> 

 



 <input type="file" name="fsample3" id="IMG_SAMPLE3" /> 

 



 <input type="submit" value="SAVE" name="SAVE" style="background-color:#96F"/> 

 



 

 

 



 </form> 

 



 <!--accept="image/*;capture=camera"--> 

 



 

 



 <br><br> 

 <div data-role=content> 

 <div class=content-primary> 

 <ul data-role=listview data-split-icon=gear data-split-theme=e> 

 <!--div style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif"--> 

 <?php 

 

 include "koneksi.php"; 

 $sql = "SELECT * FROM buyer ORDER BY ID DESC"; 

 



 $hasil_sql = mysqli_query($mysqli, $sql); 

 echo "<div style='overflow:auto;height:300px;text-align:justify;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif'>"; 

 echo "<ul data-role='listview' data-inset='true' data-filter='true' >"; 

 while($data = mysqli_fetch_assoc($hasil_sql)) {

 echo "<li><a href='detail2.php?ID=$data[ID]' onclick='oke'>"; 

 echo "<script language='javascript'>"; 

 echo "function oke()"; 

 echo "{ 

 window.location.replace('detail2.php?ID=$data[ID]'); 

 }"; 

 echo "</script>"; 

 echo "<div style='float:left'><img src='$data[direktori_card]' width='150px' height='100px'/></div>"; 

 echo "<div style='padding-left:10px;float:left;'>Date : $data[tgl]<br>Buyer : $data[buyer]<br> Company : $data[company]<br>Country : $data[negara] &nbsp; ($data[benua])</div>";

 echo "</a></li>"; 

 } 

 echo "</ul>"; 

 echo "</div>"; 

 ?> 

 </ul> 

 <br /> 

 </div> 

 </div> 

 



 <a href="logout.php" style="text-decoration:none;" onclick="metu()"><input type="button" value="Sign Out" style="background-color:#F00;color:#FFF;" /></a> 

 



 

 



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

 // echo "Anda tidak Berhak"; 

 echo "<script> window.location='index.php'; </script>";

} 

 

 

 ?>
<?php
session_start();

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
<link rel="stylesheet" href="jquery.mobile-1.4.5.min.css">
<script src="jquery-2.1.4.min.js"></script>
<script src="jquery.mobile-1.4.5.min.js"></script>
<script src="jquery-ui.min.js"></script>
<link type="text/css" href="jquery-ui.css" rel="stylesheet">
<script src="animatescroll.js"></script>
<script>$(document).ready(function(){$("#txt1").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#txt2").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#txt3").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#clear").click(function(){$("#result").val("");$("#txt1").prop("disabled",false);$("#txt2").prop("disabled",false);$("#txt3").prop("disabled",false)})});function moveNumbers1(b){var a=document.getElementById("result").value;a=a+b;document.getElementById("result").value=a}</script>
<script>$(document).ready(function(){$("#type1").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type2").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type3").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type4").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type5").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type6").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#clear2").click(function(){$("#result2").val("");$("#type1").prop("disabled",false);$("#type2").prop("disabled",false);$("#type3").prop("disabled",false);$("#type4").prop("disabled",false);$("#type5").prop("disabled",false);$("#type6").prop("disabled",false)})});function moveNumbers2(b){var a=document.getElementById("result2").value;a=a+b;document.getElementById("result2").value=a}</script>
<script>$(function(){$("#tags").autocomplete({delay:0,source:"source.php",select:function(a,b){$("#tags2").val(b.item.con)}})});</script>
<link rel="stylesheet" href="date/jqm-datebox-1.4.5.min.css" />
<script type="text/javascript" src="date/jqm-datebox-1.4.5.core.min.js"></script>
<script type="text/javascript" src="date/jqm-datebox-1.4.5.mode.flipbox.min.js"></script>
<script type="text/javascript">jQuery.extend(jQuery.mobile,{ajaxEnabled:false});</script>
<link type="text/css" href="jq-rating/labs.css" rel="stylesheet" />
<link type="text/css" href="jq-rating/jquery.raty.css" rel="stylesheet" />
<style>.functions .demo{margin-bottom:10px}.functions .item{background-color:#fefefe;border-radius:4px;display:inline-block;margin-bottom:5px;padding:5px 10px}.functions .item a{border:1px solid #CCC;margin-left:10px;padding:5px;text-decoration:none}.functions .item input{display:inline-block;margin-left:2px;padding:5px 6px;width:120px}.functions .item label{display:inline-block;font-size:1.1em;font-weight:bold}.hint{text-align:center;width:160px}div.hint{font-size:1.4em;height:46px;margin-top:15px;padding:7px}*{font:11px Calibri,Arial!important}</style>
<script src="jq-rating/jquery.raty.js"></script>
<script src="jq-rating/labs.js" type="text/javascript"></script>
<script>$(function(){AntiBOT.init(".new_comment");CommentResponder.init();$("#comment_body").taby()});</script>
</div>
<script>/*<![CDATA[*/$.fn.raty.defaults.path="images";$(function(){<?php

	  include "koneksi.php";

	   $idd = $_GET[ID];
	   

	   $sql_status_rating = "SELECT rating FROM buyer WHERE ID = '$idd'";

	   $hasil_rating = mysqli_query($mysqli, $sql_status_rating);

	   $data_rating = mysqli_fetch_assoc($hasil_rating);


	  ?>
        $("#ratingx").raty({readOnly:true,score:<?php echo $data_rating[rating];?>});$("#score").raty({score:3});$("#score-callback").raty({score:function(){return $(this).attr("data-score")}});$("#scoreName").raty({scoreName:"entity[score]"});$("#number").raty({number:10});$("#number-callback").raty({number:function(){return $(this).attr("data-number")}});$("#numberMax").raty({numberMax:5,number:100});$("#readOnly").raty({readOnly:true,score:3});$("#readOnly-callback").raty({readOnly:function(){return"true becomes readOnly"=="true becomes readOnly"}});$("#noRatedMsg").raty({readOnly:true,noRatedMsg:"I'am readOnly and I haven't rated yet!"});$("#halfShow-true").raty({score:3.26});$("#halfShow-false").raty({halfShow:false,score:3.26});$("#round").raty({round:{down:0.26,full:0.6,up:0.76},score:3.26});$("#half").raty({half:true,hints:[["bad 1/2","bad"],["poor 1/2","poor"],["regular 1/2","regular"],["good 1/2","good"],["gorgeous 1/2","gorgeous"]]});$("#starHalf").raty({half:true,path:null,starHalf:"images/star-half-mono.png",starOff:"images/star-off.png",starOn:"images/star-on.png"});$("#click").raty({click:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)}});$("#click-prevent").raty({click:function(score,evt){alert("Score will not change.");return false}});$("#hints").raty({hints:["a",null,"",undefined,"*_*"]});$("#star-off-and-star-on").raty({path:"images",starOff:"off.png",starOn:"on.png"});$("#cancel").raty({cancel:true});$("#cancelHint").raty({cancel:true,cancelHint:"My cancel hint!"});$("#cancelPlace").raty({cancel:true,cancelPlace:"right"});$("#star-off-and-star-on").raty({path:"images",starOff:"off.png",starOn:"on.png"});$("#cancel-off-and-cancel-on").raty({cancel:true,cancelOff:"images/cancel-custom-off.png",cancelOn:"images/cancel-custom-on.png",path:null,starOff:"images/star-off.png",starOn:"images/star-on.png"});$("#iconRange").raty({path:null,starOff:"../lib/images/star-off.png",iconRange:[{range:1,on:"images/1.png",off:"images/0.png"},{range:2,on:"images/2.png",off:"images/0.png"},{range:3,on:"images/3.png",off:"images/0.png"},{range:4,on:"images/4.png",off:"images/0.png"},{range:5,on:"images/5.png",off:"images/0.png"}]});$("#size").raty({path:"images",cancel:true,cancelOff:"cancel-off.png",cancelOn:"cancel-on.png",half:true,starHalf:"star-half.png",starOff:"star-off.png",starOn:"star-on.png"});$("#target-div").raty({cancel:true,target:"#target-div-hint"});$("#target-text").raty({cancel:true,target:"#target-text-hint"});$("#target-textarea").raty({cancel:true,target:"#target-textarea-hint"});$("#target-select").raty({cancel:true,target:"#target-select-hint"});$("#targetType").raty({cancel:true,target:"#targetType-hint",targetType:"score"});$("#targetKeep").raty({cancel:true,target:"#targetKeep-hint",targetKeep:true});$("#targetText").raty({target:"#targetText-hint",targetText:"--"});$("#targetFormat").raty({target:"#targetFormat-hint",targetFormat:"Rating: {score}"});$("#targetScore").raty({targetScore:"#target-score"});$("#mouseover").raty({mouseover:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)}});$("#mouseout").raty({mouseout:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)}});$("#precision").raty({cancel:true,cancelOff:"cancel-off.png",cancelOn:"cancel-on.png",path:"images",starHalf:"star-half.png",starOff:"star-off.png",starOn:"star-on.png",target:"#precision-hint",targetKeep:true,precision:true});$("#space").raty({space:false});$("#single").raty({single:true});$("#starType").raty({cancel:true,half:true,starType:"i"});$("#functions").raty({cancel:true,cancelOff:"cancel-off.png",cancelOn:"cancel-on.png",path:"images",precision:true,starHalf:"star-half.png",starOff:"star-off.png",starOn:"star-on.png",target:"#functions-hint",targetKeep:true,click:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)},hints:[["bad 1","bad 2","bad 3","bad 4","bad 5","bad 6","bad 7","bad 8","bad 9","bad"],["poor 1","poor 2","poor 3","poor 4","poor 5","poor 6","poor 7","poor 8","poor 9","poor"],["regular 1","regular 2","regular 3","regular 4","regular 5","regular 6","regular 7","regular 8","regular 9","regular"],["good 1","good 2","good 3","good 4","good 5","good 6","good 7","good 8","good 9","good"],["gorgeous 1","gorgeous 2","gorgeous 3","gorgeous 4","gorgeous 5","gorgeous 6","gorgeous 7","gorgeous 8","gorgeous 9","gorgeous"]]});$("#score-function-run").on("click",function(){$("#functions").raty("score",$("#"+this.id.replace("-run","")).val())});$("#click-function-run").on("click",function(){$("#functions").raty("click",$("#"+this.id.replace("-run","")).val())});$("#readOnly-function-run").on("click",function(){var isReadOnly=$("#"+this.id.replace("-run","")).val()==="true";$("#functions").raty("readOnly",isReadOnly)});$("#cancel-function-run").on("click",function(){var isTrigger=$("#"+this.id.replace("-run","")).val()==="true";$("#functions").raty("cancel",isTrigger)});$("#reload-function-run").on("click",function(){$("#functions").raty("reload")});$("#get-score-function-run").on("click",function(){alert("score: "+$("#functions").raty("score"))});$("#set-score-function-run").on("click",function(){$("#functions").raty("score",$("#"+this.id.replace("-run","")).val())});$("#set-function-run").on("click",function(){var options=$("#"+this.id.replace("-run","").val()),command="$('#functions').raty('set', "+options+");";eval(command)});$("#destroy-function-run").on("click",function(){$("#functions").raty("destroy")});$("#move-function-run").on("click",function(){$("#functions").raty("move",$("#"+this.id.replace("-run","")).val())})});/*]]>*/</script>
<link rel="stylesheet" href="validation/validation.css" type="text/css"/>
<script src="validation/jquery.validate.js"></script>
<script>jQuery.validator.addMethod("lettersonly",function(b,a){return this.optional(a)||/^[a-zA-Z\s]+$/i.test(b)},"Harus huruf alphabet");$(function(){$("#FORM").validate({rules:{NEGARA:{required:true},COMPANY:{required:true},BUYER:{required:true},EMAIL:{required:true,email:true},CARD_NAME:{required:true},IMG_BUYER:{required:true}},messages:{NEGARA:{required:"Negara belum terisi"},COMPANY:{required:"Company belum terisi"},BUYER:{required:"Buyer belum terisi"},EMAIL:{required:"Email  belum terisi",email:"Format email belum benar"},CARD_NAME:{required:"Gambar Card Name Belum ada"},IMG_BUYER:{required:"Gambar Buyer Belum ada"}}})});</script>
</head>
<body>
<?php



$id = $_GET[ID];
$sql_ambil_data   = "SELECT * FROM buyer WHERE ID = '$id'";
$hasil_ambil_data = mysqli_query($mysqli, $sql_ambil_data);
$data_ambil       = mysqli_fetch_assoc($hasil_ambil_data);







?>
<div data-role="page" data-theme="a">
<div data-role="header" data-position="inline">
<h1>Exhibition Apps 1.0.4</h1>
</div>
<div data-role="content" data-theme="a" class="ui-content">
<div id="section1"</div>
<form method="post" action="exebition.php" id="FORM" data-ajax="false" enctype="multipart/form-data">
<table border="1">
<tr>
<td>
<b>Country</b>
<input type="text" name="NEGARA" placeholder="Country" id="tags" readonly value="<?php echo $data_ambil[negara];?>" />
<input type="hidden" name="BENUA" id="tags2" />
</td>
<td>
<b>Company Name</b>
<input type="text" name="COMPANY" placeholder="Company Name" id="tags" readonly value="<?php echo $data_ambil[company];?>" />
</td>
</tr>
<tr>
<td>
<fieldset data-role="controlgroup" data-type="horizontal">
<label><input type="radio" name="GENDER" id="GENDER" value="Mr" disabled <?php if($data_ambil[gender] == 'Mr'){echo "checked='checked'";};?>>Mr</label>
<label><input type="radio" name="GENDER" id="GENDER" value="Mrs" disabled <?php if($data_ambil[gender] == 'Mrs'){echo "checked='checked'";};?>>Mrs</label>
</fieldset>
</td>
<td>
<b>Buyer Name</b>
<input type="text" name="BUYER" placeholder="Buyer Name" value="<?php echo $data_ambil[buyer];?>" readonly/>
</td>
</tr>
<tr>
<td>
<b>Email</b>
<input type="text" name="EMAIL" placeholder="Email" value="<?php echo $data_ambil[email];?>" readonly><br>
</td>
<td>
<fieldset data-role="controlgroup" data-type="horizontal">
<label for="TRADER"><input name="TRADER" id="TRADER" value="Ya" type="checkbox" disabled <?php if($data_ambil[trader] == 'Ya'){echo "checked='checked'";};?>>Trader</label>
<label for="OWNDISTRIBUTION"><input name="OWNDISTRIBUTION" id="OWNDISTRIBUTION" disabled value="Ya" type="checkbox" <?php if($data_ambil[own] == 'Ya'){echo "checked='checked'";};?>>Own Distribution</label>
<label for="MIDDLEMAN"><input name="MIDDLEMAN" id="MIDDLEMAN" value="Ya" disabled type="checkbox" <?php if($data_ambil[middleman] == 'Ya'){echo "checked='checked'";};?>>MiddleMan</label>
</fieldset>
</td>
</tr>
<tr>
<td>
<fieldset data-role="controlgroup" data-type="horizontal">
<input name="DISCUSSION" id="DISCUSSION" value="DISCUSSION" disabled <?php if($data_ambil[discussion] == 'DISCUSSION'){echo "checked='checked'";};?> type="radio">
<label for="DISCUSSION">Discussion</label>
<input name="DISCUSSION" id="NODISCUSSION" value="NODISCUSSION" disabled <?php if($data_ambil[discussion] == 'NODISCUSSION'){echo "checked='checked'";};?> type="radio">
<label for="NODISCUSSION">No Discussion</label>
</fieldset>
</td>
<td>
<b>Seriuos Rating</b>
<div id="ratingx"></div><br>
<input type="hidden" id="SERIUS" name="SERIUS" readonly="readonly" />
</td>
</tr>
<tr>
<td>
<fieldset data-role="controlgroup" data-type="horizontal">
<legend><b>Biscuit Experience</b></legend>
<label for="IMPORTOTHERCOUNTRY"><input name="IMPORTOTHERCOUNTRY" id="IMPORTOTHERCOUNTRY" disabled value="Ya" type="checkbox" <?php if($data_ambil[import_othercountry] == "Ya"){echo "checked='checked'";}?>>Import other country</label>
<label for="INDONESIABISCUIT"><input name="INDONESIABISCUIT" id="INDONESIABISCUIT" disabled value="Ya" type="checkbox" <?php if($data_ambil[indonesia_biscuit] == "Ya"){echo "checked='checked'";}?>>Indonesia biscuit</label>
<label for="NEVER"><input name="NEVER" id="NEVER" value="Ya" type="checkbox" disabled <?php if($data_ambil[never] == "Ya"){echo "checked='checked'";}?>>Never </label>
</fieldset>
</td>
<td>
<b>Product Inquiry</b><br>
<b>Packing</b> <br> <br>
<?php echo $data_ambil[packing1].", ".$data_ambil[packing2].", ".$data_ambil[packing3]?><br><br>
<b>Biscuit Type:</b> <br> <br>
<i><?php echo $data_ambil[biscuit_type1].", ".$data_ambil[biscuit_type2].", ".$data_ambil[biscuit_type3].", ".$data_ambil[biscuit_type4].", ".$data_ambil[biscuit_type5].", ".$data_ambil[biscuit_type6]?></i>
</td>
</tr>
<tr>
<td>
<b>Others</b>
<textarea name="OTHERS"><?php echo $data_ambil[others];?></textarea>
</td>
<td>
<legend><b>Inquiry Category</b></legend>
<fieldset data-role="controlgroup" data-type="horizontal">
<!--input name="PRICE_LIST" id="PRICE_LIST" disabled value="Ya" type="checkbox" <?php if($data_ambil[price_list] == "Ya"){echo "checked='checked'";}?>><label-- for="PRICE_LIST">Price List</label-->
<input name="FACTORY_VISIT" id="FACTORY_VISIT" disabled value="Ya" type="checkbox" <?php if($data_ambil[factory_visit] == "Ya"){echo "checked='checked'";}?>><label for="FACTORY_VISIT">Factory Visit</label>
<!--input name="BEST_PRICE" id="BEST_PRICE" disabled value="Ya" type="checkbox" <?php if($data_ambil[best_price] == "Ya"){echo "checked='checked'";}?>><label-- for="BEST_PRICE">Best Price</label-->
<input name="SAMPLE" id="SAMPLE" disabled value="Ya" type="checkbox" <?php if($data_ambil[sample] == "Ya"){echo "checked='checked'";}?>><label for="SAMPLE">Sample</label>
</fieldset>
</td>
</tr>
<tr>
<td align="center">
<b>Name Card Image</b><br>
<a href="<?php echo $data_ambil[direktori_card];?>"><img src="<?php echo $data_ambil[direktori_card];?>" width="200" height="150"></img></a>
</td>
<td align="center">
<b>Buyer Image</b><br>
<a href="<?php echo $data_ambil[direktori_buyer];?>"><img src="<?php echo $data_ambil[direktori_buyer];?>" width="200" height="150"></img></a>
</td>
</tr>
</table>
<br>
<br />
<a href="exebition.php" class="ui-btn">Back</a>
</form>
<br><br>
<div data-role=content>
<div class=content-primary>
</div>
</div>
<script>function metu(){location.assign("logout.php")};</script>
</div>
<div data-role="footer">
<h4>Kokola Inc 2015.</h4>
</div>
</div>
</body>
</html>
<?php

}

else

{



 // echo "Anda tidak Berhak";	

  echo "<script>
          window.location='index.php';
        </script>";

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>Detail Buyer</title>

<style type="text/css">
.image {
    max-width: 40%;
    width: 100%;
    height: auto;
	}
</style>




<!--untuk rating-->

<link type="text/css" href="jq-rating/labs.css" rel="stylesheet" />

<link type="text/css" href="jq-rating/jquery.raty.css" rel="stylesheet" />



<style>.functions .demo {

  margin-bottom: 10px;

}



.functions .item {

  background-color: #FEFEFE;

  border-radius: 4px;

  display: inline-block;

  margin-bottom: 5px;

  padding: 5px 10px;

}



.functions .item a {

  border: 1px solid #CCC;

  margin-left: 10px;

  padding: 5px;

  text-decoration: none;

}



.functions .item input {

  display: inline-block;

  margin-left: 2px;

  padding: 5px 6px;

  width: 120px;

}



.functions .item label {

  display: inline-block;

  font-size: 1.1em;

  font-weight: bold;

}



.hint {

  text-align: center;

  width: 160px

}



div.hint {

  font-size: 1.4em;

  height: 46px;

  margin-top: 15px;

  padding: 7px

}

</style>

<script src="jq-rating/jquery.js"></script>

<script src="jq-rating/jquery.raty.js"></script>

<script src="jq-rating/labs.js" type="text/javascript"></script>



<script>

  $(function() {

      AntiBOT.init('.new_comment');



    CommentResponder.init();



    $('#comment_body').taby();

  });

</script>





  </div>



  <script>

  $.fn.raty.defaults.path = 'images';



  $(function() {

   /* $('#ratingx').raty();*/

   /*$('#ratingx').raty({

	   

	  cancel     : true,

      target     : '#SERIUS',

      targetType : 'score'

	   

	   });*/

	  

	  <?php

	  include "koneksi.php";

	   $idd = $_GET[ID];
	   

	   $sql_status_rating = "SELECT rating FROM buyer WHERE ID = '$idd'";

	   $hasil_rating = mysqli_query($mysqli, $sql_status_rating);

	   $data_rating = mysqli_fetch_assoc($hasil_rating);

	  	  

	  ?>

	   

	   

	$('#ratingx').raty({ 

	   readOnly: true,

	    score: <?php echo $data_rating[rating];?> 

	});

	

//------------------------------------------------------------	

	



$('#score').raty({ score: 3 });



$('#score-callback').raty({

  score: function() {

    return $(this).attr('data-score');

  }

});



$('#scoreName').raty({ scoreName: 'entity[score]' });



$('#number').raty({ number: 10 });



$('#number-callback').raty({

  number: function() {

    return $(this).attr('data-number');

  }

});



$('#numberMax').raty({

  numberMax : 5,

  number    : 100

});



$('#readOnly').raty({ readOnly: true, score: 3 });



$('#readOnly-callback').raty({

  readOnly: function() {

    return 'true becomes readOnly' == 'true becomes readOnly';

  }

});



$('#noRatedMsg').raty({

  readOnly   : true,

  noRatedMsg : "I'am readOnly and I haven't rated yet!"

});



$('#halfShow-true').raty({ score: 3.26 });



$('#halfShow-false').raty({

  halfShow : false,

  score    : 3.26

});



$('#round').raty({

  round : { down: .26, full: .6, up: .76 },

  score : 3.26

});



$('#half').raty({

  half  : true,

  hints : [['bad 1/2', 'bad'], ['poor 1/2', 'poor'], ['regular 1/2', 'regular'], ['good 1/2', 'good'], ['gorgeous 1/2', 'gorgeous']]

});



$('#starHalf').raty({

  half     : true,

  path     : null,

  starHalf : 'images/star-half-mono.png',

  starOff  : 'images/star-off.png',

  starOn   : 'images/star-on.png'

});



$('#click').raty({

  click: function(score, evt) {

    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);

  }

});



$('#click-prevent').raty({

  click: function(score, evt) {

    alert('Score will not change.')

    return false;

  }

});



$('#hints').raty({ hints: ['a', null, '', undefined, '*_*']});



$('#star-off-and-star-on').raty({

  path    : 'images',

  starOff : 'off.png',

  starOn  : 'on.png'

});



$('#cancel').raty({ cancel: true });



$('#cancelHint').raty({

  cancel     : true,

  cancelHint : 'My cancel hint!'

});



$('#cancelPlace').raty({

  cancel      : true,

  cancelPlace : 'right'

});



$('#star-off-and-star-on').raty({

  path    : 'images',

  starOff : 'off.png',

  starOn  : 'on.png'

});



$('#cancel-off-and-cancel-on').raty({

  cancel    : true,

  cancelOff : 'images/cancel-custom-off.png',

  cancelOn  : 'images/cancel-custom-on.png',

  path      : null,

  starOff   : 'images/star-off.png',

  starOn    : 'images/star-on.png'

});



$('#iconRange').raty({

  path      : null,

  starOff   : '../lib/images/star-off.png',

  iconRange : [

    { range: 1, on: 'images/1.png', off: 'images/0.png' },

    { range: 2, on: 'images/2.png', off: 'images/0.png' },

    { range: 3, on: 'images/3.png', off: 'images/0.png' },

    { range: 4, on: 'images/4.png', off: 'images/0.png' },

    { range: 5, on: 'images/5.png', off: 'images/0.png' }

  ]

});



$('#size').raty({

  path      : 'images',

  cancel    : true,

  cancelOff : 'cancel-off.png',

  cancelOn  : 'cancel-on.png',

  half      : true,

  starHalf  : 'star-half.png',

  starOff   : 'star-off.png',

  starOn    : 'star-on.png'

});



$('#target-div').raty({

  cancel : true,

  target : '#target-div-hint'

});



$('#target-text').raty({

  cancel : true,

  target : '#target-text-hint'

});



$('#target-textarea').raty({

  cancel : true,

  target : '#target-textarea-hint'

});



$('#target-select').raty({

  cancel : true,

  target : '#target-select-hint'

});



$('#targetType').raty({

  cancel     : true,

  target     : '#targetType-hint',

  targetType : 'score'

});



$('#targetKeep').raty({

  cancel     : true,

  target     : '#targetKeep-hint',

  targetKeep : true

});



$('#targetText').raty({

  target     : '#targetText-hint',

  targetText : '--'

});



$('#targetFormat').raty({

  target       : '#targetFormat-hint',

  targetFormat : 'Rating: {score}'

});



$('#targetScore').raty({

  targetScore: '#target-score'

});



$('#mouseover').raty({

  mouseover: function(score, evt) {

    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);

  }

});



$('#mouseout').raty({

  mouseout: function(score, evt) {

    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);

  }

});



$('#precision').raty({

  cancel     : true,

  cancelOff  : 'cancel-off.png',

  cancelOn   : 'cancel-on.png',

  path       : 'images',

  starHalf   : 'star-half.png',

  starOff    : 'star-off.png',

  starOn     : 'star-on.png',

  target     : '#precision-hint',

  targetKeep : true,



  precision  : true

});



$('#space').raty({ space: false });



$('#single').raty({ single: true });



$('#starType').raty({

  cancel   : true,

  half     : true,

  starType : 'i'

});



$('#functions').raty({

  cancel     : true,

  cancelOff  : 'cancel-off.png',

  cancelOn   : 'cancel-on.png',

  path       : 'images',

  precision  : true,

  starHalf   : 'star-half.png',

  starOff    : 'star-off.png',

  starOn     : 'star-on.png',

  target     : '#functions-hint',

  targetKeep : true,

  click: function(score, evt) {

    alert('ID: ' + this.id + "\nscore: " + score + "\nevent: " + evt.type);

  },

  hints: [

    ['bad 1'      , 'bad 2'      , 'bad 3'      , 'bad 4'      , 'bad 5'      , 'bad 6'      , 'bad 7'      , 'bad 8'      , 'bad 9'      , 'bad'      ], 

    ['poor 1'     , 'poor 2'     , 'poor 3'     , 'poor 4'     , 'poor 5'     , 'poor 6'     , 'poor 7'     , 'poor 8'     , 'poor 9'     , 'poor'     ], 

    ['regular 1'  , 'regular 2'  , 'regular 3'  , 'regular 4'  , 'regular 5'  , 'regular 6'  , 'regular 7'  , 'regular 8'  , 'regular 9'  , 'regular'  ], 

    ['good 1'     , 'good 2'     , 'good 3'     , 'good 4'     , 'good 5'     , 'good 6'     , 'good 7'     , 'good 8'     , 'good 9'     , 'good'     ], 

    ['gorgeous 1' , 'gorgeous 2' , 'gorgeous 3' , 'gorgeous 4' , 'gorgeous 5' , 'gorgeous 6' , 'gorgeous 7' , 'gorgeous 8' , 'gorgeous 9' , 'gorgeous' ]

  ]

});



$('#score-function-run').on('click', function() {

  $('#functions').raty('score', $('#' + this.id.replace('-run', '')).val());

});



$('#click-function-run').on('click', function() {

  $('#functions').raty('click', $('#' + this.id.replace('-run', '')).val());

});



$('#readOnly-function-run').on('click', function() {

var isReadOnly = $('#' + this.id.replace('-run', '')).val() === 'true';



  $('#functions').raty('readOnly', isReadOnly);

});



$('#cancel-function-run').on('click', function() {

var isTrigger = $('#' + this.id.replace('-run', '')).val() === 'true';



  $('#functions').raty('cancel', isTrigger);

});



$('#reload-function-run').on('click', function() {

  $('#functions').raty('reload');

});



$('#get-score-function-run').on('click', function() {

  alert('score: ' + $('#functions').raty('score'));

});



$('#set-score-function-run').on('click', function() {

  $('#functions').raty('score', $('#' + this.id.replace('-run', '')).val());

});



$('#set-function-run').on('click', function() {

  var options = $('#' + this.id.replace('-run', '').val()),

      command = "$('#functions').raty('set', " + options + ");";



  eval(command);

});



$('#destroy-function-run').on('click', function() {

  $('#functions').raty('destroy');

});



$('#move-function-run').on('click', function() {

  $('#functions').raty('move', $('#' + this.id.replace('-run', '')).val());

});

  });

</script>



<!--end of untnuk rating-->






</head>







<body #F0EEEE>



<?php



include "koneksi.php";







$ID = $_GET[ID];







 $sql = "SELECT * FROM buyer WHERE ID = '$ID'";



 $hasil_sql = mysqli_query($mysqli, $sql);



 



 $data = mysqli_fetch_assoc($hasil_sql);



if(isset($_GET[PRO])) {
  
  $id = $_GET[ID];
  
  $pro = $_GET[PRO];
  
  $sql_ubah = "UPDATE buyer SET progress = '$pro' WHERE ID = '$id'";
  
 // echo $sql_ubah;
  
  $hasil_ubah = mysqli_query($mysqli, $sql_ubah);
  
  if($hasil_ubah) {
  
    echo "<script>
    
            window.location='subhanallah.php';
            location.assign='subhanallah.php';
    
         </script>";
    
  }
  else {
    
    echo "Edit Status Gagal";
  }
  

} 



 



?>



<table border="1" cellspacing="0" cellpadding="2" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10pt;">

<tr>
  <th align="center" colspan="5" style="text-decoration:underline"><h3>BUYER DETAIL</h3></th>
</tr>
<tr>
  <th align="center" colspan="5" style="text-decoration:underline"><h3>
  <form method='get' action='detail.php'>
     <select name="PRO" onChange="this.form.submit()"><?php echo $data[progress];?></h3>
       <option value="Unprocessed" <?php if($data[progress] == "Unprocessed"){echo "selected='selected'";}?>><b>Unprocessed</b></option>
       <option value="Processed" <?php if($data[progress] == "Processed"){echo "selected='selected'";}?><b>Processed</b></option>
       <input type='hidden' name='ID' value = '<?php echo $data[ID];?>'>
     </select>
   </form>  
     
  </th>
</tr>
<tr>
  <th align="center" colspan="5">PIC = <?php echo $data[PIC];?> | <?php echo $data[tgl]; echo " - ".$data[wkt];?></th>
</tr>
<tr>
  <th width="15%" align="left">Buyer Name</td>
  <td width="35%" align="left" style="font-size:16px"><?php echo $data[buyer];?></td>
  <th width="10%" align="left">Area</th>
  <td colspan="2" width="40%" align="left" style="font-size:16px"><?php echo $data[benua];?> &nbsp;  <?php echo $data[negara];?></th>  
</tr>
<tr>
  <th align="left" >Email</th>
  <td align="left" style="font-size:16px"><?php echo $data[email];?></th>
  <th align="left">Buyer Rating</th>
  <th colspan="2" style="font-size:16px" align="left">
  <div id="ratingx"></div>
        <input type="hidden" id="SERIUS" name="SERIUS" readonly="readonly" />
        
        </th>
  </tr>
<tr>

     <th align="left">Revisit booth on</th>
     <td align="left" style="font-size:16px"><?php echo $data[revisit_booth_on];?></th>
     <th colspan="3" align="center">&nbsp;</th>
   </tr>

<tr>



      <th align="center" colspan="5"><strong>Inquiry</strong></th>



</tr>



<tr>



      <th align="center">Price List</th>



      <th align="center">Factory Visit</th>



      <!--th align="center">Private Label</th-->



      <th width="151" align="center">Best Price</th>



      <th width="176" align="center">Sample</th>



      



</tr>



<tr>



      <th align="center"><?php 	if($data[price_list_ket]== "" && $data[price_list] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
	  							if($data[price_list_ket]!= "" && $data[price_list] == "Ya"){echo $data[price_list_ket];}
								if($data[price_list]== ""){echo "<img src='cross.png' width='20' height='20'>";}?></th>



      <th align="center"><?php if($data[factory_visit_ket]=="" && $data[factory_visit] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
	  					if($data[factory_visit_ket]!="" && $data[factory_visit] == "Ya"){echo $data[factory_visit_ket];}
						if($data[factory_visit]==""){echo "<img src='cross.png' width='20' height='20'>";}?></th>



      <!--th align="center"><?php 	if($data[private_label_ket]=="" && $data[private_label] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
	  							if($data[private_label_ket]!="" && $data[private_label] == "Ya"){echo $data[private_label_ket];}
	  							if($data[private_label]== ""){echo "<img src='cross.png' width='20' height='20'>";}?></th-->



      <th align="center"><?php 	if($data[best_price_ket]== "" && $data[best_price] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
	  							if($data[best_price_ket]!= "" && $data[best_price] == "Ya"){echo $data[best_price_ket];}
	  							if($data[best_price]==""){echo "<img src='cross.png' width='20' height='20'>";}?></th>



      <th align="center"><?php 	if($data[sample_ket] == "" && $data[sample] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
	  							if($data[sample_ket] != "" && $data[sample] == "Ya"){echo $data[sample_ket];}
	  							if($data[sample]=""){echo "<img src='cross.png' width='20' height='20'>";}?></th>



      



</tr>



<!--tr>



   <td align="center"><textarea cols="18" rows="2" readonly="readonly"><?php //echo $data[price_list_ket];?></textarea></td>



   <td align="center"><textarea cols="18" rows="2" readonly="readonly"><?php //echo $data[factory_visit_ket];?></textarea></td>



   <td align="center"><textarea cols="18" rows="2" readonly="readonly"><?php //echo $data[private_label_ket];?></textarea></td>



   <td align="center"><textarea cols="18" rows="2" readonly="readonly"><?php //echo $data[best_price_ket];?></textarea></td> 



   <td align="center"><textarea cols="18" rows="2" readonly="readonly"><?php //echo $data[sample_ket];?></textarea></td>



</tr-->



</table><br>

<table border="1" cellspacing="0" cellpadding="2" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10pt;">

<tr>

      <th align="center" colspan="3"><strong>Company Brief</strong></th>

</tr>

<tr>
      <td align="center">Trader</td>

      <td align="center">Own Distribution</td>

      <td align="center">Middle Man</td>

  </tr>



<tr>



      <th align="center"><?php if($data[trader] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>



      <th align="center"><?php if($data[own] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>



      <th align="center"><?php if($data[middleman] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?>

      </th>



  </tr>



</table>



<br>



<table border="1" cellspacing="0" cellpadding="2" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:10pt;" >



<tr>



      <td align="center" colspan="4"><strong>Biscuit Experience</strong></td>



</tr>



<tr>



      <!--td align="center">Have Own Brand</td-->



      <td align="center">Import Other Country</td>



      <td align="center">Indonesia Biscuit</td>



      <td align="center">Never</td>



  </tr>



<tr>



      <!--th align="center"><?php if($data[have_ownbrand_ket]== "" && $data[have_ownbrand] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
							   if($data[have_ownbrand_ket]!= "" && $data[have_ownbrand] == "Ya"){echo $data[have_ownbrand_ket];}
	  							if($data[have_ownbrand]==""){echo "<img src='cross.png' width='20' height='20'>";}?></th-->
      




      <th align="center"><?php if($data[import_othercountry_ket]== "" && $data[import_othercountry] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
	  						   if($data[import_othercountry_ket]!= "" && $data[import_othercountry] == "Ya"){echo $data[import_othercountry_ket];}
	  						   if($data[import_othercountry]==""){echo "<img src='cross.png' width='20' height='20'>";}?></th>



      <th align="center"><?php if($data[indonesia_biscuit_ket]== "" && $data[indonesia_biscuit] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}
	  							if($data[indonesia_biscuit_ket]!= "" && $data[indonesia_biscuit] == "Ya"){echo $data[indonesia_biscuit_ket];}
	  						   if($data[indonesia_biscuit]==""){echo "<img src='cross.png' width='20' height='20'>";}?></th>



      <th align="center"><?php if($data[never] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>



  </tr>



<!--tr>



   <td align="center"><textarea cols="23" rows="2" readonly="readonly"><?php # echo $data[have_ownbrand_ket];?></textarea></td>



   <td align="center"><textarea cols="23" rows="2" readonly="readonly"><?php #echo $data[import_othercountry_ket];?></textarea></td>



   <td align="center"><textarea cols="23" rows="2" readonly="readonly"><?php #echo $data[indonesia_biscuit_ket];?></textarea></td>



   <td align="center">&nbsp;</td> 



  </tr-->

<!--tr>

  <td colspan="4" align="center"><strong>Other Brief</strong></td>

  </tr-->

<!--tr>

  <td colspan="4" align="center"><textarea name="textarea" cols="100" rows="2" readonly="readonly"><?php echo $data[others_brief ];?></textarea></td>

  </tr-->





</table>



<br />



<table border="1" cellspacing="0" cellpadding="2" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10pt;">

   	<thead>

    <tr>

      <th colspan="7"><strong>Product Inquiry</strong></th>

      </tr>

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

        

        <td align="center">

        	

    <?php echo $data[packing1]; ?>

          </td>

        

        <td align="center">

  			<?php echo $data[packing2]; ?>

    </td>

    

    <td align="center">

  			<?php echo $data[packing3]; ?>

     </td>

   

   <td align="center">

   <?php echo $data[packing4]; ?>

   </td>

    

    <td align="center">

    	<?php echo $data[packing5]; ?>

   </td>

    	<td align="center">

    		<?php echo $data[packing6]; ?>

        	

        </td>

    

    </tr>

    

    

    

    	<tr><td><b>Biscuit Type</b></td>

        

        <td align="center">

       <?php echo $data[biscuit_type1]; ?>

       

       </td>

    

    <td align="center"> 

    <?php echo $data[biscuit_type2]; ?>

    

    </td>

    

    <td align="center"> 

    <?php echo $data[biscuit_type3]; ?>

    </td>

    

    <td align="center"> 

    <?php echo $data[biscuit_type4]; ?>

    </td>

    

    <td align="center"> 

    <?php echo $data[biscuit_type5]; ?>

    </td>

    

    <td align="center"> 

    <?php echo $data[biscuit_type6]; ?>

    

    </td>

    </tr>

    </tbody>   

</table>

<br />

   <table border="1" cellspacing="0" cellpadding="2" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:10pt;">

     <!--tr>

       <th align="center" colspan="4"><strong>Label content</strong></th>

     </tr-->

     <tr>

       <!--th width="201" align="center">Vegan</th>

       <th width="205" align="center">Halal</th>

       <th width="241" align="center">Allergen</th-->

       <th  align="center">Other</th>

     </tr>

     <tr>

       <!--th align="center"><?php if($data[labelcontent_vegan] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>

       <th align="center"><?php if($data[labelcontent_halal] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th>

       <th align="center"><?php if($data[labelcontent_allergen] == "Ya"){echo "<img src='cek.png' width='15' height='15'>";}else{echo "<img src='cross.png' width='20' height='20'>";}?></th-->

       <th align="center"><textarea name="textarea2" cols="100" rows="5" readonly="readonly"><?php echo $data[others];?></textarea></th>

     </tr>

   

</table>

   <br />

<!--table border="1" cellspacing="0" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10pt;">
   <tr>



      <th align="center" colspan="2"><strong>Ingridient</strong></th>



   </tr>


  <tr>





    <td width="441" align="center">Color = <?php echo $data[color];?></td>

      <td width="449" align="center">Flavour = <?php echo $data[flavour];?></td>



  </tr>   

</table-->
<br />
<table border="1" cellspacing="0" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10pt;">
  
  <tr>

        <th width="50%" align="center">Name Card Inage</th>

        <th width="50%" align="center">Buyer Image</th>

  </tr>

   <tr>



      <td align="center" ><a href="<?php echo $data[direktori_card]; ?>"><img class="image" src="<?php echo $data[direktori_card];?>" /></a></td>



      <td align="center"><a href="<?php echo $data[direktori_buyer]; ?>"><img class="image" src="<?php echo $data[direktori_buyer];?>" /></a></td>



   </tr>

</table>

<table border="1" cellspacing="0" align="center" width="900" style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10pt;">

<!--tr>



      <th align="center">Sample 1 Image</th>



      <th align="center">Sample 2 Image</th>

      

      <th align="center">Sample 3 Image</th>



  </tr>



<tr>

     <td align="center" width="33%"><a href="<?php echo $data[direktori_sample_1]; ?>"><img class="image" src="<?php echo $data[direktori_sample_1];?>"  /><a></td>

     <td align="center" width="33%"><a href="<?php echo $data[direktori_sample_2]; ?>"><img class="image" src="<?php echo $data[direktori_sample_2];?>"  /><a></td>

     <td align="center" width="33%"><a href="<?php echo $data[direktori_sample_3]; ?>"><img class="image" src="<?php echo $data[direktori_sample_3];?>" /><a></td>

  </tr-->

   <tr>

     <th align="center" colspan="4"><a href="subhanallah.php"><!--img src="back.png" style="margin-left:200px;" /--><input type="button" value="Back"></a></th>

   </tr>

</table>





</body>



</html>
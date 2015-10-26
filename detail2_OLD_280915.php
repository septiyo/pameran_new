<?php

session_start();

include "koneksi.php";

if($_SESSION['HAK'] == "user" )
{
$ID = $_GET[ID];


$sql = "SELECT * FROM buyer WHERE ID = '$ID'";

 $hasil_sql = mysqli_query($mysqli, $sql);

 

 $data = mysqli_fetch_assoc($hasil_sql);
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Exebition</title>


   <style>
   
      .xxx
      {
         max-width:40%;
         width:100%;
         height:auto;
      }
   
   
   
   </style>



    <!--link rel="stylesheet" href="themes/sip.min.css" />

	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />

	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" /-->
    
    
    <link rel="stylesheet" href="themes2/new_style.min.css" />



	<link rel="stylesheet" href="themes2/jquery.mobile.icons.min.css" />



	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />

    

	<script src="themes/jquery-1.11.1.min.js"></script>

	<script src="themes/jquery.mobile-1.4.5.min.js"></script>

     

<!--date -->

<!--script src="jquery/jquery.ui.datepicker.js"></script>
    <script id="mobile-datepicker" src="jquery/jquery.mobile.datepicker.js"></script>
<link rel="stylesheet" href="jquery/jquery.mobile.datepicker.css" /-->

<link rel="stylesheet" href="date/jqm-datebox-1.4.5.min.css" />
<script type="text/javascript" src="date/jqm-datebox-1.4.5.core.min.js"></script>
<script type="text/javascript" src="date/jqm-datebox-1.4.5.mode.flipbox.min.js"></script>

<script type="text/javascript">
    jQuery.extend(jQuery.mobile,
    {
      ajaxEnabled: false
    });
    </script>
<!--end-->


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
	  
	   $idd = $_GET[ID];
	   $sql_status_rating = "SELECT status FROM buyer WHERE ID = '$idd'";
	   $hasil_rating = mysqli_query($mysqli, $sql_status_rating);
	   $data_rating = mysqli_fetch_assoc($hasil_rating);
	  
	  
	  ?>
	   
	   
	$('#ratingx').raty({ 
	   readOnly: true,
	    score: <?php echo $data_rating[status];?> 
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



<!--untuk validasi-->


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



                    required: true



                    //email : true

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

<!--end of validasi-->

    

</head>



<body>


<div data-role="page" data-theme="a">


  <div data-role="header" data-position="inline">

			<h1>Kokola Group Exhibition Apps</h1>

  </div><!--End off header-->



  <div data-role="content" data-theme="a">

   <form method="post" action="detail2.php" id="FORM" data-ajax="false" enctype="multipart/form-data">

      <b> Continents</b>



    <div class="ui-field-contain">


    <input type="hidden" name="ID" placeholder="ID" value="<?php echo $data[ID]; ?>" />
    <input type="text" readonly="readonly" name="BENUA" placeholder="Company Name" value="<?php echo $data[benua]; ?>" />

    </div><!--end of select-->

    
<b>Negara</b>
    <div class="ui-field-contain">

<input type="text" name="NEGARA" readonly="readonly" placeholder="Company Name" value="<?php echo $data[negara]; ?>" />

    <!--select name="NEGARA"  data-mini="true">

        <option value="">Choose Country</option-->

    
        



    </select>

    </div><!--end of select-->

     

    <b>Company Name</b>

    <input type="text" name="COMPANY" placeholder="Company Name" value="<?php echo $data[company]; ?>" />
    
     <table>
      <tr>
         <td> <select name="GENDER" id="GENDER" data-mini="true">
                <option value="Mr" <?php if($data[gender] == "Mr"){echo "selected='selected'";}?>>Mr</option>
                <option value="Ms" <?php if($data[gender] == "Ms"){echo "selected='selected'";}?>>Ms</option>
              </select>
          </td>
         <td><b>Buyer Name</b></td>
         <td><input type="text" name="BUYER" placeholder="Buyer Name" value="<?php echo $data[buyer]; ?>" /></td>
      </tr>
    </table>
    
    

    <b>Email</b>

    <input type="text" name="EMAIL" placeholder="Email" value="<?php echo $data[email]; ?>" /><br>

	



       

    
   <fieldset data-role="controlgroup">

        <legend><b>Company Brief</b></legend>
		<label for="TRADER"><input name="TRADER" id="TRADER" value="Ya" type="checkbox" <?php if($data[trader]=='Ya') echo "checked='checked'"; ?>>
        Trader</label>
       
        
        		<label for="OWNDISTRIBUTION"><input name="OWNDISTRIBUTION" id="OWNDISTRIBUTION" value="Ya" <?php if($data[own]=='Ya') echo "checked='checked'"; ?> type="checkbox">
        Own Distribution</label>
        
        
        <label for="MIDDLEMAN"><input name="MIDDLEMAN" id="MIDDLEMAN" value="Ya" <?php if($data[middleman]=='Ya') echo "checked='checked'"; ?> type="checkbox">
        MiddleMan</label>
        
   </fieldset>
   
   <fieldset data-role="controlgroup">

        <legend><b>Biscuit Experience</b></legend>
		<label for="HAVEOWNBRAND"><input name="HAVEOWNBRAND" id="HAVEOWNBRAND" value="Ya" type="checkbox" <?php if($data[have_ownbrand]=='Ya') echo "checked='checked'"; ?>>
        Have own brand</label>
       <input type="text" name="HAVEOWNBRANDKET" placeholder="Keterangan Tambahan Have Own Brand" value="<?php echo $data[have_ownbrand_ket]; ?>" />
        
        		<label for="IMPORTOTHERCOUNTRY"><input name="IMPORTOTHERCOUNTRY" id="IMPORTOTHERCOUNTRY" value="Ya" <?php if($data[import_othercountry]=='Ya') echo "checked='checked'"; ?> type="checkbox">
        Import other country</label>
 		<input type="text" name="IMPORTOTHERCOUNTRYKET" placeholder="Keterangan Tambahan Import Other Country"  value="<?php echo $data[import_othercountry_ket]; ?>"/>        
        
        <label for="INDONESIABISCUIT"><input name="INDONESIABISCUIT" id="INDONESIABISCUIT" value="Ya"  type="checkbox" <?php if($data[indonesia_biscuit]=='Ya') echo "checked='checked'"; ?> >
        Indonesia biscuit</label>
        <input type="text" name="INDONESIABISCUITKET" placeholder="Keterangan Tambahan Indonesia Biscuit" value="<?php echo $data[indonesia_biscuit_ket]; ?>" /> 
        <label for="NEVER"><input name="NEVER" id="NEVER" value="Ya" type="checkbox" <?php if($data[never]=='Ya') echo "checked='checked'"; ?>>
        Never </label> 
   </fieldset>
   
      <b>Others Brief</b>
   
   <textarea name="OTHERBRIEF"><?php echo $data[others_brief]; ?></textarea>

 <b>Product Inquiry</b>

   <table  data-role="table" id="my-table" data-mode="reflow" class="ui-responsive table-stroke">
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
     	<option value="Pcp" <?php if($data[packing1] == "Pcp"){echo "selected='selected'";}?> >Pcp</option>
        <option value="Family" <?php if($data[packing1] == "Family"){echo "selected='selected'";}?> >Family</option>
        <option value="Box" <?php if($data[packing1] == "Box"){echo "selected='selected'";}?> >Box</option>
    </select>
    <!--end of select-->
        </td>
        
        <td>
  <select name="PACKING2" id="PACKING2" data-mini="true">
        <option value="">Choose</option>
     	<option value="Pcp" <?php if($data[packing2] == "Pcp"){echo "selected='selected'";}?> >Pcp</option>
        <option value="Family" <?php if($data[packing2] == "Family"){echo "selected='selected'";}?> >Family</option>
        <option value="Box" <?php if($data[packing2] == "Box"){echo "selected='selected'";}?> >Box</option>
    </select>
    <!--end of select--></td>
    
    <td>
<select name="PACKING3" id="PACKING3" data-mini="true">
        <option value="">Choose</option>
     	<option value="Pcp" <?php if($data[packing3] == "Pcp"){echo "selected='selected'";}?> >Pcp</option>
        <option value="Family" <?php if($data[packing3] == "Family"){echo "selected='selected'";}?> >Family</option>
        <option value="Box" <?php if($data[packing3] == "Box"){echo "selected='selected'";}?> >Box</option>
    </select>
   <!--end of select-->
   </td>
   
   <td>
    <select name="PACKING4" id="PACKING4" data-mini="true">
        <option value="">Choose</option>
     	<option value="Pcp" <?php if($data[packing4] == "Pcp"){echo "selected='selected'";}?> >Pcp</option>
        <option value="Family" <?php if($data[packing4] == "Family"){echo "selected='selected'";}?> >Family</option>
        <option value="Box" <?php if($data[packing4] == "Box"){echo "selected='selected'";}?> >Box</option>
    </select>
    <!--end of select-->
   </td>
    
    <td>
    <select name="PACKING5" id="PACKING5" data-mini="true">
        <option value="">Choose</option>
     	<option value="Pcp" <?php if($data[packing5] == "Pcp"){echo "selected='selected'";}?> >Pcp</option>
        <option value="Family" <?php if($data[packing5] == "Family"){echo "selected='selected'";}?> >Family</option>
        <option value="Box" <?php if($data[packing5] == "Box"){echo "selected='selected'";}?> >Box</option>
    </select>
   <!--end of select-->
   </td>
    	<td align="center">
    		<select name="PACKING6" id="PACKING6" data-mini="true">
        <option value="">Choose</option>
     	<option value="Pcp" <?php if($data[packing6] == "Pcp"){echo "selected='selected'";}?> >Pcp</option>
        <option value="Family" <?php if($data[packing6] == "Family"){echo "selected='selected'";}?> >Family</option>
        <option value="Box" <?php if($data[packing6] == "Box"){echo "selected='selected'";}?> >Box</option>
    </select>
    <!--end of select--></td>
    
    </tr>
    
    
    
    	<tr><td><b>Biscuit Type</b></td>
        
        <td>
        <select name="BISCUITTYPE1" id="BISCUITTYPE1" data-mini="true">
        <option value="">Choose</option>
        <option value="Harddough" <?php if($data[biscuit_type1] == "Harddough"){echo "selected='selected'";}?> >Harddough</option>
        <option value="Cookies" <?php if($data[biscuit_type1] == "Cookies"){echo "selected='selected'";}?> >Cookies</option>
        <option value="Wirecut" <?php if($data[biscuit_type1] == "Wirecut"){echo "selected='selected'";}?>>Wirecut</option>
        <option value="Crackers" <?php if($data[biscuit_type1] == "Crackers"){echo "selected='selected'";}?> >Crackers</option>
        <option value="Waferstick" <?php if($data[biscuit_type1] == "Waferstick"){echo "selected='selected'";}?> >Waferstick</option>
        <option value="Wafer" <?php if($data[biscuit_type1] == "Wafer"){echo "selected='selected'";}?> >Wafer</option>
    </select></td>
    
    <td> <select name="BISCUITTYPE2" id="BISCUITTYPE2" data-mini="true">
        <option value="">Choose</option>
        <option value="Harddough" <?php if($data[biscuit_type2] == "Harddough"){echo "selected='selected'";}?> >Harddough</option>
        <option value="Cookies" <?php if($data[biscuit_type2] == "Cookies"){echo "selected='selected'";}?> >Cookies</option>
        <option value="Wirecut" <?php if($data[biscuit_type2] == "Wirecut"){echo "selected='selected'";}?>>Wirecut</option>
        <option value="Crackers" <?php if($data[biscuit_type2] == "Crackers"){echo "selected='selected'";}?> >Crackers</option>
        <option value="Waferstick" <?php if($data[biscuit_type2] == "Waferstick"){echo "selected='selected'";}?> >Waferstick</option>
        <option value="Wafer" <?php if($data[biscuit_type2] == "Wafer"){echo "selected='selected'";}?> >Wafer</option>
    </select></td>
    
    <td> <select name="BISCUITTYPE3" id="BISCUITTYPE3" data-mini="true">
        <option value="">Choose</option>
        <option value="Harddough" <?php if($data[biscuit_type3] == "Harddough"){echo "selected='selected'";}?> >Harddough</option>
        <option value="Cookies" <?php if($data[biscuit_type3] == "Cookies"){echo "selected='selected'";}?> >Cookies</option>
        <option value="Wirecut" <?php if($data[biscuit_type3] == "Wirecut"){echo "selected='selected'";}?>>Wirecut</option>
        <option value="Crackers" <?php if($data[biscuit_type3] == "Crackers"){echo "selected='selected'";}?> >Crackers</option>
        <option value="Waferstick" <?php if($data[biscuit_type3] == "Waferstick"){echo "selected='selected'";}?> >Waferstick</option>
        <option value="Wafer" <?php if($data[biscuit_type3] == "Wafer"){echo "selected='selected'";}?> >Wafer</option>
    </select></td>
    
    <td> <select name="BISCUITTYPE4" id="BISCUITTYPE4" data-mini="true">
        <option value="">Choose</option>
        <option value="Harddough" <?php if($data[biscuit_type4] == "Harddough"){echo "selected='selected'";}?> >Harddough</option>
        <option value="Cookies" <?php if($data[biscuit_type4] == "Cookies"){echo "selected='selected'";}?> >Cookies</option>
        <option value="Wirecut" <?php if($data[biscuit_type4] == "Wirecut"){echo "selected='selected'";}?>>Wirecut</option>
        <option value="Crackers" <?php if($data[biscuit_type4] == "Crackers"){echo "selected='selected'";}?> >Crackers</option>
        <option value="Waferstick" <?php if($data[biscuit_type4] == "Waferstick"){echo "selected='selected'";}?> >Waferstick</option>
        <option value="Wafer" <?php if($data[biscuit_type4] == "Wafer"){echo "selected='selected'";}?> >Wafer</option>
    </select></td>
    
    <td> <select name="BISCUITTYPE5" id="BISCUITTYPE5" data-mini="true">
        <option value="">Choose</option>
        <option value="Harddough" <?php if($data[biscuit_type5] == "Harddough"){echo "selected='selected'";}?> >Harddough</option>
        <option value="Cookies" <?php if($data[biscuit_type5] == "Cookies"){echo "selected='selected'";}?> >Cookies</option>
        <option value="Wirecut" <?php if($data[biscuit_type5] == "Wirecut"){echo "selected='selected'";}?>>Wirecut</option>
        <option value="Crackers" <?php if($data[biscuit_type5] == "Crackers"){echo "selected='selected'";}?> >Crackers</option>
        <option value="Waferstick" <?php if($data[biscuit_type5] == "Waferstick"){echo "selected='selected'";}?> >Waferstick</option>
        <option value="Wafer" <?php if($data[biscuit_type5] == "Wafer"){echo "selected='selected'";}?> >Wafer</option>
    </select></td>
    
    <td> <select name="BISCUITTYPE6" id="BISCUITTYPE6" data-mini="true">
        <option value="">Choose</option>
        <option value="Harddough" <?php if($data[biscuit_type6] == "Harddough"){echo "selected='selected'";}?> >Harddough</option>
        <option value="Cookies" <?php if($data[biscuit_type6] == "Cookies"){echo "selected='selected'";}?> >Cookies</option>
        <option value="Wirecut" <?php if($data[biscuit_type6] == "Wirecut"){echo "selected='selected'";}?>>Wirecut</option>
        <option value="Crackers" <?php if($data[biscuit_type6] == "Crackers"){echo "selected='selected'";}?> >Crackers</option>
        <option value="Waferstick" <?php if($data[biscuit_type6] == "Waferstick"){echo "selected='selected'";}?> >Waferstick</option>
        <option value="Wafer" <?php if($data[biscuit_type6] == "Wafer"){echo "selected='selected'";}?> >Wafer</option>
    </select></td>
    </tr>
    </tbody>   
   <tfoot><tr><td colspan="7">&nbsp;</td></tr></tfoot>
   </table>


          
            
            <br />
            
            <b>Discussion</b>
<select name="DISCUSSION" id="DISCUSSION" data-mini="true">
	<option value="" >Choose</option>
        <option value="DISCUSSION" <?php if($data[discussion]=="DISCUSSION"){echo "selected='selected'";} ?> >Discussion</option>
        <option value="NODISCUSSION" <?php if($data[discussion]=="NODISCUSSION"){echo "selected='selected'";} ?> >No Discussion</option>
    </select>
            <br />

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
     <option value="Artificial Colour" <?php if($data[color]=="Artificial Colour"){echo "selected='selected'";} ?> >Artificial</option>
        <option value="Ni Colour" <?php if($data[color]=="Ni Colour"){echo "selected='selected'";} ?> >NI</option>
        <option value="Natural Colour" <?php if($data[color]=="Natural Colour"){echo "selected='selected'";} ?> >NATURAL</option>
    </select>

    <!--end of select-->
        </td>
        
    <td colspan="3">
    <select name="FLAVOUR" id="FLAVOUR" data-mini="true">
        <option value="">Choose</option>
        <option value="Artificial Flavour" <?php if($data[flavour]=="Artificial Flavour"){echo "selected='selected'";} ?> >Artificial</option>
        <option value="Ni Flavour" <?php if($data[flavour]=="Ni Flavour"){echo "selected='selected'";} ?>  >NI</option>
        <option value="Natural Flavour" <?php if($data[flavour]=="Natural Flavour"){echo "selected='selected'";} ?>  >NATURAL</option>    </select>

   <!--end of select--></td>
 


    </tr>
    	
    </tbody>   
   <tfoot><tr><td colspan="6">&nbsp;</td></tr></tfoot>
   </table>

<b>Label content</b>
<table data-role="table" id="my-table"  class="ui-responsive table-stroke" border="0.5">
   	<thead><tr><th colspan="3">&nbsp;</th></tr></thead>
    <tbody>
    <tr>
    <td>
 <input name="VEGAN" id="VEGAN" value="Ya" type="checkbox" <?php if($data[labelcontent_vegan]=='Ya') echo "checked='checked'"; ?> ><label for="VEGAN">Vegan</label>
 	</td>
    <td>
<input name="HALAL" id="HALAL" value="Ya" type="checkbox" <?php if($data[labelcontent_halal]=='Ya') echo "checked='checked'"; ?> ><label for="HALAL">Halal</label>
	</td>
    <td>
<input name="ALLERGEN" id="ALLERGEN" value="Ya" type="checkbox" <?php if($data[labelcontent_allergen]=='Ya') echo "checked='checked'"; ?> ><label for="ALLERGEN">Allergen</label>
	</td>
	</tr>
</tbody>
<tfoot><tr><td colspan="3">&nbsp;</td></tr></tfoot>
</table>


<b>Others</b>
	<textarea name="OTHERS"><?php echo $data[others]; ?></textarea>


       
    

    

    <!--div class="ui-field-contain">



     <select name="SERIUS" id="select-native-2" data-mini="true">

        <option value="Serious Buyer">Serious Buyer</option>

        <option value="Not Serious Buyer">Not Serious Buyer</option>

     </select>

    </div--><!--end of select-->

    

       <fieldset data-role="controlgroup">

        <legend><b>Inquiry Category</b></legend>

        <input name="PRICE_LIST" id="PRICE_LIST" value="Ya" type="checkbox" <?php if($data[price_list]=='Ya') echo "checked='checked'"; ?> ><label for="PRICE_LIST">Price List</label>

          <input type="text" name="PRICE_LIST_KET" placeholder="Keterangan Tambahan Price List" value="<?php echo $data[price_list_ket]; ?>" />

        <input name="FACTORY_VISIT" id="FACTORY_VISIT" value="Ya" type="checkbox" <?php if($data[factory_visit]=='Ya') echo "checked='checked'"; ?> ><label for="FACTORY_VISIT">Factory Visit</label>

          <input type="text" name="FACTORY_VISIT_KET" placeholder="Keterangan Tambahan Factory Visit" value="<?php echo $data[factory_visit_ket]; ?>"  />

        <input name="PRIVATE_LABEL" id="PRIVATE_LABEL" value="Ya" type="checkbox" <?php if($data[private_label]=='Ya') echo "checked='checked'"; ?> ><label for="PRIVATE_LABEL" >Private Label</label>

          <input type="text" name="PRIVATE_LABEL_KET" placeholder="Keterangan Tambahan Private Label" value="<?php echo $data[private_label_ket]; ?>" />

        <input name="BEST_PRICE" id="BEST_PRICE" value="Ya" type="checkbox" <?php if($data[best_price]=='Ya') echo "checked='checked'"; ?>><label for="BEST_PRICE">Best Price</label>

          <input type="text" name="BEST_PRICE_KET" placeholder="Keterangan Tambahan Best Price" value="<?php echo $data[best_price_ket]; ?>" />

        <input name="SAMPLE" id="SAMPLE" value="Ya" type="checkbox" <?php if($data[sample]=='Ya') echo "checked='checked'"; ?>><label for="SAMPLE">Sample</label>

          <input type="text" name="SAMPLE_KET" placeholder="Keterangan Tambahan Sample" value="<?php echo $data[sample_ket]; ?>"/>

    </fieldset>


<b>Revisit booth on</b>
<!--input type="text" data-role="date" name="REVISITBOOTH" id="tanggal"-->
<label for="REVISITBOOTH_ON">Date</label>
            <input name="REVISITBOOTH_ON" id="REVISITBOOTH_ON" type="text" value="<?php if($data[revisit_booth_on]=="0000-00-00"){echo "";}else { echo $data[revisit_booth_on];} ?>" data-role="datebox" data-options='{"mode":"flipbox"}' />

<input type="button" value="Reset Revisit Booth" id="Reset" onclick="Reset_oke()" />

<script>
    function Reset_oke(){
	
		   document.getElementById("REVISITBOOTH_ON").value = '';
		
		}

</script>  

            


    
 <fieldset data-role="controlgroup">
   
        <input name="DISCUSSION" id="DISCUSSION" value="DISCUSSION" <?php if($data[discussion]=="DISCUSSION"){echo "checked='checked'";} ?>   type="radio">



        <label for="DISCUSSION">Discussion</label>



        <input name="DISCUSSION" id="NODISCUSSION" value="NODISCUSSION" <?php if($data[discussion]=="NODISCUSSION"){echo "checked='checked'";} ?> type="radio">



        <label for="NODISCUSSION">No Discussion</label>

 
 </fieldset>
 
 
    

            <br />
            
            
            <br />
            <b>Seriuos Rating</b>
            <div id="ratingx"></div><br>
        <input type="hidden" id="SERIUS" name="SERIUS" readonly="readonly" />


            
            
            
<!--fieldset data-role="controlgroup">

        <input name="SERIUS" id="SERIUS" value="Serious Buyer" checked="checked" type="radio" <?php if($data[status]=='Serious Buyer') echo "checked='checked'"; ?> >

        <label for="SERIUS">S</label>

        <input name="SERIUS" id="NOT_SERIUS" value="Not Serious Buyer" type="radio" <?php if($data[status]=='Not Serious Buyer') echo "checked='checked'"; ?> >

        <label for="NOT_SERIUS">NS</label>

       </fieldset-->






<!--data-role="table" id="my-table" data-mode="reflow" class="ui-responsive table-stroke" border="0.5"-->


<table border="0" width="100%">

	<tr><td>
    <b>Name Card Image</b>
	</td></tr>
    
    <tr>


    <td align="center">
    <!--input type="file"  name="fcardname" id="CARD_NAME"/-->
    <img src="<?php echo $data[direktori_card]; ?>" class="xxx" />
	</td></tr>
    
    <tr><td>
    <b>Buyer Image</b>
	</td></tr>
    <tr>
    <td align="center">
    <!--input type="file"  name="fbuyer" id="IMG_BUYER" /-->
    <img src="<?php echo $data[direktori_buyer]; ?>" class="xxx" />
    </td></tr>
    
    <tr><td>
    <b>Sample 1 Image</b>
	</td></tr>
    <tr>
    <td align="center">
    <!--input type="file"  name="fsample1" id="IMG_SAMPLE1" /-->
     <img src="<?php echo $data[direktori_sample_1]; ?>" class="xxx" />
    </td></tr>
    
    <tr><td>
    <b>Sample 2 Image</b>
	</td></tr>
    
    <tr><td align="center">
    <!--input type="file"  name="fsample2" id="IMG_SAMPLE2" /-->
    <img src="<?php echo $data[direktori_sample_2]; ?>" class="xxx" />
    </td></tr>
    
    <tr><td>
    <b>Sample 3 Image</b>
	</td></tr>
    
    <tr><td align="center">
    <!--input type="file" name="fsample3" id="IMG_SAMPLE3" /-->
    <img src="<?php echo $data[direktori_sample_3]; ?>" class="xxx" />
	</td></tr>
    
    </table>
    <!--input type="submit" value="SAVE" name="SAVE" style="background-color:#96F"/-->
	<input type="hidden" value="<?php echo $data[tgl];?>" name="TGL">
	<input type="submit" value="EDIT" name="EDIT" style="background-color:#96F"/>
  
   

   </form>

    <!--accept="image/*;capture=camera"-->

      

    <br><br>  

	
	<a href="exebition.php" style="text-decoration:none;" onclick="metu()"><input type="button" value="Back" name="BACK" style="background-color:#F00;color:#FFF;" /></a>
   <!--a href="logout.php" style="text-decoration:none;" onclick="metu()"><input type="button" value="Sign Out" style="background-color:#F00;color:#FFF;"  /></a-->   

   

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



if(isset($_POST[EDIT]))

{

include "koneksi.php";
{

	

	//print_r($_POST);


	    date_default_timezone_set("Asia/Dubai");



		       // $tgl = date(Y)."-".date(m)."-".date(d);

				$tgl = $_POST[TGL];

//echo $tgl;


			    $wkt = date('H:i:s'); 


	$id_update = $_POST[ID];
	$benua   = $_POST[BENUA];

    $negara  = $_POST[NEGARA];

	$company = $_POST[COMPANY];
	
	$gender  = $_POST[GENDER];

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
	
	$discussion =	$_POST[DISCUSSION];
	
	$colour = $_POST[COLOUR];
	$flavour = $_POST[FLAVOUR];
	$vegan = $_POST[VEGAN];
	$halal = $_POST[HALAL];
	$allergen = $_POST[ALLERGEN];
	$others = $_POST[OTHERS];
	

 
	 
		$sql_input = "UPDATE buyer SET  
											
	                                     

	                                       company = '$company',
										   
										   gender = '$gender',

	                                       buyer   = '$buyer',						

										

										   price_list        = '$price_list',

										   factory_visit     = '$factory_visit',
										   
										   email   = '$email',

										   private_label     = '$private_label',

										   best_price        = '$best_price',

										   sample            = '$sample',

										   price_list_ket    = '$price_list_ket',

										   factory_visit_ket = '$factory_visit_ket',

										   private_label_ket = '$private_label_ket',

										   best_price_ket    = '$best_price_ket',

										   sample_ket        = '$sample_ket',
										   
										   trader='$trader', 
own = '$owndistribution', 
middleman= '$middleman', 
have_ownbrand= '$haveownbrand', 
have_ownbrand_ket = '$haveownbrandket', 
import_othercountry = '$importothercountry', 
import_othercountry_ket = '$importothercountryket', 
indonesia_biscuit  = '$indonesiabiscuit', 
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
others = '$others'
								 WHERE ID = '$id_update';		   
										  
										   
										   ";								   

										   

      $hasil_input = mysqli_query($mysqli, $sql_input);

	if($discussion == "DISCUSSION")
	{

	    $to  = $email;
		
		$pieces = explode(",", $to);
		
		$jumlah = count($pieces);
		



	  $subjek = "Thanks to Revisit Our Booth for Further Discussion";



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

Thanks for visiting us at Gulfood exhibition, Dubai on $tgl <br><br>







We are one of the leading biscuit and wafer manufacturer in Indonesia located in Surabaya.<br>



We had complied ISO 22000, FSSC, BRC version 6, Woolworths Quality Assurance and Halal Certificate.<br>



We have been exporting our products globally such as South East Asia, China, Middle East, Europe,<br> Australia and Africa..<br>

<br>



 <br>

 

 <div style='font-size:13px;'><b>







Please find below summary of our discussion<br><br>";





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


         <a href='http://www.kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> |  <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C;



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









    $headers  = "MIME-Version: 1.0" . "\r\n";



	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



	$headers .= 'From: Kokola Group <export@kokola.co.id>' . "\r\n";



   for($i=0;$i<$jumlah;$i++){
	   
        $maile = mail($pieces[$i],  $subjek,  $message, $headers); 
   
   }//edn for


	

	  

	}//end of if discussion

	else if($discussion == "NODISCUSSION")

	{

		

		  $to  = $email;
		  
		  $pieces = explode(",", $to);
		  
		  $jumlah = count($pieces);
		  



	  $subjek = "Thanks to Revisit Our Booth for Further Discussion";



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

Thanks for visiting us at Gulfood exhibition, Dubai on $tgl <br><br>







We are one of the leading biscuit and wafer manufacturer in Indonesia located in Surabaya.<br>



We had complied ISO 22000, FSSC, BRC version 6, Woolworths Quality Assurance and Halal Certificate.<br>



We have been exporting our products globally such as South East Asia, China, Middle East, Europe,<br> Australia and Africa..<br>

<br>

      

      <br>

 
    Should you have any inquiry, please do not hesitate to contact us. <br><br>

      

      

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



         <a href='http://www.kokola.co.id/katalog.pdf'><button style='background-color:#06C;color:#FFF;' value='Catalog Download' >Catalog Download</button></a> |  <a href='https://www.youtube.com/watch?v=OPRAy81S96Q'><button style='background-color:#06C;



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









    $headers  = "MIME-Version: 1.0" . "\r\n";



	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



	$headers .= 'From: Kokola Group <export@kokola.co.id>' . "\r\n";


    for($i=0;$i<$jumlah;$i++){
	
	     $maile = mail($pieces[$i],  $subjek,  $message, $headers); 
		
	}//end for	

	

	}//end of if no discussion

	  

	  

	  if($hasil_input)

	  {

		 echo "<script>alert('Update data Berhasil');

		              window.location='exebition.php'; 

		      </script>";  

	  }

	  else

	  {

		echo "<script>alert('Update belum barhasil');

		                window.location='exebition.php'; 

		      </script>";    

	  }

	
}

}
}

else
 {
	  	echo "<script>

		               window.location='index.php';         

		      </script>";  
			   
}
?>

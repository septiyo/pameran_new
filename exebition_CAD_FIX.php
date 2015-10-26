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
        <link type="text/css" href="jquery-ui.css" rel="stylesheet">
        <link type="text/css" href="jq-rating/labs.css" rel="stylesheet" />
        <link type="text/css" href="jq-rating/jquery.raty.css" rel="stylesheet" />
        <link rel="stylesheet" href="validation/validation.css" type="text/css" />
        <style>.functions .demo{margin-bottom:10px}.functions .item{background-color:#fefefe;border-radius:4px;display:inline-block;margin-bottom:5px;padding:5px 10px}.functions .item a{border:1px solid #CCC;margin-left:10px;padding:5px;text-decoration:none}.functions .item input{display:inline-block;margin-left:2px;padding:5px 6px;width:120px}.functions .item label{display:inline-block;font-size:1.1em;font-weight:bold}.hint{text-align:center;width:160px}div.hint{font-size:1.4em;height:46px;margin-top:15px;padding:7px}*{font:11px Calibri,Arial!important}#progressbar .ui-progressbar-value{background-color:#ccc}</style>
    </head>
    <body>
    <div data-role="page" data-theme="a">
        <div data-role="header" data-position="inline">
            <h1>Exhibition Apps 1.0.4</h1>
        </div>
        <div data-role="content" data-theme="a" class="ui-content">
            <div id="section1" </div>
        <form method="post" action="proses_save.php" id="FORM" data-ajax="false">
            <table border="0">
                <tr>
                    <td>
                        <b>Country</b>
                        <input type="text" name="NEGARA" placeholder="Country" id="tags" />
                        <input type="hidden" name="BENUA" id="tags2" />
                    </td>
                    <td>
                        <b>Company Name</b>
                        <input type="text" name="COMPANY" placeholder="Company Name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <label>
                                <input type="radio" name="GENDER" id="GENDER" value="Mr">Mr</label>
                            <label>
                                <input type="radio" name="GENDER" id="GENDER" value="Mrs">Mrs</label>
                        </fieldset>
                    </td>
                    <td>
                        <b>Buyer Name</b>
                        <input type="text" name="BUYER" placeholder="Buyer Name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Email</b>
                        <input type="text" name="EMAIL" placeholder="Email" />
                        <br>
                    </td>
                    <td>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <label for="TRADER">
                                <input name="TRADER" id="TRADER" value="Ya" type="checkbox">Trader</label>
                            <label for="OWNDISTRIBUTION">
                                <input name="OWNDISTRIBUTION" id="OWNDISTRIBUTION" value="Ya" type="checkbox">Own Distribution</label>
                            <label for="MIDDLEMAN">
                                <input name="MIDDLEMAN" id="MIDDLEMAN" value="Ya" type="checkbox">MiddleMan</label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <input name="DISCUSSION" id="DISCUSSION" value="DISCUSSION" checked="checked" type="radio">
                            <label for="DISCUSSION">Discussion</label>
                            <input name="DISCUSSION" id="NODISCUSSION" value="NODISCUSSION" type="radio">
                            <label for="NODISCUSSION">No</label>
                        </fieldset>
                    </td>
                    <td>
                        <b>Seriuos Rating</b>
                        <div id="ratingx"></div>
                        <br>
                        <input type="hidden" id="SERIUS" name="SERIUS" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <legend><b>Biscuit Experience</b></legend>
                            <label for="IMPORTOTHERCOUNTRY">
                                <input name="IMPORTOTHERCOUNTRY" id="IMPORTOTHERCOUNTRY" value="Ya" type="checkbox">Import other country</label>
                            <label for="INDONESIABISCUIT">
                                <input name="INDONESIABISCUIT" id="INDONESIABISCUIT" value="Ya" type="checkbox">Indonesia biscuit</label>
                            <label for="NEVER">
                                <input name="NEVER" id="NEVER" value="Ya" type="checkbox">Never </label>
                        </fieldset>
                    </td>
                    <td>
                        <b>Product Inquiry</b>
                        <br>
                        <b>Packing</b>
                        <br>
                        <button type="button" class="ui-button" value="Portion_Control_Pack " style="width:135px; height:24px;" id="txt1" name="PACKING" onclick="moveNumbers1(this.value)">Portion Control Pack</button>&nbsp;&nbsp;

                        <button type="button" class="ui-button" value="Family " style="width:60px; height:24px;" id="txt2" name="PACKING" onclick="moveNumbers1(this.value)">Family</button>
                        &nbsp;&nbsp;
                        <button type="button" class="ui-button" value="Box " style="width:60px; height:24px;" id="txt3" name="PACKING" onclick="moveNumbers1(this.value)">Box</button>
                        <!--input type="button" value="Portion_Control_Pack " id="txt1" name="PACKING" onClick="moveNumbers1(this.value)">
                        <input type="button" value="Family " id="txt2" name="PACKING" onClick="moveNumbers1(this.value)">
                        <input type="button" value="Box " id="txt3" name="PACKING" id="txt3" onClick="moveNumbers1(this.value)"-->
                        <input type="button" value="clear " id="clear" name="text 1" onClick="">
                        <br>
                        <input type="text" id="result" name="RESULT" placeholder='Result' size="25" readonly>
                        <b>Biscuit Type</b>
                        <br>
                        <div id="section2"></div>
                        <!--input type="button" value="Hardough " id="type1" name="TYPE" onClick="moveNumbers2(this.value)"> &nbsp;
                        <input type="button" value="Cookies " id="type2" name="TYPE" onClick="moveNumbers2(this.value)"> &nbsp;
                        <input type="button" value="Wirecut " id="type3" name="TYPE" onClick="moveNumbers2(this.value)"> &nbsp;
                        <input type="button" value="Crackers " id="type4" name="TYPE" onClick="moveNumbers2(this.value)"> &nbsp;
                        <input type="button" value="Waferstick " id="type5" name="TYPE" onClick="moveNumbers2(this.value)"> &nbsp;
                        <input type="button" value="Wafer " id="type6" name="TYPE" onClick="moveNumbers2(this.value)"-->
                        <button type="button" class="ui-button" value="Hardough " style="width:60px; height:24px;" id="type1" name="TYPE" onclick="moveNumbers2(this.value)">Hardough</button>
                        &nbsp;&nbsp;
                        <button type="button" class="ui-button" value="Cookies " style="width:60px; height:24px;" id="type2" name="TYPE" onclick="moveNumbers2(this.value)">Cookies</button>
                        &nbsp;&nbsp;
                        <button type="button" class="ui-button" value="Wirecut " style="width:60px; height:24px;" id="type3" name="TYPE" onclick="moveNumbers2(this.value)">Wirecut</button>
                        &nbsp;&nbsp;
                        <button type="button" class="ui-button" value="Crackers " style="width:60px; height:24px;" id="type4" name="TYPE" onclick="moveNumbers2(this.value)">Crackers</button>
                        &nbsp;&nbsp;
                        <button type="button" class="ui-button" value="Waferstick " style="width:60px; height:24px;" id="type5" name="TYPE" onclick="moveNumbers2(this.value)">Waferstick</button>
                        &nbsp;&nbsp;
                        <button type="button" class="ui-button" value="Wafer " style="width:60px; height:24px;" id="type6" name="TYPE" onclick="moveNumbers2(this.value)">Wafer</button>
                        &nbsp;&nbsp;



                        <input type="button" value="clear " id="clear2" name="CLEAR 2" onClick="">
                        <br>
                        <input type="text" id="result2" name="RESULT2" placeholder='Result' size="25" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Others</b>
                        <textarea name="OTHERS"></textarea>
                    </td>
                    <td>
                        <legend><b>Inquiry Category</b></legend>
                        <fieldset data-role="controlgroup" data-type="horizontal">
                            <input name="FACTORY_VISIT" id="FACTORY_VISIT" value="Ya" type="checkbox">
                            <label for="FACTORY_VISIT">Factory Visit</label>
                            <input name="SAMPLE" id="SAMPLE" value="Ya" type="checkbox">
                            <label for="SAMPLE">Sample</label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Name Card Image</b>
                        <input type="file" name="fcardname" class="item_foto jfilestyle" id="FCARDNAME" onchange="upload_file('itemCheck',this)" />
                        <div id="progress"></div>
                        <input type="hidden" class="file_name" name="DIREKTORI" />
                    </td>
                    <td>
                        <b>Buyer Image</b>
                        <input type="file" name="fbuyer" id="FBUYER" onchange="upload_file2('itemCheck2',this)" />
                        <div id="progress_2"></div>
                        <input type="hidden" class="file_name2" name="DIREKTORI2" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="SAVE" id="SAVE" name="SAVE" style="background-color:#33f;color:#FFF;font:21px Calibri,Arial!important" />
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <br>
        <div data-role=content>
            <div class=content-primary>
                <ul data-role=listview data-split-icon=gear data-split-theme=e>
                    <?php

                    include "koneksi.php";

                    $sql = "SELECT * FROM buyer ORDER BY ID DESC";

                    $hasil_sql = mysqli_query($mysqli, $sql);

                    echo "<div style='overflow:auto;height:300px;text-align:justify;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif'>";
                    echo "<ul data-role='listview' data-inset='true' data-filter='true' >";
                    while($data = mysqli_fetch_assoc($hasil_sql))
                    {

                        echo "<li><a href='detail2.php?ID=$data[ID]' onclick='oke'>";
                        echo "<script language='javascript'>";

                        echo "function oke()";
                        echo  "{

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
            </div>
        </div>
        <br>
        <br>
        <a href="logout.php" style="text-decoration:none" onclick="metu()">
            <input type="button" value="Sign Out" style="background-color:#F00;color:#FFF;font:15px Calibri,Arial!important" />
        </a>
        <br>
        <br>
        <script>function metu(){location.assign("logout.php")}</script>
    </div>
    <div data-role="footer">
        <h4>Kokola Inc 2015.</h4>
    </div>
    </div>
    <script src="jquery-2.1.4.min.js"></script>
    <script src="jquery.mobile-1.4.5.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script src="animatescroll.js"></script>
    <script src="jq-rating/jquery.raty.js"></script>
    <script src="jq-rating/labs.js" type="text/javascript"></script>
    <!--script>$(document).ready(function(){$("#txt1").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#txt2").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#txt3").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#clear").click(function(){$("#result").val("");$("#txt1").prop("disabled",false);$("#txt2").prop("disabled",false);$("#txt3").prop("disabled",false)})});function moveNumbers1(c){var d=document.getElementById("result").value;d=d+c;document.getElementById("result").value=d}</script-->
    <script>
        $(document).ready(function() {
            $('#txt1').click(function() {
                $(this).prop("disabled", true);
            });
        });
        $(document).ready(function() {
            $('#txt2').click(function() {
                $(this).prop("disabled", true);
            });
        });

        $(document).ready(function() {
            $('#txt3').click(function() {
                $(this).prop("disabled", true);
            });
        });

        $(document).ready(function() {
            $('#clear').click(function() {
                $('#result').val('');
                $('#txt1').prop("disabled", false);
                $('#txt2').prop("disabled", false);
                $('#txt3').prop("disabled", false);
            });
        })

        function moveNumbers1(num) {
            var txt=document.getElementById("result").value;
            txt=txt + num;
            document.getElementById("result").value=txt;

        }
    </script>

    <!--untuk type biskuit-->
    <script>
        $(document).ready(function() {
            $('#type1').click(function() {
                $(this).prop("disabled", true);
            });
        });
        $(document).ready(function() {
            $('#type2').click(function() {
                $(this).prop("disabled", true);
            });
        });

        $(document).ready(function() {
            $('#type3').click(function() {
                $(this).prop("disabled", true);
            });
        });

        $(document).ready(function() {
            $('#type4').click(function() {
                $(this).prop("disabled", true);
            });
        });

        $(document).ready(function() {
            $('#type5').click(function() {
                $(this).prop("disabled", true);
            });
        });

        $(document).ready(function() {
            $('#type6').click(function() {
                $(this).prop("disabled", true);
            });
        });

        $(document).ready(function() {
            $('#clear2').click(function() {
                $('#result2').val('');
                $('#type1').prop("disabled", false);
                $('#type2').prop("disabled", false);
                $('#type3').prop("disabled", false);
                $('#type4').prop("disabled", false);
                $('#type5').prop("disabled", false);
                $('#type6').prop("disabled", false);
            });
        })

        function moveNumbers2(num) {
            var txt=document.getElementById("result2").value;
            txt=txt + num;
            document.getElementById("result2").value=txt;

        }





    </script>
    <script>$(document).ready(function(){$("#type1").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type2").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type3").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type4").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type5").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#type6").click(function(){$(this).prop("disabled",true)})});$(document).ready(function(){$("#clear2").click(function(){$("#result2").val("");$("#type1").prop("disabled",false);$("#type2").prop("disabled",false);$("#type3").prop("disabled",false);$("#type4").prop("disabled",false);$("#type5").prop("disabled",false);$("#type6").prop("disabled",false)})});function moveNumbers2(c){var d=document.getElementById("result2").value;d=d+c;document.getElementById("result2").value=d}</script>
    <script>$(function(){$("#tags").autocomplete({delay:0,source:"source.php",select:function(d,c){$("#tags2").val(c.item.con)}})});</script>
    <script type="text/javascript">jQuery.extend(jQuery.mobile,{ajaxEnabled:false});</script>
    <script>$(function(){AntiBOT.init(".new_comment");CommentResponder.init();$("#comment_body").taby()});</script>
    <script>$.fn.raty.defaults.path="images";$(function(){$("#ratingx").raty({half:false,targetScore:"#SERIUS",targetType:"score"});$("#score").raty({score:3});$("#score-callback").raty({score:function(){return $(this).attr("data-score")}});$("#scoreName").raty({scoreName:"entity[score]"});$("#number").raty({number:10});$("#number-callback").raty({number:function(){return $(this).attr("data-number")}});$("#numberMax").raty({numberMax:5,number:100});$("#readOnly").raty({readOnly:true,score:3});$("#readOnly-callback").raty({readOnly:function(){return"true becomes readOnly"=="true becomes readOnly"}});$("#noRatedMsg").raty({readOnly:true,noRatedMsg:"I'am readOnly and I haven't rated yet!"});$("#halfShow-true").raty({score:3.26});$("#halfShow-false").raty({halfShow:false,score:3.26});$("#round").raty({round:{down:0.26,full:0.6,up:0.76},score:3.26});$("#half").raty({half:true,hints:[["bad 1/2","bad"],["poor 1/2","poor"],["regular 1/2","regular"],["good 1/2","good"],["gorgeous 1/2","gorgeous"]]});$("#starHalf").raty({half:true,path:null,starHalf:"images/star-half-mono.png",starOff:"images/star-off.png",starOn:"images/star-on.png"});$("#click").raty({click:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)}});$("#click-prevent").raty({click:function(score,evt){alert("Score will not change.");return false}});$("#hints").raty({hints:["a",null,"",undefined,"*_*"]});$("#star-off-and-star-on").raty({path:"images",starOff:"off.png",starOn:"on.png"});$("#cancel").raty({cancel:true});$("#cancelHint").raty({cancel:true,cancelHint:"My cancel hint!"});$("#cancelPlace").raty({cancel:true,cancelPlace:"right"});$("#star-off-and-star-on").raty({path:"images",starOff:"off.png",starOn:"on.png"});$("#cancel-off-and-cancel-on").raty({cancel:true,cancelOff:"images/cancel-custom-off.png",cancelOn:"images/cancel-custom-on.png",path:null,starOff:"images/star-off.png",starOn:"images/star-on.png"});$("#iconRange").raty({path:null,starOff:"../lib/images/star-off.png",iconRange:[{range:1,on:"images/1.png",off:"images/0.png"},{range:2,on:"images/2.png",off:"images/0.png"},{range:3,on:"images/3.png",off:"images/0.png"},{range:4,on:"images/4.png",off:"images/0.png"},{range:5,on:"images/5.png",off:"images/0.png"}]});$("#size").raty({path:"images",cancel:true,cancelOff:"cancel-off.png",cancelOn:"cancel-on.png",half:true,starHalf:"star-half.png",starOff:"star-off.png",starOn:"star-on.png"});$("#target-div").raty({cancel:true,target:"#target-div-hint"});$("#target-text").raty({cancel:true,target:"#target-text-hint"});$("#target-textarea").raty({cancel:true,target:"#target-textarea-hint"});$("#target-select").raty({cancel:true,target:"#target-select-hint"});$("#targetType").raty({cancel:true,target:"#targetType-hint",targetType:"score"});$("#targetKeep").raty({cancel:true,target:"#targetKeep-hint",targetKeep:true});$("#targetText").raty({target:"#targetText-hint",targetText:"--"});$("#targetFormat").raty({target:"#targetFormat-hint",targetFormat:"Rating: {score}"});$("#targetScore").raty({targetScore:"#target-score"});$("#mouseover").raty({mouseover:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)}});$("#mouseout").raty({mouseout:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)}});$("#precision").raty({cancel:true,cancelOff:"cancel-off.png",cancelOn:"cancel-on.png",path:"images",starHalf:"star-half.png",starOff:"star-off.png",starOn:"star-on.png",target:"#precision-hint",targetKeep:true,precision:true});$("#space").raty({space:false});$("#single").raty({single:true});$("#starType").raty({cancel:true,half:true,starType:"i"});$("#functions").raty({cancel:true,cancelOff:"cancel-off.png",cancelOn:"cancel-on.png",path:"images",precision:true,starHalf:"star-half.png",starOff:"star-off.png",starOn:"star-on.png",target:"#functions-hint",targetKeep:true,click:function(score,evt){alert("ID: "+this.id+"\nscore: "+score+"\nevent: "+evt.type)},hints:[["bad 1","bad 2","bad 3","bad 4","bad 5","bad 6","bad 7","bad 8","bad 9","bad"],["poor 1","poor 2","poor 3","poor 4","poor 5","poor 6","poor 7","poor 8","poor 9","poor"],["regular 1","regular 2","regular 3","regular 4","regular 5","regular 6","regular 7","regular 8","regular 9","regular"],["good 1","good 2","good 3","good 4","good 5","good 6","good 7","good 8","good 9","good"],["gorgeous 1","gorgeous 2","gorgeous 3","gorgeous 4","gorgeous 5","gorgeous 6","gorgeous 7","gorgeous 8","gorgeous 9","gorgeous"]]});$("#score-function-run").on("click",function(){$("#functions").raty("score",$("#"+this.id.replace("-run","")).val())});$("#click-function-run").on("click",function(){$("#functions").raty("click",$("#"+this.id.replace("-run","")).val())});$("#readOnly-function-run").on("click",function(){var isReadOnly=$("#"+this.id.replace("-run","")).val()==="true";$("#functions").raty("readOnly",isReadOnly)});$("#cancel-function-run").on("click",function(){var isTrigger=$("#"+this.id.replace("-run","")).val()==="true";$("#functions").raty("cancel",isTrigger)});$("#reload-function-run").on("click",function(){$("#functions").raty("reload")});$("#get-score-function-run").on("click",function(){alert("score: "+$("#functions").raty("score"))});$("#set-score-function-run").on("click",function(){$("#functions").raty("score",$("#"+this.id.replace("-run","")).val())});$("#set-function-run").on("click",function(){var options=$("#"+this.id.replace("-run","").val()),command="$('#functions').raty('set', "+options+");";eval(command)});$("#destroy-function-run").on("click",function(){$("#functions").raty("destroy")});$("#move-function-run").on("click",function(){$("#functions").raty("move",$("#"+this.id.replace("-run","")).val())})});</script>
    <script src="validation/jquery.validate.js"></script>
    <script>jQuery.validator.addMethod("lettersonly",function(c,d){return this.optional(d)||/^[a-zA-Z\s]+$/i.test(c)},"Harus huruf alphabet");$(function(){$("#FORM").validate({rules:{NEGARA:{required:true},COMPANY:{required:true},BUYER:{required:true},EMAIL:{required:true},fcardname:{required:true},fbuyer:{required:true}},messages:{NEGARA:{required:"Negara belum terisi"},COMPANY:{required:"Company belum terisi"},BUYER:{required:"Buyer belum terisi"},EMAIL:{required:"Email  belum terisi"},fcardname:{required:"Foto CardName Belum ada"},fbuyer:{required:"Foto Buyer Belum ada"}}})});</script>
    <script>var size_file1=0;var size_file2=0;
        $(document).ready(function(){
            upload_file=function(a,i){if($(i).val()==""){
                //$(".file_name").val() = "";

                alert("File foto harus ada");
                return false;}


                $("progress").attr({value:0,max:0});
                if($("#"+a).find(".file_name").val()!=""){
                    $.post("proses_delete.php",{FILE_DELETE:$("#"+a).find(".file_name").val(),FOLDER:"cardname"})}var h="proses_upload2.php";var j=$(i).prop("files")[0];var b=new FormData();b.append("uploaded_file",j);$.ajax({url:h,dataType:"text",type:"post",cache:false,contentType:false,processData:false,data:b,xhr:function(){var e=$.ajaxSettings.xhr();if(e.upload){e.upload.addEventListener("progress",d,false)}return e},cache:false,beforeSend:function(e,f,g){},success:function(e,f,l){var g=e.split(":");if($.trim(g[0])=="SUCCESS"){$(".file_name").val($.trim(g[1]))}else{alert("Upload File Gagal!")}},error:function(g,e,f){}})};function d(a){if(a.lengthComputable){$("#progress").progressbar({value:a.loaded,max:a.total,complete:function(f,b){}})}}
            upload_file2=function(a,i){
                if($(i).val()==""){
                    alert("File foto harus ada");
                    return false;
                }
                // $(".file_name2").val() = "";
                $("progress").attr({value:0,max:0});if($("#"+a).find(".file_name2").val()!=""){$.post("proses_delete.php",{FILE_DELETE:$("#"+a).find(".file_name2").val(),FOLDER:"buyer"})}var h="proses_upload2.php";var j=$(i).prop("files")[0];var b=new FormData();b.append("uploaded_file2",j);$.ajax({url:h,dataType:"text",type:"post",cache:false,contentType:false,processData:false,data:b,xhr:function(){var e=$.ajaxSettings.xhr();if(e.upload){e.upload.addEventListener("progress",c,false)}return e},cache:false,beforeSend:function(e,f,g){},success:function(e,f,l){var g=e.split(":");if($.trim(g[0])=="SUCCESS"){$(".file_name2").val($.trim(g[1]))}else{alert("Upload File Gagal!")}},error:function(g,e,f){},complete:function(){}})};function c(a){if(a.lengthComputable){$("#progress_2").progressbar({value:a.loaded,max:a.total,complete:function(f,b){}})}}});

        $("#FCARDNAME").change(function(){
            var foto1=this.files[0];
            size_file1=foto1.size;
            // alert(size_file1);
        });


        $("#FBUYER").change(function(){
            var foto2=this.files[0];
            size_file2=foto2.size;
            // alert(size_file2);
        });



        $("#SAVE").click(function(){

            if($(".file_name").val() == ""){
                alert("Maaf Foto Cardname belum selesai diupload, harap tunggu..!");
                return false;

            }
            else if($(".file_name2").val() == ""){
                alert("Maaf Foto Buyer belum selesai diupload, harap tunggu..!");
                return false;

            }



        });
    </script>
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
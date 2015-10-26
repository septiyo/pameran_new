<?php
session_start();
include "koneksi.php";
if($_SESSION['HAK'] = "admin"){



    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Portfolio template</title>

        <!-- Bootstrap -->
        <!--link rel="stylesheet" href="boot/css/bootstrap.css"-->
        <link rel="stylesheet" href="DT/bootstrap.min.css">
        <link rel="stylesheet" href="DT/dataTables.bootstrap.css">
        <link rel="stylesheet" href="DT/responsive.bootstrap.css">




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <style>
        .navbar-custom {
            background-color: #2295cf;
            border-color: #1d81b3;
            background-image: -webkit-gradient(linear, left 0%, left 100%, from(#44ace0), to(#2295cf));
            background-image: -webkit-linear-gradient(top, #44ace0, 0%, #2295cf, 100%);
            background-image: -moz-linear-gradient(top, #44ace0 0%, #2295cf 100%);
            background-image: linear-gradient(to bottom, #44ace0 0%, #2295cf 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff44ace0', endColorstr='#ff2295cf', GradientType=0);
        }
        .navbar-custom .navbar-brand {
            color: #ffffff;
        }
        .navbar-custom .navbar-brand:hover,
        .navbar-custom .navbar-brand:focus {
            color: #e6e6e6;
            background-color: transparent;
        }
        .navbar-custom .navbar-text {
            color: #ffffff;
        }
        .navbar-custom .navbar-nav > li:last-child > a {
            border-right: 1px solid #1d81b3;
        }
        .navbar-custom .navbar-nav > li > a {
            color: #ffffff;
            border-left: 1px solid #1d81b3;
        }
        .navbar-custom .navbar-nav > li > a:hover,
        .navbar-custom .navbar-nav > li > a:focus {
            color: #c0c0c0;
            background-color: transparent;
        }
        .navbar-custom .navbar-nav > .active > a,
        .navbar-custom .navbar-nav > .active > a:hover,
        .navbar-custom .navbar-nav > .active > a:focus {
            color: #c0c0c0;
            background-color: #1d81b3;
            background-image: -webkit-gradient(linear, left 0%, left 100%, from(#1d81b3), to(#279fdc));
            background-image: -webkit-linear-gradient(top, #1d81b3, 0%, #279fdc, 100%);
            background-image: -moz-linear-gradient(top, #1d81b3 0%, #279fdc 100%);
            background-image: linear-gradient(to bottom, #1d81b3 0%, #279fdc 100%);
            background-repeat: repeat-x;
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff1d81b3', endColorstr='#ff279fdc', GradientType=0);
        }
        .navbar-custom .navbar-nav > .disabled > a,
        .navbar-custom .navbar-nav > .disabled > a:hover,
        .navbar-custom .navbar-nav > .disabled > a:focus {
            color: #cccccc;
            background-color: transparent;
        }
        .navbar-custom .navbar-toggle {
            border-color: #dddddd;
        }
        .navbar-custom .navbar-toggle:hover,
        .navbar-custom .navbar-toggle:focus {
            background-color: #dddddd;
        }
        .navbar-custom .navbar-toggle .icon-bar {
            background-color: #cccccc;
        }
        .navbar-custom .navbar-collapse,
        .navbar-custom .navbar-form {
            border-color: #1d7fb0;
        }
        .navbar-custom .navbar-nav > .dropdown > a:hover .caret,
        .navbar-custom .navbar-nav > .dropdown > a:focus .caret {
            border-top-color: #c0c0c0;
            border-bottom-color: #c0c0c0;
        }
        .navbar-custom .navbar-nav > .open > a,
        .navbar-custom .navbar-nav > .open > a:hover,
        .navbar-custom .navbar-nav > .open > a:focus {
            background-color: #1d81b3;
            color: #c0c0c0;
        }
        .navbar-custom .navbar-nav > .open > a .caret,
        .navbar-custom .navbar-nav > .open > a:hover .caret,
        .navbar-custom .navbar-nav > .open > a:focus .caret {
            border-top-color: #c0c0c0;
            border-bottom-color: #c0c0c0;
        }
        .navbar-custom .navbar-nav > .dropdown > a .caret {
            border-top-color: #ffffff;
            border-bottom-color: #ffffff;
        }
        @media (max-width: 767) {
            .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
                color: #ffffff;
            }
            .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
            .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
                color: #c0c0c0;
                background-color: transparent;
            }
            .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
            .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
            .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
                color: #c0c0c0;
                background-color: #1d81b3;
            }
            .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
            .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
            .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
                color: #cccccc;
                background-color: transparent;
            }
        }
        .navbar-custom .navbar-link {
            color: #ffffff;
        }
        .navbar-custom .navbar-link:hover {
            color: #c0c0c0;
        }

    </style>



    <body>


    <nav class="navbar navbar-default navbar-custom">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#">Admin Page</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="myDefaultNavbar1" >
            <ul class="nav navbar-nav">
                <li><a href="subhanallah.php">Report Hari ini <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="reportpernegara.php">Report Per Negara</a></li>
                <li><a href="reportperbenua.php">Report Per Benua</a></li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->

    </nav>
    <div class="container">
        <section>
            <div class="jumbotron text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xs12">


                            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <!--th>Check</th-->

                                    <th class="text-center">Date Time</th>

                                    <th class="text-center">Country</th>

                                    <th class="text-center">Company</th>

                                    <th class="text-center">Buyer</th>

                                    <th class="text-center">Email</th>

                                    <th class="text-center">Buyer Rating</th>

                                    <th class="text-center">PIC</th>

                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php

                                $sql = "SELECT * FROM buyer GROUP BY buyer ORDER BY negara ASC";



                                $hasil_sql = mysql_query($sql);
                                $total2 = mysql_num_rows($hasil_sql);




                                while($data = mysql_fetch_assoc($hasil_sql)) {

                                    echo "<tr>";

                                    # echo "<td align='center'><input type='checkbox' name='ID[]' value='$data[ID]'></td>";

                                    echo "<td align='center'>$data[tgl]<br>$data[wkt]</td>";

                                    echo "<td bgcolor='#FFE8E8' align='center'>$data[negara]</td>";

                                    echo "<td align='center'>$data[company]</td>";

                                    echo "<td align='center'>$data[buyer]</td>";

                                    echo "<td align='center'>$data[email]</td>";

                                    echo "<td align='center'>$data[rating]</td>";

                                    echo "<td align='center'>$data[PIC]</td>";

                                    echo "<td align='center'><a href='detail.php?ID=$data[ID]' style='text-decoration:none;'><input type='button' value='Detail' style='background-color:#F00;color:#FFF;'></a></td>";


                                    echo "</tr>";

                                }
                                ?>

                                </tbody>
                            </table>



                            <!--div class="jumbotron text-center">

                                  <div class="row">
                                    <div class="col-xs12"-->
                            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <!--th>Check</th-->

                                    <th class="text-center">Negara</th>

                                    <th class="text-center">Total</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $sql2 = "SELECT negara, COUNT(negara) AS TOTAL FROM buyer GROUP BY negara ORDER BY negara ASC";



                                $hasil_sql2 = mysql_query($sql2);
                                $total= mysql_num_rows($hasil_sql2);

                                $jumlah_jos = 0;
                                while($data2 = mysql_fetch_assoc($hasil_sql2))
                                {
                                    echo"<tr><td>$data2[negara]</td><td align='center'>$data2[TOTAL]</td></tr>";

                                    $jumlah_jos = $jumlah_jos + $data2[TOTAL];

                                }



                                //echo"<tr><td><b>Total Negara Visitor </b></td><td align='center'><b>$total</b></td></tr>";
                                echo"<tr><td><b>Total Negara Visitor </b></td><td align='center'><b>$jumlah_jos</b></td></tr>";

                                ?>
                                </tbody>
                            </table>
                        </div><!--end of col-xs12-->
                    </div><!--row-->
                </div><!--end of container-->
            </div><!--jumbotoron text center-->
        </section>




        <!--footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <p>Copyright © Kokola E-Department. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer-->



        <script src="DT/jquery-1.11.2.min.js"></script>
        <script src="DT/bootstrap.min.js"></script>
        <script src="DT/jquery.dataTables.js"></script>
        <script src="DT/dataTables.bootstrap.js"></script>
        <script src="DT/dataTables.responsive.js"></script>

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>


    </body>
    </html>

    <?php
}
else{
    echo "Anda tidak berhak";
}

?>
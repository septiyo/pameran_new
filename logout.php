<?php
 session_start();
 session_destroy();
  echo "<script language='javascript'>";
   echo " alert('Anda sudah keluar dari sistem');";
   echo "window.location='index.php';";
   echo "</script>";
?>
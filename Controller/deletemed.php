<?php

  require_once '../Models/db_connect2.php';
$id="$_GET[id]";


$query ="Delete from medinfo where sl='$id';";


 execute($query);
//echo $query;
	header("Location:../view/stockinfo.php");




  ?>

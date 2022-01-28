<?php 

include_once ('config.php');


$kidsid = $_POST["kidsid"];
$kidsname = $_POST["kidsname"];
$kidsyearReg = $_POST["kidsyearReg"];
$kidsAdd = $_POST["kidsAdd"];
$kidsmedHistory = $_POST["kidsmedHistory"];
$kidsStatus = $_POST["kidsStatus"];


$sql = "insert into kids (kidsid, kidsname, kidsyearReg, kidsAdd, kidsmedHistory, kidsStatus)
 values ('kidsid', '$kidsname', '$kidsyearReg', '$kidsAdd', '$kidsmedHistory', '$kidsStatus' )" ;
      
      $query = $conn->prepare( $sql );
      if ($query == false) {
      
	  print_r($connectonn->errorInfo());
       die ('Error Prepare');
      }
      $sth = $query->execute();
      if ($sth == false) {
       print_r($query->errorInfo());
       die ('Error Execute');
      }
header('Location: updatereg-1.php');
?>
<?php 

include_once ('config.php');

$kidsid = $_POST["kidsid"];
$kidsname = $_POST["kidsname"];
$kidsyearReg = $_POST["kidsyearReg"];
$kidsAdd = $_POST["kidsAdd"];
$kidsmedHistory = $_POST["kidsmedHistory"];
$kidsStatus = $_POST["kidsStatus"];

$sql = "UPDATE kids SET kidsname='$kidsname', kidsyearReg='$kidsyearReg', kidsmedHistory='$kidsmedHistory', kidsAdd='$kidsAdd' WHERE kidsid = '$kidsid'";

    $query = $conn->prepare($sql);
    if ($query == false){
      print_r($connection->errorInfo());
      die('Error Prepare');
    } 

    $sth = $query->execute();
    if ($sth == false){
      print_r($querry->errorInfo());
      die('Error Execute');
      }
      header('Location: paymentkids.php')
?>
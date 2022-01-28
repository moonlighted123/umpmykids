<?php 

include_once ('config.php');


$qrid = $_POST["qrid"];
$qrattendance = $_POST["qrattendance"];
$qrdate = $_POST["qrdate"];


$sql = "insert into qr (qrid, qrattendance, qrdate,)
 values ('qrid', '$qrattendance', $qrdate )" ;
      
      $query = $conn->prepare( $sql );
      if ($query == false) {
      
	  print_r($connection->errorInfo());
       die ('Error Prepare');
      }
      $sth = $query->execute();
      if ($sth == false) {
       print_r($query->errorInfo());
       die ('Error Execute');
      }
header('Location: ../admin/report.php');
?>
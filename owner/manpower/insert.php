<?php 

include_once ('config.php');


$manpowerid = $_POST["manpowerid"];
$manpoweradd = $_POST["manpoweradd"];
$manpowerstatus = $_POST["manpowerstatus"];
$manpowermedhistory = $_POST["manpowermedhistory"];
$manpowername = $_POST["manpowername"];

$sql = "insert into manpower (manpowerid, manpoweradd, manpowerstatus, manpowermedhistory, manpowername )
 values ('manpowerid', '$manpoweradd', '$manpowerstatus', '$manpowermedhistory', '$manpowername')" ;
      
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
header('Location: ../manpower/manpowerreport.php');
?>
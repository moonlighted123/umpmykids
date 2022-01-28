<?php 

include_once ('config.php');


$namaumpparent = $_POST["namaumpparent"];
$icparent = $_POST["icparent"];
$noparent = $_POST["noparent"];
$maritalStat = $_POST["maritalStat"];
$accStat = $_POST["accStat"];
$umpparentid = $_POST["umpparentid"];


$sql = "insert into umpparent (umpparentid, namaumpparent, icparent, noparent, maritalStat, accStat)
 values ('umpparentid', '$namaumpparent', '$icparent', '$noparent', '$maritalStat', '$accStat' )" ;
      
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
header('Location: kidsreg.php');
?>
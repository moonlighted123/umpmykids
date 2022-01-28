<?php
include('config.php');

$sql_delete_cert = "DELETE FROM user WHERE id = '".$_GET['id']."'";
	if($result_delete_cert = $connect->query($sql_delete_cert))
	{
     echo "<script language=javascript>alert('Successfully deleted');window.location='userlist.php';</script>"; 
	}
	else
	{
		echo "Rekod Tidak Berjaya disimpan";
	}

?>




<?php

include_once 'config.php';
            
            $namastaff = $_POST['nama'];
            $wage = $_POST['wage'];
			$hour = $_POST['hour'];
			$salary = $_POST['salary'];
            
            $sql = "UPDATE salarystaff  SET wage = '$wage', hour = '$hour', salary = '$salary' WHERE namastaff = '$namastaff'" ;
			   
           if ($conn->query($sql) === TRUE) {
header ("Location: ../salary/salarystaff.php?update=success");
		   }

$conn->close();
?>
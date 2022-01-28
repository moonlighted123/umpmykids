<?php
    include 'connect.php';//use connection file
?>
<?php
    include ("config.php");
?>
<?php
    if(isset($_POST['PaymentID']))
{

    $fee = $_POST['fee'];

    $paid = $_POST['paidamount'];

    $unpaid = 360 - $paid;

    $sql = "UPDATE payment SET fee ='".$fee."',paid ='".$paid."',unpaid ='".$unpaid."' WHERE PaymentID='".$_SESSION['payment']."'"; 

    $result=mysql_query($sql); 

    // if successfully insert data into database, displays message "Successful". 
    if($result){ 
        echo "<script type='text/javascript'>alert('Update Successfully!')</script>";
    }
    else 
    echo mysql_error();
}
?>
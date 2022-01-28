<?php

include_once 'config.php';

?>
<html>
<head>

<link rel="stylesheet" href="css\style.css">

</head>
<body>

<div class="header">
  <h1></h1>
 
</div>


<div class="topnav">
  <a href="index.php" >Home</a>
  <a href="about.php">About</a>
  <a href="fee.php">Kids</a>
 <!-- <a h" style="float:right">REGISTRATION</a>-->
    <a href="logoref="owner.php">Owner</a>

   <a href="logout.php"style="float:right">LOGOUT</a>
  
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
  <li><a href="salarystaff.php">SALARY LIST</a></li>
  <li><a href="statusstaff.php">STATUS</a></li>
  <li><a href="calculationstaff.php"> CALCULATION </a></li>
   <li><a href="reportstaff.php"> REPORT</a></li>
</ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>PAID</h2>
	  
      <ul>
  <li><a href="paid.php">PAID</a></li>
  <li><a href="pending.php">PENDING</a></li>
  <li><a href="overdue.php"> OVERDUE </a></li></ul>
   <br><br> <table border = "2" width = "100%">
	<tr>
		<td>ID</td>
		<td>NAMA</td>
		<td>NO KP</td>
		<td>ACTION</td>
		<td>SALARY</td>
	</tr>
  
  	<?php 
	$sql = "SELECT * FROM salarystaff WHERE paidstaff ='paid'; ";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck>0){
		while($row = $result->fetch_assoc()) {
echo "<tr>
				<td>" . $row["idstaff"]. "</td>
				<td>" . $row["namastaff"] . "</td>
				<td>". $row["kpstaff"]. "</td>
				<td>". $row["actionstaff"]. "</td>
				<td>". $row["salary"]. "</td></tr>";
				
}
echo "</table>";
}
 else 
 { 
echo "0 results";
 }
$conn->close();
?>
    </div>

  </div>
</div>

<div class="footer">
  <center>
                  <p>©2022 UMP-MyKids All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">UMP-MyKids</a></p>
               </center>   
</div>

</body>
</html>
<?php 
include ('config.php');

?> 


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="css\style.css">

</head>
<body>

<div class="header">
  <h1>UMP-MyKids</h1>
 
</div>


<div class="topnav">
  <a href="adminhome.php" >Admin</a>
  <a href="staffparent.php">UMP Staff Parent</a>
  <a href="outsiderparent.php">Outsider Parent</a>
  <a href="owner.php">Owner</a>
  <a href="staffmykids.php">UMP-MyKids Staff</a>
<!--  <a href="login.php" style="float:right">LOG IN</a>
   <a href="signup.php" style="float:right">REGISTRATION</a>-->
    <a href="logout.php"style="float:right">LOGOUT</a>
  
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
  <li><a href="userlist.php">User List</a></li>
  <li><a href="manageuser.php">Manage User</a></li>
  <li><a href="qr.php">QR Code</a></li>
   <li><a href="report.php">View Report</a></li>
</ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>USER LIST</h2>
	  
    <table border = "1" width = "100%">
	<tr>
		<td>ID</td>
		<td>KIDS NAME</td>
	</tr>
	<?php 
	$sql = "SELECT * FROM kids;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck>0){
		while($row = $result->fetch_assoc()) {
echo "<tr>
				<td>" . $row["kidsid"]. "</td>
				<td>" . $row["kidsname"] . "</td>
				</tr>";
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
</div>	</table>

<div class="footer">
  <center>
                  <p>©2022 UMP-MyKids All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">UMP-MyKids</a></p>
               </center>   
</div>

</body>
</html>



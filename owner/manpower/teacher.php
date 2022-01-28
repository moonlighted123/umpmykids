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
<a href="manpowerhome.php" >Home</a>
  <a href="teacher.php" >Teacher</a>
  <a href="caretaker.php">Caretaker</a>
 <!-- <a h" style="float:right">REGISTRATION</a>-->
   
 <!-- <a href="login.php" style="float:right">LOG IN</a>-->
   <a href="logout.php"style="float:right">LOGOUT</a>
  
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
  <li><a href="totalworker.php">TOTAL WORKER</a></li>
  <li><a href="activeworker.php">ACTIVE WORKER</a></li>
   <li><a href="terminated.php"> TERMINATED</a></li>
   <li><a href="reportteacher.php"> REPPORT</a></li>
</ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>LIST ACTIVE WORKER</h2>
    <table border = "1" width = "100%">
	<tr>
		<td>ID</td>
		<td>NAMA</td>
		<td>NO KP</td>
		<td>ACTION</td>
	</tr>
	<?php do { ?>
	<tr>
		<td><?php echo $rows_student['pelajar_id'];?></td>
		<td><?php echo $rows_student['pelajar_nama'];?></td>
		<td><?php echo $rows_student['pelajar_nokp'];?></td>
		<td>
	</td>
	</tr>
	<?php } while ($rows_student = $result_student->fetch_array());?>
</table>

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
  <a href="teacher.php" >Teacher</a>
  <a href="careetaker.php">Caretaker</a>
 <!-- <a h" style="float:right">REGISTRATION</a>-->
   
 <!-- <a href="login.php" style="float:right">LOG IN</a>-->
   <a href="signup.phput.php"style="float:right">LOGOUT</a>
  
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
  <li><a href="manpowerhome.php">Homepage</a></li>
  <li><a href="manpower.php">Manpower</a></li>
   <li><a href="manpowerreport.php"> Report</a></li>
</ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>Report</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p></p>
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



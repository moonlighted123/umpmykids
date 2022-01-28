<!DOCTYPE html>
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
  <a href="fee.php">Fee</a>
 <!-- <a href="owner.php">Owner</a>
  <a href="login.php" style="float:right">LOG IN</a>
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
    <li><a href="parentreg.php">Parent Registration</a></li>
  <li><a href="kidsreg.php">Kids Registration</a></li>
     <li><a href="updatereg-1.php">Update Registration</a></li>
  <li><a href="paymentkids.php"> Payment </a></li>
   <li><a href="kidsreport.php"> Report</a></li>
</ul>
  </div>
    </div>


<form action="updateDetail.php" method="POST">
  <div class="rightcolumn">
    <div class="card">
      <h2>Kids Registration</h2>
	NAME:<input type ="text" name="kidsname"/><br/>
  YEAR REGISTER: <input type ="text" name="kidsyearReg"/><br/>
	MEDICAL HISTORY: <input type ="text" name="kidsmedHistory"/><br/>
	ADDRESS: <input type ="text" name="kidsAdd"/><br/>
	STATUS: <input type ="text" name="kidsStatus"/><br/>
	<br><br>
	<input type="submit" name ="submit" value="INSERT"/>
  <br><br>
</form>
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



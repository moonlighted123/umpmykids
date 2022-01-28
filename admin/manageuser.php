
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

  
<form action="update.php" method="POST">
  <div class="rightcolumn">
    <div class="card">
      <h2>MANAGE USER</h2>
	NAME:<input type ="text" name="kidsname"/><br/>
  YEAR REGISTER: <input type ="text" name="kidsyearReg"/><br/>
	MEDICAL HISTORY: <input type ="text" name="kidsmedHistory"/><br/>
	ADDRESS: <input type ="text" name="kidsAdd"/><br/>
	STATUS: <input type ="text" name="kidsStatus"/><br/>
	<br><br>
	<input type="submit" name ="submit" value="SUBMIT"/>
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



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

 <div class="rightcolumn">
    <div class="card">
      <h2>Update Registration</h2>
  <form action="updateDatabase.php" method="POST">
<div id="fulldiv">
 <p> Enter the following information to calculate your annual salary.</p><br><br>
 
  <label for="txt_nama">KIDS NAME</label>
 <input type="text" name="kidsname" id="txt_nama" placeholder =""/>
 
 <label for="txt_yearreg">YEAR REGISTER:</label>
 <input type="text" name="kidsyearReg" id="txt_wage" placeholder =""/>
					
 <label for="txt_add">ADDRESS:</label>
 <input type="text" name="kidsAdd" id="txt_hours" placeholder= ""/>   
 
 <label for="txt_medhist">MEDICAL HISTORY:</label>
 <input type="text" name="kidsmedHistory" id="txt_wage" placeholder =""/>
 
 <label for="txt_status">STATUS:</label>
 <input type="text" name="kidsStatus" id="txt_wage" placeholder =""/>
  <br><br>
<input type="submit" name ="submit" value="INSERT"/>
</div>    


      </table>
</div>

<div class="footer">
  <center>
                  <p>©2022 UMP-MyKids All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">UMP-MyKids</a></p>
               </center>   
</div>

</body>
</html>







<!DOCTYPE html>
<html>
<head>
<script src="jquery-3.6.0.js"></script>
<link rel="stylesheet" href="css\style.css">

</head>
<body>

<div class="header">
  <h1>UMP-MyKids</h1>
 
</div>


<div class="topnav">
  <a href="index.php" >Home</a>
  <a href="about.php">About</a>
  <a href="fee.php">Kids</a>
 <!-- <a h" style="float:right">REGISTRATION</a>-->
   
   <a href="signup.phput.php"style="float:right">LOGOUT</a>
  
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
  <li><a href="salarylist.php">SALARY LIST</a></li>
  <li><a href="statusstaff.php">STATUS</a></li>
  <li><a href="calculationstaff.php"> CALCULATION </a></li>
   <li><a href="staffreport.php"> REPORT</a></li>
</ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2></h2>
      <div class="fakeimg" style="height:100px;"><center>CALCULATION</center>
      <fieldset id="buildyourform">
    <legend>search here</legend>
    <form method="post" role="form">
<h3> fee : <?php echo $Row['fee']; ?>&nbsp; </h3> 
<input type="number" class="small" name="height" id="height" min="100" max="200" placeholder="Update Height CM"/>
<input type="number" class="small" name="weight" id="height" min="10" max="200" placeholder="Update Weight CM"/>
<button type="submit" class="btn btn-warning" name="updateH"> UPDATE </button>
</fieldset>
<input type="button" value="Preview " class="add" id="preview" />
<input type="button" value="Add" class="add" id="add" />



  <br>
  

<br>

 <div class="footer">
    
     <div class="button">
    <input type="button" onclick="" value="CALCULATE"style="background-color: #0E6F67; color: white"/>
    <input type="reset" value="RESET" style="background-color: #0E6F67;color: white"/>
</div>
    <br>
    <h5>©2022 UMP-MyKids All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">UMP-MyKids</h5>
   </div>
</body>
</html>

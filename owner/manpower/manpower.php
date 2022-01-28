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
   <a href="logout.php"style="float:right">LOGOUT</a>
  
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
      <h2>Manpower</h2>
     <form method ="post">
	NAMA: <input type ="text" name="name" value="<?php echo $rows_view_student ['pelajar_nama'];?>"/><br/>
	NO KP: <input type ="text" name="kp" value="<?php echo $rows_view_student ['pelajar_nokp'];?>"/><br/>
	UMUR: <input type ="text" name="umur" value="<?php echo $rows_view_student ['pelajar_umur'];?>"/><br/>
	NO TELEFON: <input type ="text" name="notelefon" value="<?php echo $rows_view_student ['pelajar_notelefon'];?>"/><br/>
	ALAMAT: <input type ="text" name="alamat" value="<?php echo $rows_view_student ['pelajar_alamat'];?>"/><br/>
	<input type="submit" name ="submit" value="update"/>
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



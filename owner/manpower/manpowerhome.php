
<html>
<head>

<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

<link rel="stylesheet" href="css\style.css">

</head>
<body>

<div class="header">
  <h1></h1>
 
</div>


<div class="topnav">
  <a href="teacher.php" >Teacher</a>
  <a href="caretaker.php">Caretaker</a>
  <a href="admin.php">Admin</a>
  <a href="owner.php">Owner</a>
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
      <h2>Manpower Information</h2>
      <div>
  <h2>Update Registration</h2>
  <form action="insert.php" method="POST">
<div id="fulldiv">
 <p> Enter the following information to calculate your annual salary.</p><br><br>
 
  <label for="txt_nama">MANPOWER NAME</label>
 <input type="text" name="kidsname" id="txt_nama" placeholder =""/>
 
 <label for="txt_status">MANPOWER STATUS:</label>
 <input type="text" name="manpowerstatus" id="txt_status" placeholder =""/>
 
  <label for="txt_add">MANPOWER ADDRESS:</label>
 <input type="text" name="manpoweradd" id="txt_add" placeholder =""/>
					
 <label for="txt_med">MEDICAL HISTORY:</label>
 <input type="text" name="manpowermedhistory" id="txt_med" placeholder= ""/>   

<input type="submit" name ="submit" value="INSERT"/>
</div>    


      </table>
</div>
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

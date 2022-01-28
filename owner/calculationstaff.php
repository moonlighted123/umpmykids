
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
      <h2>CALCULATE STAFF SALARY</h2>

<form action="salary.php" method="POST">
<div id="fulldiv">
 <p> Enter the following information to calculate your annual salary.</p><br><br>
 
  <label for="txt_nama">STAFF NAME</label>
 <input type="text" name="nama" id="txt_nama" placeholder =""/>
 
 <label for="txt_wage">WAGE PER HOUR:</label>
 <input type="text" name="wage" id="txt_wage" placeholder ="0.00"/>
					
 <label for="txt_hours">HOUR PER DAY:</label>
 <input type="text" name="hour" id="txt_hours" placeholder= "0"/>   
  <br/><br/>
 <button value="calculate" onclick="calcSalary()">Calculate</button>
 <center><p name="salary" id="salary" ></p></center>
</div>
					
		<script type="text/javascript">
		
		function calcSalary() {
 var wage = parseFloat(document.getElementById('txt_wage').value);
 var hours = parseFloat(document.getElementById('txt_hours').value);
 var calculate = wage * hours ;
 
 document.getElementById('salary').innerHTML = calculate;
}
		</script>
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



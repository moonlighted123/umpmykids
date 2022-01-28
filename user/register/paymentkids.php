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

 
  <div class="rightcolumn">
    <div class="card">
      <h2>CALCULATE STAFF SALARY</h2>

<div id="fulldiv">
 <p> Enter the following information to calculate kids payment.</p><br><br>
 
  <label for="txt_nama">KIDS NAME</label>
 <input type="text" name="kidsname" id="txt_nama" placeholder =""/>
 
 <label for="txt_payment"> PAYMENT:</label>
 <input type="text" name="payment" id="txt_payment" placeholder ="0.00"/>
					
 <label for="txt_hours">HOUR PER DAY:</label>
 <input type="text" name="hour" id="txt_hours" placeholder= "0"/>   
  <br/><br/>
 <button value="calculate" onclick="calcPayment()">Calculate</button>
 <center><p name="payment" id="payment" ></p></center>
</div>
					
		<script type="text/javascript">
		
		function calcPayment() {
 var payment = parseFloat(document.getElementById('txt_payment').value);
 var hours = parseFloat(document.getElementById('txt_hours').value);
 var calculate = payment * hours ;
 
 document.getElementById('payment').innerHTML = calculate;
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



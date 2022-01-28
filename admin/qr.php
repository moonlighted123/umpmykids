<!DOCTYPE html>
<html>
<head>
<title>UMP-myKids QR</title>
<link rel="stylesheet" href="css\style.css">

<style>
    aside {
      width: 60%;
      float: right;
      color: black;
      padding: 5px;
      margin-right: 75px;
      height: 10px;

}
}
</style>

</head>
<body>

<div class="header">
 <img src="images/logo1.png" alt="logo" width=580px height=150px>
</div>


<div class="topnav">
    <a href="logout.php"style="float:right">LOGOUT</a>
  
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
       <li><a href="Homepage.php">Homepage</a></li>
       <li><a href="adminhome.php">User List</a></li>
       <li><a href="manageuser.php">Manage User</a></li>
       <li><a href="qr.php">QR Code</a></li>
       <li><a href="report.php">View Report</a></li>
    </ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2><i>&emsp;QR CODE</h2></i>
      <br></br>
      &emsp;&emsp;&emsp;<img src="images/QR_Code.png" alt="logo" width=180px height=150px>  
    
    <aside>
      <form action="qrinsert.php" method="post">
      <h2 style="text-align:center;background-color:powderblue;">Attendance</h2>
 
        <p>Enter User ID:</p>
        <input type="text" name="qrid" placeholder="User Name"><br>
        <br>
         <input type="radio" id="qrattendance" name="qrattendance" value="Present">
         <label for="qrattendance">Present</label> 
         
        &emsp; <input type="radio" id="qrattendance" name="qrattendance" value="Absent">
         <label for="qrattendance">Absent</label><br>
        <br>

        <p>Date:</p> 
        <input type="date" id="qrdate" name="qrdate"><br></br>

        <br></br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="reset">Reset</button> &emsp;<button type="Submit">Submit</button>
      </form>
    </aside>
     
     <br></br>
     <br></br>
     <br></br>
     <br></br>
     <br></br>
     <br></br>
     <br></br>
     <br></br>
     <br></br>
     <br></br>
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



<?php
    include 'connect.php';//use connection file
?>
<?php require 'Calculate.php'; ?>
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
  <a href="index.php" >HOME</a>
  <a href="about.php">ABOUT</a>
  <a href="payment.php">PAYMENT</a>
<!--  <a href="login.php" style="float:right">LOG IN</a>
   <a href="signup.php" style="float:right">REGISTRATION</a>-->
   
   <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; float:right;">LOGIN</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;  float:right;">REGISTER</button>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="signup.php">
    <div class="container">
      <h1>Registration</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
  <li><a href="#home">UMP-MyKids Administration</a></li>
  <li><a href="#news">UMP-MyKids Registration</a></li>
  <li><a href="#contact">UMP-MyKids Manpower</a></li>
  <li><a href="#about">UMP-MyKids Pay Salary</a></li>
</ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>PAYMENT</h2>
      <div class="fakeimg" style="height:100px;">
      

    <form method="post" role="form">
 <h3> fee : <?php echo $userRow['fee']; ?>&nbsp; cm</h3> 
  <input type="number" class="small" name="fee" id="fee" min="100" max="200" placeholder="Update fee "/>
  <input type="number" class="small" name="paidamount" id="paidamount" min="10" max="200" placeholder="Update paidamount "/>
  <button type="submit" class="btn btn-warning" name="updateH"> UPDATE </button>

 </form>



</div>
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



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
 <?php
 include ("config.php");
                            if(isset($_GET["id"]))
                            {
                                $KidsID = $_GET["id"];
                                $sql =  "SELECT * FROM kids where KidsID = :KidsID";
                                $stmt = $conn->prepare($sql);
                                $stmt->bindParam(":KidsID", $KidsID);
                                $stmt->execute();

                                if($dt = $stmt->fetch(PDO::FETCH_ASSOC))
                                {
                                    $KidsID = $dt["KidsID"];
                                    $ParentsID = $dt["ParentsID"];
                                    $OutsidersID = $dt["OutsidersID"];
                                    $KidsYearRegister = $dt["KidsYearRegister"];
                                    $KidsStatus = $dt["KidsStatus"];
                                    $KidsName = $dt["KidsName"];
                                    $KidsAddress = $dt["KidsAddress"];
                                    $KidsMedHistory =  $dt["KidsMedHistory"];
                                                                     
                                }
                            }
                            else
                            {
                                echo " Data is not found!";
                            }
                            ?>
  <div class="rightcolumn">
    <div class="card">
      <h2>Update Registration</h2>
        <form method ="post" action="updateDetail.php" enctype="multipart/form-data">
          	NAME:<input type ="text" name="name" value="<?php echo $KidsName; ?>"/><br/>
            YEAR REGISTER: <input type ="text" name="yearReg" value="<?php echo $KidsYearRegister;?>"/><br/>
          	MEDICAL HISTORY: <input type ="text" name="medHis" value="<?php echo $KidsMedHistory;?>"/><br/>
          	ADDRESS: <input type ="text" name="address" value="<?php echo $KidsAddress;?>"/><br/>
            <input style="visibility: hidden;" type ="text" name="kidsID" value="<?php echo $KidsID;?>"> <br/>
            <input type="submit" name ="update" value="update"/>
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







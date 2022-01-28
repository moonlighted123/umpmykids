<?php
    include 'config.php';//use connection file
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
      <form action="parentlist.php" method="post">
                <table>
                    
                    
                    <tr >
                        <!--<td>
                            <th style="text-align: left;">Enter MP ID:</th>
                        </td>-->
                        <td colspan="2">
                            <input type="text" placeholder="Search parent ID" name="searchID" id="searchID">
                        </td>
                        <td>
                            <button name="viewWorker" value="SEARCH" class="button">SEARCH</button>
                        </td>                    
                    </tr>            
                
                </table>
      <p></p>
      <table border = "1" width = "100%">
	<tr>
		<td>PaymentID</td>
		<td>PaymentStatus</td>
        <td>PaymentDate</td>
        <td>Status</td>
        <td>fee</td>
        <td>paid amount</td>
        <td>unpaid fee</td>

		
		<td>ACTION</td>
	</tr>

  <?php
         //fetch data from database
          $records = mysqli_query($db,"SELECT * FROM `payment`");
          
          while($data = mysqli_fetch_array($records))
          {   ?>
          <tr>
          <!--<td><a href="salaryDetail.php?id="><?php //echo $data['mpID']; ?></a></td>-->
          <!--<td><a href='view.php?user_id=". $data['m']."'></a><?php //echo $data['mpID']; ?></a></td>-->
                                       
          <td><?php echo $data['PaymentID']; ?></td>
          <td><?php echo $data['PaymentStatus']; ?></td>
          <td><?php echo $data['PaymentDate']; ?></td>
          <td><?php echo $data['Status']; ?></td>
          <td><?php echo $data['fee']; ?></td>
          <td><?php echo $data['paid amount']; ?></td>
          <td><?php echo $data['unpaid fee']; ?></td>
          
                                        
          <?php
          ?>
           <td><button name="view" value="VIEW" class="viewbutton"><a href="payment.php">view</button></td>
           </tr>
            <?php
            }
            ?>

</table>
    </div>
    <input type="button" value="Preview " class="add" id="preview" />
<input type="button" value="Add" class="add" id="add" />
  </div>
</div>

<div class="footer">
  <center>
                  <p>©2022 UMP-MyKids All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">UMP-MyKids</a></p>
               </center>   
</div>

</body>
</html>



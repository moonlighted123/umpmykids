<?php
    include 'connect.php';//use connection file
?>

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
  <a href="registerkids.php">Kids</a>
 <!-- <a h" style="float:right">REGISTRATION</a>-->
   <a href="logout.php"style="float:right">LOGOUT</a>
  
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2></h2>
     <!-- <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>-->
 
    <ul>
  <li><a href="parentlist.php">PARENT LIST</a></li>
  <li><a href="statusparent.php">STATUS</a></li>
  <li><a href="calculationparent.php"> CALCULATION </a></li>
   <li><a href="reportparent.php"> REPORT</a></li>
</ul>
  </div>
    </div>

  <div class="rightcolumn">
    <div class="card">
      <h2>PARENT LIST</h2>
	    <form action="searchresult.php" method="post">
                <table>
                    
                    
                    <tr >
                        <!--<td>
                            <th style="text-align: left;">Enter MP ID:</th>
                        </td>-->
                        <td colspan="2">
                            <input type="text" placeholder="Search parent ID" name="searchID" id="searchID">
                        </td>
                        <td>
                            <button name="Search" value="Search" class="Search">SEARCH</button>
                            
                        </td>                    
                    </tr>            
                
                </table>
        <table border = "1" width = "100%">
        <thead>
    <tr>
     <td>Parents ID</td>
       <td>Payment ID</td>
        <td>User ID</td>
       <td>Name</td>
        <td>Status</td>
        <td>Pay</td>
          <!--<td style="text-align:center;">Action</td>-->
           </tr>
            </thead>
	<?php
         //fetch data from database
          $records = mysqli_query($db,"SELECT * FROM `ump staff parents`");
          
         

          while($data = mysqli_fetch_array($records))
          {   ?>
          <tr>
          <!--<td><a href="salaryDetail.php?id="><?php //echo $data['mpID']; ?></a></td>-->
          <!--<td><a href='view.php?user_id=". $data['mp_id']."'></a><?php //echo $data['mpID']; ?></a></td>-->
                                       
          <td><?php echo $data['ParentsID']; ?></td>
          <td><?php echo $data['PaymentID']; ?></td>
          <td><?php echo $data['UserID']; ?></td>
          <td><?php echo $data['UserName']; ?></td>
          <td><?php echo $data['Status']; ?></td>
          
                                        
          <?php
          ?>
           <td><button name="view" value="VIEW" class="viewbutton"><a href="payment.php">view</button></td>
           </tr>
            <?php
            }
            ?>
</table>

</div>
	  
	  
      
    </div>

  </div>


<div class="footer">
  <center>
                  <p>©2022 UMP-MyKids All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">UMP-MyKids</a></p>
               </center>   
</div>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>



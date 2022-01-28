<?php
include('config.php');


$sql_cert = "Select * from user WHERE id = '".$_GET['id']."'";
if($result_cert = $connect->query($sql_cert))
{
   $rows_cert =$result_cert->fetch_array();
   $total_cert =$result_cert->num_rows;
}

$result = mysqli_query($connect, $sql_cert);

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <title>QuickSignTech</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Job-point Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
          setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
          window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Mukta+Malar:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;

   }
   #img_div:after{
    content: "";
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width:200px;
    height:auto;
   }
   
</style>
  </head>
  <body>
      <div class="header-outs" id="header">
         <!--banner -->
         <div class="header-w3layouts">
            <!--//navigation section -->
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="hedder-up">
                 <!-- logo -->
                  <h1><!-- logo -->
               <a class="navbar-brand font-weight-bold" href="index.php">
                  <i class="fa fa-ils mr-2" aria-hidden="true" style="color:gold"></i>QuickSignTech
               </a>
               <!-- //logo --></h1>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="adminmain.php">Home <span class="sr-only">(current)</span></a>
                     </li>
            <!--//navigation section -->
            <div class="clearfix"> </div>
         </div>
      </div>
      <!--//header-->
      <br><br><br><br>

           
      </div>
      <!--//banner -->
   
       <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
        <center><h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="font-weight: bold; background-color: tomato; width: 50%">MY PROFILE</h3>
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
              
           
            
                     <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
    ?>
  </center>
  </div>
              <div class="row">
               <div class="col-lg-8 col-md-8">
                  <div class="info-para">
                       <form action="#" method="post">
                      <div class="row wls-contact-mid">
                        <div class="col-md-6 col-sm-6 form-group contact-forms">
                          <h5 style="font-weight: bold; font-size: 25px">USERNAME :</h5>
                          <br>
                          <h4><?php echo $rows_cert['username'];?></h4>
                            </div>
                           
                           <div class="col-md-6 col-sm-6 form-group contact-forms">
                            <h5 style="font-weight: bold; font-size: 25px ">PASSWORD :</h5>
                            <br>
                             <h4><?php echo $rows_cert['password'];?></h4>
                           </div>
                         </div>
                          
                         <div class="row wls-contact-mid">
                          <div class="col-md-6 col-sm-6 form-group contact-forms">
                             <h5 style="font-weight: bold; font-size: 25px">EMAIL :</h5>
                             <br>
                            <h4> <?php echo $rows_cert['email'];?></h4>
                           </div>
                          
                          <div class="col-md-6 col-sm-6 form-group contact-forms">
                             <h5 style="font-weight: bold; font-size: 25px">FULLNAME :</h5>
                             <br>
                               <h4> <?php echo $rows_cert['fullname'];?></h4>
                           </div>
                         </div>
                             <div class="row wls-contact-mid">
                              <div class="col-md-6 col-sm-6 form-group contact-forms">
                              <h5 style="font-weight: bold; font-size: 25px">PHONE NUMBER :</h5>
                              <br>
                               <h4> <?php echo $rows_cert['phonenumber'];?></h4>
                           </div>

                            <div class="col-md-6 col-sm-6 form-group contact-forms">
                              <h5 style="font-weight: bold; font-size: 25px">BIRTH OF DATE :</h5>
                              <br>
                              <h4> <?php echo $rows_cert['bod'];?></h4>
                           </div>
                        </div>

                           <div class="row wls-contact-mid">
                            <div class="col-md-6 col-sm-6 form-group contact-forms">
                              <h5 style="font-weight: bold; font-size: 25px">ADDRESS :</h5>
                              <br>
                              <h4> <?php echo $rows_cert['address'];?></h4>
                           </div>
                           
                            <div class="col-md-6 col-sm-6 form-group contact-forms">
                              <h5 style="font-weight: bold; font-size: 25px">GENDER :</h5>
                              <br>
                               <h4> <?php echo $rows_cert['gender'];?></h4>
                           </div>
                         </div>

                          <div class="row wls-contact-mid">
                            <div class="col-md-6 col-sm-6 form-group contact-forms">
                                <h5 style="font-weight: bold; font-size: 25px">STATUS :</h5>
                                <br>
                               <h4> <?php echo $rows_cert['status'];?></h4>
                           </div>
                            <div class="col-md-6 col-sm-6 form-group contact-forms">
                               <h5 style="font-weight: bold; font-size: 25px">NATIONALITY :</h5>
                               <br>
                                <h4> <?php echo $rows_cert['nationality'];?></h4>
                           </div>
                        </div>
                           </form>
                          </div>
               </div>
               <div class="col-lg-4 col-md-4 contact-right ">
                  <div class="mb-lg-5 mb-md-4 mb-sm-3 mb-3 footer_grid_left text-center">
                     <div class="contact_footer_grid_left text-center mb-3">
                     </div>
                  </div>
                  <div class="mb-lg-5 mb-md-4 mb-sm-3 mb-3 footer_grid_left text-center">
                     <div class="contact_footer_grid_left text-center mb-3">
                     </div>

  </div>
</div>
</div>
                     <div class="mb-lg-5 mb-md-4 mb-sm-3 mb-3 footer_grid_left text-center">
                     <div class="contact_footer_grid_left text-center mb-3">
                     </div>
                      </div>
      </section>
      
      <!--//contact  -->
      <!--footer-->
      <footer class="buttom-footer py-lg-5 py-md-4 py-sm-3 py-3" style="width: 100%; height: %">
         <center>
            <p>©2019 QuickSignTech All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">QuickSignTech</a></p>
         </center>
      </footer>
      <!--//footer-->
      
      
      <!-- //bootstrap working-->
   </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <?php
  include 'caroousel.php'
  ?>
   <?php
  include 'welcomepage.php'
  ?>
  
      

      <!-- Service section -->
            <div class="row activity text-center" style="background-color :white;">
         
                  <div class="col-md act">
                    <img src="./images/new user.jpg" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="createuser.php"><button style="background-color : #033747 ;color:white; margin-top: 50px;">Creating User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="./images/transa.jpg" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #033747 ; color:white;margin-top: 50px; ">Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="./images/transactionhistory.jpg" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #033747 ;color:white; margin-top: 50px;">Transaction-History</button></a>
                  </div>
            
      </div>
      
      
      <div class="row activity text-center"  style="background-color :white;">

          
              
                  <div class="col-md act">
                    <img src="./images/currency converter.jpg" class="img-fluid" style ="height : 200px; margin-top: 50px;">
                    <br>
                    <a href="https://www.oanda.com/currency-converter/en/?from=EUR&to=USD&amount=1"><button style="background-color :#033747 ; color:white;margin-top: 50px;">Currency-Converter</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="./images/contact.jpg" class="img-fluid" style ="height : 200px;color:white; margin-top: 50px;">
                    <br>
                    <a href="http://localhost:3000/aboutme/contact.php"><button style="background-color : #033747 ;color:white; margin-top: 50px; ">contact-us</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="./images/me.jpg" class="img-fluid" style ="height : 200px;color:white; margin-top: 50px;">
                    <br>
                    <a href="http://localhost:3000/aboutme/index.php"><button style="background-color : #033747 ;color:white; margin-top: 50px;">About-Me</button></a>
                  </div>
            
      </div>
     <?php
     include 'footer.php';
     ?>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
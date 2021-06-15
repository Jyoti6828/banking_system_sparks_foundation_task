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
 	<link rel = "icon" href = "img/logo.png" type = "e.png">
    <title> Basic Banking System</title>
  </head>
  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1"  style="background-color :#75DCF5;" >
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" >
                  <h1>Welcome to The Bank Of Sparks Foundation</h1>
                </div>
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" class="img-fluid">
                    <br><br><br><br>
                    <a href="createuser.php"><button style="background-color : #5EB3C8;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/12.png" class="img-fluid">
					<br><br>
                    <a href="transfermoney.php"><button style="background-color : #5EB3C8;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
				  <br>
                    <img src="img/13.png" class="img-fluid">
                    <br><br><br><br>
                    <a href="transactionhistory.php"><button style="background-color : #5EB3C8;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      </body>
</html>
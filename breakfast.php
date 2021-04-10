<?php 
  session_start();

    if(!isset($_SESSION['loggedin'])) {
        header('Location: index.php');
    }
?>

<!DOCTYPE HTML>
<html lang="pl">
  <head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom_login.css">

    <!-- GOOGLE FONT-->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    </style>
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>

    <div class="header">


      <!-- Sweet Alert JS -->
      <script src="js/sweetalert.min.js"></script>

      <?php
        if(isset($_SESSION['status']) && $_SESSION['status'] != '') {
          ?>

          <script>
            swal({
              title: "<?php echo $_SESSION['status']; ?>",
              icon: "<?php echo $_SESSION['status_code']; ?>",
              button: "OK",
            });
          </script>

          <?php
          unset($_SESSION['status']);
        }
      ?>

      <nav class="navbar navbar-expand-sm navbar-dark bg-light">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <button data-toggle="modal" data-target="#userPanel" class="btn btn-dark" type="button" onclick="location.href = 'logout.php';">Wyloguj się</button>
          </form>
        </div>
      </nav>
        
      <div class="flex-overlay2">
         <h1><a href="index_login.php"><img src="img/logo.png"></a></h1>
      </div>
      
      </div>
      

      
      <div class="recipes">

<ul id="mgal_show" class="mgal">
  <li>       
      <div class="container">
        <a href="breakfast.php" style="text-decoration: none;"><img class="image" src="img/obiad.jpg">		  
      </div>
<span class="title">
TEST
</span>
  </li>	
  <li>       
      <div class="container">
        <a href="breakfast.php" style="text-decoration: none;"><img class="image" src="img/obiad.jpg">		  
      </div>
<span class="title">
TEST
</span>
  </li>        <li>       
      <div class="container">
        <a href="breakfast.php" style="text-decoration: none;"><img class="image" src="img/obiad.jpg">		  
      </div>
<span class="title">
TEST
</span>
  </li>        <li>       
      <div class="container">
        <a href="breakfast.php" style="text-decoration: none;"><img class="image" src="img/obiad.jpg">		  
      </div>
<span class="title">
TEST
</span>
  </li>        <li>       
      <div class="container">
        <a href="breakfast.php" style="text-decoration: none;"><img class="image" src="img/obiad.jpg">		  
      </div>
<span class="title">
TEST
</span>
  </li>        
</ul>
</div>
    

    <footer class="bg-dark text-center text-white">
      <!-- Copyright -->
      <div class="text-center p-3">
        © 2021 Copyright: Janik Piotr, Midura Patryk, Ziółkowski Maciej
      </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom jQuery -->
    <script src="js/customJQuery.js"></script>
  </body>
</html>

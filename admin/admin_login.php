<?php 
    ini_set('display_errrors', 1);
    error_reporting(E_All);

    $ip = $_SERVER["REMOTE_ADDR"];
    //echo $ip;

    require_once("phpscripts/init.php");

    if(isset($_POST['submit'])) {
        //echo "Congrats, you're a good clicker";
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if($username != "" && $password != "") {
            $result = logIn($username, $password, $ip);
            $message = $result;
            //echo "All Good!";
        }else {
            $message = "Please fill in the required fields";
        }
    }

 ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chantry Island</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="css/slicknav.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <section class="row panel">
    <h1 class="hidden">Chantry Island</h1>
    <div class="row">
      <div class="large-12 columns">
        <img src="images/night-header.jpg" alt="Daytime Header for Chantry Island">
        <h1 class="text-center">Chantry Island CMS Login</h1>
        <!-- <img src="images/day-header.jpg" alt="Daytime Header for Chantry Island"> -->
        <?php
                if(!empty($message)) {echo $message;}
         ?>
        <form action="admin_login.php" method="post">
        <div class="row">
        <div class="small-10 medium-offset-4 medium-4 large-offset-4 large-4 columns">
        <label>Username
        <input type="text" name="username" placeholder="Please enter your username">
        </label>
        <label>Password
        <input type="password" name="password" placeholder="Please enter your password">
        </label>
        <!-- <button class="button tiny button round">Login</button> -->
        <input type="submit" name="submit" value="Login">
        <button class="button tiny button round">Forget password</button>
        </div>
        </div>
        </form>
        <!-- <h3 class="text-center">Please note this is currently not working. This is for display purposes only.</h3> -->
      </div>
    </div>

    </section>
    
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/start.js"></script>
  </body>
</html>

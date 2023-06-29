<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <style>

          .form{
              margin-left: 40%;
              margin-top: 15%;
             
          }
      </style>

    </head>
    <body style="background-color:darkgray;">

      <form class="form" action="" method="post">
        <h1 class="login-title">Log In</h1>
        <input type="text" class="email" name="email" placeholder="Email Adress" style="border-radius: 5px; border-color:rgba(255, 255, 255, 0);">
        <br>
        <input type="password" class="password" name="password" placeholder="Password" id="pass" style="border-radius: 5px; border-color:rgba(255, 255, 255, 0);">
        <input type="checkbox" onclick="myFunction()">Show
        <br>
        <input type="submit" name="submit" value="Log In" class="LogIn-button" style="border-radius: 5px; border-color:rgba(255, 255, 255, 0);">
        <br>
        <p class="link">Don't have an account ?<a href="Register.php">Click to Register</a></p>
    </form>

    <?php

      require('config.php');
      require('BD_final.sql');
      if($email == 'a9048@oficina.pt' and $password == '123456789'){

      }else{

      }

    ?>

    <script>
      function myFunction() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
  </script>

    </body>
</html>
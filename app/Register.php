<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        <style>

            .form{
                padding-left: 40%;
                padding-top: 15%;  
                
            }

        </style>


    </head>
    <body style="background-color:darkgray;">
        
        <form class="form" action="" method="post">
                <h1 class="login-title">Registration</h1>
                <input type="text" class="name" name="name" placeholder="name" style="border-radius: 5px; border-color: rgba(255, 255, 255, 0);"  required />
                <br>
                <input type="text" class="Lastname" name="Lastname" placeholder="Lastname" style="border-radius: 5px; border-color: rgba(255, 255, 255, 0);" required />
                <br>
                <input type="text" class="username" name="username" placeholder="Username" style="border-radius: 5px; border-color: rgba(255, 255, 255, 0);" required />
                <br>
                <input type="text" class="email" name="email" placeholder="Email Adress" style="border-radius: 5px; border-color: rgba(255, 255, 255, 0);" required />
                <br>
                <input type="password" class="password" name="password" placeholder="Password" id="pass" style="border-radius: 5px; border-color: rgba(255, 255, 255, 0);" required />
                <input type="checkbox" onclick="myFunction()">Show
                <br>
                <input type="submit" name="submit" value="Create Account" class="regist-button" style="border-radius: 5px; border-color: rgba(255, 255, 255, 0);">
                <br>
                <p class="link">Alredy have an account ?<a href="LogIn.php">Click to Login</a></p>
        </form>
       
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
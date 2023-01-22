<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $login=false;
    $showError=false;
    include 'config.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
   
   
         $sql="Select * from users where username='$username' AND password='$password'";
         $result= mysqli_query($conn,$sql);
         $num=mysqli_num_rows($result);
         if ($num==1){
            $login=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("location:home.php");

            
         }
    
    else{
        $showError=True;
    }
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunes</title>
    <link rel="stylesheet" href="login.css">    
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="container">
        <div class="bg-image"></div>
        <header>
            <nav>
                <!-- <img src="images/logo.jpg" alt="logo" id="logo"> -->
                <!-- <div id="nav-left">
                   <img src="images/logo.jpg" alt="logo" id="logo">
                    <h3>Feeling<br> Fumes</h3>
                </div>  -->
                
            </nav>
        </header>
        <?php
        if($login){
           echo '<div class="success-alert" role="alert" style="position:relative">
            <strong>Success!!</strong>  you are logged in
          </div>';
        }
        if($showError){
           echo '<script>
                
               alert("Error!! Invalid credentials");
                
                 </script>';
        
         }
         ?>
         <!-- //echo '<div class="success-alert" role="alert" style="position:relative">
         //      <strong>Error!!</strong> Invalid Credentials
         //    </div>'; -->
       
          
       
        <div class="login-form">
            <div class="button-box">
                <div id="button"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <ul>
                    <li>
                        <i class="fa-brands fa-facebook-square"></i>
                    </li>
                    <li><i class="fa-brands fa-google-plus-square"></i></i></li>
                    <li><i class="fa-brands fa-twitter-square"></i></li>
                </ul>
            </div>
            <div class="login-register">
                <div class="login">
                    <form action="login.php" method="post" class="input-group" id="login">
                    <input type="text" placeholder="Enter Username" class="input-type" required name="username">
                    <input type="password" placeholder="Enter password" class="input-type" required name="password">
                    <input type="checkbox" name="remember-pass" value="yes" class="check-box" id="remember-pass" name="cpassword">
                    <label for="remember-pass">Remember Password</label>
                    <button type="submit" class="submit-btn" >Login</button>
                    <!-- <a href="">Forget password?</a> -->
                </form>
                </div>
                <div class="register" >
                    <form action="login1.php" method="post" class="input-group" id="register">
                    <input type="text" placeholder="User Name"class="input-type" required name="password">
                    <input type="email" placeholder="Email ID"class="input-type" required name="email">
                    <input type="password" placeholder="Enter Password" class="input-type" required name="password">
                    <input type="password" placeholder="Confirm password" class="input-type" required name="cpassword">
                    <input type="checkbox" name="terms" value="yes" class="check-box" id="terms">
                    <label for="terms">I agree to the <a href="" class="link-terms"> terms and conditions</a></label><br>
                    <button type="submit" class="submit-btn">Register  </button>
                    </form>
                </div>

            </div>

            
        </div>
    </div>

    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("button");

        function register(){
            x.style.left="-400px";
            y.style.left="50px"
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px"
            z.style.left="0px";
        }

    </script>

</body>
</html>
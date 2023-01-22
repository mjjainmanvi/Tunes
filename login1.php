<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    include 'config.php';
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];

    // $exists=false;
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        if(($password == $cpassword)){
            $sql="INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
         $result= mysqli_query($conn,$sql);
         if ($result){
            $showAlert=true;
         }
    }
    else{
        $showError="Passwords do not match";
    }

    }
    // if($password==$cpassword && $exists==false){
         
    
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
        if($showAlert){
           echo '<div class="success-alert" role="alert" style="position:relative">
            <strong>Success!!</strong>  your account is created
          </div>';
        }
        if($showError){
            echo '<div class="success-alert" role="alert" style="position:relative">
             <strong>Error!!</strong>'. $showError.'
           </div>';
         }

       
          ?>
       
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
                    <button type="submit" class="submit-btn" onclick="index.html">Login</button>
                    <!-- <a href="">Forget password?</a> -->
                </form>
                </div>
                <div class="register" >
                    <form action="login1.php" method="post" class="input-group" id="register" onsubmit="return validateform()" name="myform">
                    <input type="text" placeholder="User Name"class="input-type" req name="username">
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
  function validateform(){  
var name=document.myform.username.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Username can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}
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
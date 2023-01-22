<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunes</title>
    <link rel="stylesheet" href="plans.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="premium_plans.css">
</head>
<body>
    
    <div class="container">
        <div class="bg-image"></div>
        
        <div class="content">
            <nav>
                <div>
                    <div id="nav-left">
                
                        <img src="images/logo.jpg" alt="logo" id="logo">
                        <h3 id="T" class="gradient-color">T</h3>
                        <h3 id="website-name" class="gradient-color">unes</h3>
                    </div>
                    <div id="nav-right">
                        <div id="search-bar">
                           <div>
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            <input type="text" placeholder="Search">
                            <!-- <span>Search</span> -->
                            
                           </div>
                            
                        <span id="mic"><i class="fa-solid fa-microphone"></i></span>
                            
                            
                        </div>
                        <span id="notification"><i class="fa-solid fa-bell"></i></span>
                        
                        <div id="profile">
                            <img src="images/user1.jfif" alt="profile image">
                            <?php 
                                echo $_SESSION['username'];
                            ?>

                        </div>
                       
                    </div>

                </div>
                

                
            </nav>
            <main>
                <div class="nav-menu">
                    <ul class="nav">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="premium_plans.php">Premium</a></li>
                        <!-- <li><a href="#">Contact</a></li> -->
                        <li><a href="my_playlist.php">My Playlists</a></li>
                        <li><a href="my_profile.php">My Profile</a></li>
                    </ul>
                    <div class="social-icons">
                        <ul class="social-icons-list">
                            <li>
                                <i class="fa-brands fa-facebook-square"></i>
                            </li>
                            <li><i class="fa-brands fa-google-plus-square"></i></i></li>
                            <li><i class="fa-brands fa-twitter-square"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="content-section">
                    <button onclick="location.href='payment_form.php'" class="plan-button">BUY A PLAN </button>
                    <button class="plan-button" onclick="location.href='my_plans.php'">My Plans</button>
                    <div class="card-container">
                        <div class="card">
                            <h2 class="plan-name">Mini</h2>
                            <h3>From Rs.7/day</h3>
                            <h3>1 account</h3>
                            <button class="buy" id="mini-buy" onclick="buyAPlan()">Buy</button>

                        </div>
                        <div class="card">
                            <h2 class="plan-name">Individual</h2>
                            <h3>From Rs.119/month</h3>
                            <h3>1 account</h3>
                            <button class="buy" id="individual-buy" onclick="buyAPlan()">Buy</button>
                        </div>
                        <div class="card">
                            <h2 class="plan-name">Couple</h2>
                            <h3>From Rs.149/month</h3>
                            <h3>2 account</h3>
                            <button class="buy" id="couple-buy" onclick="buyAPlan()">Buy</button>
                        </div>
                        <div class="card">
                            <h2 class="plan-name">Family</h2>
                            <h3>From Rs.179/month</h3>
                            <h3>6 account</h3>
                           <button class="buy" id="family-buy" onclick="buyAPlan()" name="family-buy">Buy</button>
                            
                        </div>
                        <div class="card">
                            <h2 class="plan-name">Prime</h2>
                            <h3>From Rs.1299/year</h3>
                            <h3>3 account</h3>
                            <button class="buy" id="prime-buy" onclick="buyAPlan()">Buy</button>
                        </div>
                    </div>


                </div>
            </main>



        </div>
    </div>
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
    <script>
        function buyAPlan(){
              location.href="payment_form.php";              
//    var planName=document.getElementById("plan-name");
//    planName.value="Prime";
        }
        
    </script>



</body>
</html>
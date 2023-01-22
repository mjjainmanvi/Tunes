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
    <link rel="stylesheet" href="my_profile.css">
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
                
                <h5 id="profile-name">Username: &nbsp<?php 
                                echo $_SESSION['username'];
                            ?></h5>
                <div class="feature-option">
                    <span class="feature">Notification</span>
                    <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
                </div>
                <div class="feature-option">
                    <span class="feature">Download audio only</span>
                    <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
                </div>
                <div class="feature-option">
                    <span class="feature">Connect in background</span>
                    <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
                </div>
                <div class="feature-option">
                    <span class="feature">Autoplay on this device</span>
                    <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
                </div>
                <button class="plan-button" onclick="location.href='my_plans.php'">My Plans</button>


                </div>
            </main>



        </div>
    </div>
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
</body>
</html>
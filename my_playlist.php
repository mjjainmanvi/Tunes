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
    <link rel="stylesheet" href="myplaylist.css">
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
                <section class="charts">
                        
                        <div class="charts-list">
                            <div class="chart" onclick="location.href='desi.php'">
                                <div class="chart-image">
                                    <img src="images/party.jpg" alt="party">
                                </div>
                                <h4 class="playlist-chart-name">Desi Party</h4>
                                <div class="chart-details">
                                    <i class="fa-solid fa-circle-play"></i>
                                   
            
                                </div>
            
                            </div>
                            <div class="chart" >
                                <div class="chart-image">
                                    <img src="images/happy.jfif" alt="">
                                </div>
                                <h4 class="playlist-chart-name">Happy Vibes</h4>
                                <div class="chart-details">
                                    <i class="fa-solid fa-circle-play"></i>
                                   
            
                                </div>
            
                            </div>
                            <div class="chart">
                                <div class="chart-image">
                                    <img src="images/friends.jfif" alt="">
                                </div>
                                <h4 class="playlist-chart-name">Yaari Jukebox</h4>
                                <div class="chart-details">
                                    <i class="fa-solid fa-circle-play"></i>
                                   
            
                                </div>
            
                            </div>
                            
            
                            </div>
            
                        </div>
            
                    </section>

                </div>
            </main>



        </div>
    </div>
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
</body>
</html>
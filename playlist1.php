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
    <link rel="stylesheet" href="playlist1.css">

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
                    <div class="playlist-list">
                        <h1 class="playlist-heading">Top 50 India</h1>
                        <div class="song-list">
                            <div class="song-item">
                                
                                    <h5>01</h5>
                                    <div class="song-image">
                                        <img src="images/song4.jpg" alt="">
                    
                                    </div>
                                    <h5 class="song-name">Let Me Love You</h5>
                                    <!-- <i class="fa-regular fa-heart"></i> -->
                                    <i class="fa-regular fa-circle-play songItemPlay" id="0" ></i>
                    
                                
                            </div>
                            <div class="song-item">
                                
                                <h5>02</h5>
                                <div class="song-image">
                                    <img src="images/song4.jpg" alt="">
                
                                </div>
                                <h5 class="song-name">Let Me Love You</h5>
                                <!-- <i class="fa-regular fa-heart"></i> -->
                                <i class="fa-regular fa-circle-play songItemPlay" id="1" ></i>
                
                            
                        </div>

                        <div class="song-item">
                                
                            <h5>03</h5>
                            <div class="song-image">
                                <img src="images/song4.jpg" alt="">
            
                            </div>
                            <h5 class="song-name">Let Me Love You</h5>
                            <!-- <i class="fa-regular fa-heart"></i> -->
                            <i class="fa-regular fa-circle-play songItemPlay" id="2"></i>
            
                        
                    </div>

                    <div class="song-item">
                                
                        <h5>04</h5>
                        <div class="song-image">
                            <img src="images/song4.jpg" alt="">
        
                        </div>
                        <h5 class="song-name">Let Me Love You</h5>
                        <!-- <i class="fa-regular fa-heart"></i> -->
                        <i class="fa-regular fa-circle-play songItemPlay" id="3"></i>
        
                    
                </div>
                <div class="song-item">
                                
                    <h5>05</h5>
                    <div class="song-image">
                        <img src="images/song4.jpg" alt="">
    
                    </div>
                    <h5 class="song-name">Let Me Love You</h5>
                    <!-- <i class="fa-regular fa-heart"></i> -->
                    <i class="fa-regular fa-circle-play songItemPlay" id="4"></i>
    
                
            </div>

            <div class="song-item">
                                
                <h5>06</h5>
                <div class="song-image">
                    <img src="images/song4.jpg" alt="">

                </div>
                <h5 class="song-name">Let Me Love You</h5>
                <!-- <i class="fa-regular fa-heart"></i> -->
                <i class="fa-regular fa-circle-play songItemPlay" id="5"></i>

            
        </div>

        <div class="song-item">
                                
            <h5>07</h5>
            <div class="song-image">
                <img src="images/song4.jpg" alt="">

            </div>
            <h5 class="song-name">Let Me Love You</h5>
            <!-- <i class="fa-regular fa-heart"></i> -->
            <i class="fa-regular fa-circle-play songItemPlay" id="6" ></i>

        
    </div>
    <div class="song-item">
                                
        <h5>08</h5>
        <div class="song-image">
            <img src="images/song4.jpg" alt="">

        </div>
        <h5 class="song-name">Let Me Love You</h5>
        <!-- <i class="fa-regular fa-heart"></i> -->
        <i class="fa-regular fa-circle-play songItemPlay" id="7" ></i>

    
</div>
<div class="song-item">
                                
    <h5>09</h5>
    <div class="song-image">
        <img src="images/song4.jpg" alt="">

    </div>
    <h5 class="song-name">Let Me Love You</h5>
    <!-- <i class="fa-regular fa-heart"></i> -->
    <i class="fa-regular fa-circle-play songItemPlay" id="8"></i>


</div>
<div class="song-item">
                                
    <h5>10</h5>
    <div class="song-image">
        <img src="images/song4.jpg" alt="">

    </div>
    <h5 class="song-name">Let Me Love You</h5>
    <!-- <i class="fa-regular fa-heart"></i> -->
    <i class="fa-regular fa-circle-play songItemPlay" id="9" ></i>


</div>



                        </div>
                        
                    </div>
                    <div class="bottom">
                       
                        <input type="range" name="range" id="myProgressBar" min="0" max="100" value="0">
                        <div class="icons">
                            <i class="fa-solid fa-backward-step" id="previous"></i>                            
                            <i class="fa-regular fa-circle-play" id="masterplay"></i>
                            <i class="fa-solid fa-forward-step" id="next"></i>                     
                        </div>
                        <img src="images/play.gif" width="42px" alt="play" srcset="" class="play-gif" id="gif">
                        <div class="song-info">
                             <span class="song-name-bottom" id="masterSongName"> Pasoori</span>
                        </div>
                    </div>
                        

                    

                </div>
            </main>



        </div>
    </div>
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
    <script src="playlist1.js"></script>
</body>
</html>
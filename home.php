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
    <link rel="stylesheet" href="home.css">
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
                        <!-- ese home nhi khul rha????????????????? -->
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
                    <section class="upper-section">
                        <div class="image-upper-section">
                            <img src="images/mood-booster.jfif" alt="1" onclick="location.href='MoodBooster.php'">
            
                        </div>
                        <div class="image-upper-section">
                            <img src="images/bollywood-night.jfif" alt="2">
            
                        </div>
                        <div class="image-upper-section">
                            <img src="images/badshah.jfif" alt="3">
            
                        </div>
            
                    </section>
                    <section id="latest-release">
                        <h2>Latest Release</h2>
                        <div class="latest-song-list">
                            <div class="latest-song" onclick="playsong()">
                                
                                <div class="latest-song-image">
                                     <img src="images/bb2.jpg" alt="">                          
                                   
                                </div>
                                <div class="song-details">
                                    <h5 class="song-title">Bhool Bhulaiyaa 2-Title Track</h5>
                                    
                                </div>
            
                                <div class="song-menu">
                                   
                                    <i class="fa-regular fa-circle-play songItemPlay" id="0" ></i>
                                </div>
                               
                            </div>
                            <div class="latest-song" onclick="playsong1()">
                                
                                <div class="latest-song-image">
                                     <img src="images/latest song.jpg" alt="">                          
                                   
                                </div>
                                <div class="song-details">
                                    <h5 class="song-title">Let Somebody Go</h5>
                                    
                                </div>
            
                                <div class="song-menu">
                                <i class="fa-regular fa-circle-play songItemPlay" id="0" ></i>
                                    
                                </div>
                               
                            </div>
                            <!-- <div class="latest-song" onclick="playsong2()">
                                
                                <div class="latest-song-image">
                                     <img src="images/latest song.jpg" alt="">                          
                                   
                                </div>
                                <div class="song-details">
                                    <h5 class="song-title">Let Somebody Go</h5>
                                   
                                </div>
            
                                <div class="song-menu">
                                <i class="fa-regular fa-circle-play songItemPlay" id="0" ></i>
                                    
                                </div>
                               
                            </div>
                            <div class="latest-song" onclick="playsong3()">
                                
                                <div class="latest-song-image">
                                     <img src="images/latest song.jpg" alt="">                          
                                   
                                </div>
                                <div class="song-details">
                                    <h5 class="song-title">Let Somebody Go</h5>
                                   
                                </div>
            
                                <div class="song-menu">
                                <i class="fa-regular fa-circle-play songItemPlay" id="0" ></i>
                                    
                                </div>
                               
                            </div> -->
                        </div>
                        
                        
            
                    </section>
                    <section class="popular-artist">
                        <h2>Popular Artist</h2>
                        <div class="artist-list">
                            <div class="artist">
                                <div class="artist-image" onclick="location.href='justin.php'"> <img src="images/artist2.jpg" alt=""></div>
                                <h5>Justin Bieber</h5>
                            </div>
                           
                            <div class="artist">
                                <div class="artist-image"> <img src="images/artist7.jpg" alt=""></div>
                                <h5>Taylor Swift</h5>
                            </div>
                            <div class="artist">
                                <div class="artist-image"> <img src="images/artist5.jpg" alt=""></div>
                                <h5>Bruno Mars</h5>
                            </div>
                            <div class="artist">
                                <div class="artist-image"> <img src="images/artist6.jpg" alt=""></div>
                                <h5>Ariana Grande</h5>
                            </div>
                            <div class="artist">
                                <div class="artist-image"> <img src="images/artist8.jpg" alt=""></div>
                                <h5>Atif Aslam</h5>
                            </div>
                           
                            
                        </div>
            
                    </section>
                    <section class="mood">
                        <div class="mood-list">
                            <div class="moods">
                                <div class="mood-image">
                                    <img src="images/party.jpg" alt="" onclick="location.href='party.php'">
                                </div>
                                
                                <div class="mood-name">
                                    <h3>Party</h3>
                                </div>                    
            
                            </div>
                            <div class="moods">
                                <div class="mood-image">
                                    <img src="images/trip.jpg" alt="">
                                </div>
                                
                                <div class="mood-name">
                                    <h3>Road Trip</h3>
                                </div>                    
            
                            </div>
                            <div class="moods">
                                <div class="mood-image">
                                    <img src="images/friends.jfif" alt="">
                                </div>
                                
                                <div class="mood-name">
                                    <h3>Friends</h3>
                                </div>                    
            
                            </div>
                            
                        </div>
            
                    </section>
                    <section class="charts">
                        <h2>Charts</h2>
                        <div class="charts-list">
                            <div class="chart" onclick="location.href='playlist1.php'">
                                <div class="chart-image">
                                    <img src="images/top50india.jpg" alt="">
                                </div>
                                <h4>Top 50-India</h4>
                                <div class="chart-details">
                                    <i class="fa-solid fa-circle-play"></i>
                                   
            
                                </div>
            
                            </div>
                            <div class="chart" >
                                <div class="chart-image">
                                    <img src="images/top50global.jpg" alt="">
                                </div>
                                <h4>Top 50-India</h4>
                                <div class="chart-details">
                                    <i class="fa-solid fa-circle-play"></i>
                                   
            
                                </div>
            
                            </div>
                            <div class="chart">
                                <div class="chart-image">
                                    <img src="images/hothitsindia.jpg" alt="">
                                </div>
                                <h4>Hot Hits India</h4>
                                <div class="chart-details">
                                    <i class="fa-solid fa-circle-play"></i>
                                   
            
                                </div>
            
                            </div>
                            
            
                            </div>
            
                        </div>
            
                    </section>
                    <div class="bottom-play">
                    <div class="bottom" id="bottom">
                       
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
                    

                </div>
            </main>



        </div>
    </div>
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
    <script>
        let audioElement=new Audio('songs/8.mp3');
            let masterplay=document.getElementById('masterplay');
let myProgressBar=document.getElementById('myProgressBar');
let gif=document.getElementById('gif');
        function playsong(){
            audioElement=new Audio('songs/8.mp3');
            document.getElementById('bottom').style.display="flex";
            audioElement.play();  
            gif.style.opacity=1;
            masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        masterSongName.innerText="Bhool Bhulaiyaa 2-Title Track";       



        }
        function playsong1(){
            audioElement=new Audio('songs/let.mp3');
            document.getElementById('bottom').style.display="flex";
            audioElement.play();  
            gif.style.opacity=1;
            masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        masterSongName.innerText="Let Somebody Go";       



        }
        function playsong2(){
            document.getElementById('bottom').style.display="flex";
            audioElement.play();  
            gif.style.opacity=1;
            masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        masterSongName.innerText="Bhool Bhulaiyaa 2-Title Track";       



        }
        function playsong3(){
            document.getElementById('bottom').style.display="flex";
            audioElement.play();  
            gif.style.opacity=1;
            masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        masterSongName.innerText="Bhool Bhulaiyaa 2-Title Track";       



        }
        masterplay.addEventListener('click',()=>{
     if(audioElement.paused || audioElement.currentTime<=0){
        audioElement.play();
        masterplay.classList.remove('fa-circle-play');
        masterplay.classList.add('fa-circle-pause');
        gif.style.opacity=1;
        //at starting when play then div play/pause handle
        let songId=document.getElementById(songIndex);
        songId.classList.remove('fa-circle-play');
        songId.classList.add('fa-circle-pause');
        

     }
     else{
        audioElement.pause();
        masterplay.classList.remove('fa-circle-pause');
        masterplay.classList.add('fa-circle-play');
        gif.style.opacity=0;
     }
 })
 audioElement.addEventListener('timeupdate',()=>{
        //update seek bar
    progress=parseInt((audioElement.currentTime/audioElement.duration)*100);
        myProgressBar.value=progress;
})
myProgressBar.addEventListener('change',()=>{
    audioElement.currentTime=myProgressBar.value*audioElement.duration/100;
})
audioElement.addEventListener('ended',myended);
function myended(){
    document.getElementById('bottom').style.display="none";
}


    </script>
</body>
</html>
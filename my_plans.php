<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
$plan='';
$registered_date='';
$valid_till='';
$days='';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    include 'config.php';
    $username=$_SESSION['username'];
    if($username!==""){
        $query=mysqli_query($conn,"SELECT plan, 
        registered_date,valid_till FROM plans WHERE username='$username'");
        $row=mysqli_fetch_array($query);
        $num_of_rows=mysqli_num_rows($query);
       

        $plan=$row["plan"];
        $registered_date=$row["registered_date"];
        $valid_till=$row["valid_till"];
        $days=0;
        for ($x = 0; $x <= $num_of_rows; $x++) {
            echo "<script> var div = document.createElement('div');
            div.className = 'plan-item';</script>";
          }
       
       if($plan=="Mini"){
        $days=1;
        
        
  
    }
    elseif($plan=="Couple"){
        $days=30;
        
  
    }
    elseif($plan=="Individual"){
        $days=30;
        
    }
    elseif($plan=="Family"){
        $days=30;
        
  
    }
    elseif($plan=="Prime"){
        $days=365;
        
  
    }
    
        
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
    <link rel="stylesheet" href="plans.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="myplans.css">
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
                    <div class="plan-list">
                        <h4>My Plans</h4>
                        
                        <form action="my_plans.php" method="post">
                        <!-- <input type="text" placeholder="Username" class="input-type" name="username" id="username"> -->
                        <button type="submit" class="submit-btn" >Browse My Plans</button>
                        </form>
                        <div class="plan-item">
                            <div class="plan-details">
                            <div class="">
                            <h3 class="plan-name">Plan Name:<?php
                            echo $plan; ?></h3>
                            
                             <h5 >Valid from: <?php echo $registered_date;?></h5>  
                             <!-- <span id="no_of_accounts">32</span> -->
                            </div>
                            
                             <div class="days-left">
                             <span id="days">&nbsp &nbsp <?php echo $days;?></span> <br> &nbspdays 

                             </div>

                            </div>                         
                            <hr>
                           <span id="valid">
                           valid till:<?php echo $valid_till;?>
                           
                           </span> 


                        </div>
                        <!-- <div class="plan-item">
                            <div class="plan-details">
                            <div>
                            <h3 class="plan-name">Plan Name</h3>
                             <h5>No of Accounts:</h5>
                            </div>
                            
                             <div class="days-left">
                                 23 <br>days 

                             </div>

                            </div>                         
                            <hr>
                            valid till:


                        </div> -->


                    </div>



                </div>
            </main>



        </div>
    </div>
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
    <?php
    echo '<script>
        var x=$plan;
        console.log(x);
                                let days=0;
                                let no_of_accounts=0;
                                let valid=$registered_date
  if(x=="Mini"){
      days=1;
      no_of_accounts=1;

  }
  else if(x=="Couple"){
      days=30;
      no_of_accounts=2;

  }
  else if(x=="Individual"){
      days=30;
      no_of_accounts=1;

  }
  else if(x=="Family"){
      days=30;
      no_of_accounts=6;

  }
  else if(x=="Prime"){
      days=365;
      no_of_accounts=3;

  }
  let valid=$registered_date+days;
  document.getElementById("days").textContent=days;
  document.getElementById("no_of_accounts").textContent=no_of_accounts;
  document.getElementById("valid").textContent=valid;

                            </script>'
                            ?>
</body>
</html>
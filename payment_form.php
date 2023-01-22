<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
   
    include 'config.php';
    $username=$_POST["username"];
    $full_name=$_POST["full_name"];
    $email=$_POST["email"];
    $contact=$_POST["contact_number"];
    $plan_name=$_POST["plan-name"];
    $card_name=$_POST["card_name"];
    $card_number=$_POST["card_number"];
    $exp_month=$_POST["exp_month"];
    $exp_year=$_POST["exp_year"];
    $amount=$_POST["amount"];
    $timeBase = time();
    $days='';
    if($plan_name=="Mini"){
        $days='+1';   
        echo '<script> console.log("hiiiiiii"); </script>';   
        
  
    }
    elseif($plan_name=="Couple"){
        $days='+30';
        
  
    }
    elseif($plan_name=="Individual"){
        $days='+30';
        
    }
    elseif($plan_name=="Family"){
        $days='+30';
        
  
    }
    elseif($plan_name=="Prime"){
        $days='+365';
        
  
    }
    

// $registered_date= date('d/m/Y', $timeBase);
echo $days;  

$newtime = strtotime($days . 'day', $timeBase);

$valid_till=date('Y/m/d', $newtime);
    
        if(($amount>0)){
           
            $sql="INSERT INTO `plans` (`username`, `name`, `email`, `contact`, `plan`, `amount`, `card_number`, `card_name`, `exp_month`, `exp_year`,`valid_till`) VALUES ('$username', '$full_name', '$email', '$contact', '$plan_name', '$amount', '$card_number', '$card_name', '$exp_month', '$exp_year', '$valid_till')";
         $result= mysqli_query($conn,$sql);
         if ($result>0){
              
                   $showAlert=true;
         }
    }
    else{
        
                $showError="Payment Failed";
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
    <link rel="stylesheet" href="form.css">
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
                <?php
                if($showAlert){
                    echo '<script>
                
                    alert("Success!! Payment successful");
                     
                      </script>';
                    //   isko add krne pr ek white line kyu aa frhi top pr???????????????
                }
                 ?>


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
                      
                    
                        <h1>Payment Form</h1>
                        <form action="payment_form.php" method="post">
                            <div class=form>
                            <div class="account-details">
                        <h4 class="heading">Account Details</h4>
                        <input type="text" placeholder="Username" class="input-type" name="username" id="username"><br>
                        <input type="text" placeholder="Full Name" class="input-type" name="full_name"><br>
                        <input type="email" placeholder="Email" class="input-type" name="email"><br>
                        <input type="text" placeholder="Contact Number" class="input-type" name="contact_number"><br>
                        <label for="plan-name" class="label">Choose Your Plan</label>
                          
                        <select name="plan-name" id="plan-name" onchange="price()">
                            <option value="none" selected >Select a Option</option>
                            <option value="Mini">Mini</option>
                            <option value="Couple">Couple</option>
                            <option value="Individual">Individual</option>
                            <option value="Family">Family</option>
                            <option value="Prime">Prime</option>
                        </select>
                        </div>
                        <div class="payment-details">
                            <h4 class="heading">Payment Details</h4>
                            <input type="text" placeholder="Card Owner Name" class="input-type" name="card_name"><br>
                            <input type="text" placeholder="Card Number" class="input-type" name="card_number"><br>
                            
                            
                            <input type="text" placeholder="Exp month" class="input-type-half" name="exp_month">
                            <input type="text" placeholder="Exp year" class="input-type-half" name="exp_year">
                            <input type="text" placeholder="Amount" class="input-type" name="amount" id="amount" ><br>
                        </div>
                    
                            </div>
                            <button type="submit" class="submit-btn">Confirm Payment</button>
                            <button type="button" onclick="location.href='premium_plans.php'" class="submit-btn" >Decline</button>
                            
                        
                        </form>
                       


                </div>
            </main>



        </div>
    </div>
    <script src="https://kit.fontawesome.com/1878af2d89.js" crossorigin="anonymous"></script>
    
    <script>
       
function price() {

   
  var x = document.getElementById("plan-name").value;
  let amount=0;
  if(x=="Mini"){
      amount=7;

  }
  else if(x=="Couple"){
      amount=149;

  }
  else if(x=="Individual"){
      amount=119;

  }
  else if(x=="Family"){
      amount=179;

  }
  else if(x=="Prime"){
      amount=1299;

  }
  document.getElementById("amount").setAttribute("value", amount);
//   document.getElementById("username").setAttribute("value", $_SESSION['username']);
                                 
                            
}
</script>


</body>
</html>
<?php
$server="localhost";
$username="root";
$password="";
$database="tunes";
$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    // echo "success";
//     // ye show kyu nhi ho rha
// }
// else{
    die("Error". mysqli_connect_error());
}
?>


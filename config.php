<?php 
$sunucu="localhost";
$username="root";
$password="";
$database="laravelwithexcel";
$con=mysqli_connect($sunucu,$username,$password,$database);
if(!$con)
{
  die(mysqli_error($con));
}
?>
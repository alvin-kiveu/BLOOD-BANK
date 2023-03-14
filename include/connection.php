<?php
//DATABASE CONNECTION
$db = mysqli_connect('localhost','root','','bloodbank');
if(!$db){
  die("Connection failed: " . mysqli_connect_error());
}
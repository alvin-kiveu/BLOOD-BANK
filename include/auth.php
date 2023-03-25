<?php
//START SESSION
session_start();
//INCLUDE CONNECTION
include('connection.php');

//REGISTER USER

if(isset($_POST['register'])){
  $fullnames = mysqli_real_escape_string($db, $_POST['fullnames']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $bloodtype = mysqli_real_escape_string($db, $_POST['bloodtype']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //CONFRIM PASSWORD
  if($password_1 != $password_2){
    echo "<script>window.location.href='../signup.php?error=Password do not match';</script>";
  }else{
    //CHECK IF USERNAME EXISTS IN members TABLE
    $check_username_result = mysqli_query($db, "SELECT * FROM members WHERE username = '$username'");
    $check_username = mysqli_num_rows($check_username_result);
    if($check_username > 0){
      echo "<script>window.location.href='../signup.php?error=Username already exists';</script>";
    }else{
      //CHECK IF EMAIL EXISTS IN members TABLE
      $check_email_result = mysqli_query($db, "SELECT * FROM members WHERE email = '$email'");
      $check_email = mysqli_num_rows($check_email_result);
      if($check_email > 0){
        echo "<script>window.location.href='../signup.php?error=Email already exists';</script>";
      }else{
        //CHECK IF PHONE NUMBER EXISTS IN members TABLE
        $check_phonenumber_result = mysqli_query($db, "SELECT * FROM members WHERE phone = '$phonenumber'");
        $check_phonenumber = mysqli_num_rows($check_phonenumber_result);
        if($check_phonenumber > 0){
          echo "<script>window.location.href='../signup.php?error=Phone number already exists';</script>";
        }else{
          // CHECK IF ITS INCLUDED IN THE BLOOD TYPES
          $bloodtypes = array('A+','A-','B+','B-','AB+','AB-','O+','O-');
          //CHECK IF $bloodtype IS IN THE ARRAY
          if(in_array($bloodtype, $bloodtypes)){
            //ENCRYPT PASSWORD
            $password = md5($password_1);
            //INSERT INTO members TABLE
            $insert_result = mysqli_query($db, "INSERT INTO members (fullnames, username, phone, email, gender, location, dob, bloodgroup, password) VALUES ('$fullnames', '$username', '$phonenumber', '$email', '$gender', '$location', '$dob', '$bloodtype', '$password')");
            if($insert_result){
              echo "<script>window.location.href='../login.php?success=Account created successfully';</script>";
            }else{
              echo "<script>window.location.href='../signup.php?error=Error creating account';</script>";
            }
          }else{
            echo "<script>window.location.href='../signup.php?error=Invalid blood type';</script>";
          }
        }
      }
    }
  }
}

if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password = md5($password_1);
  //CHECK IF USERNAME EXISTS IN members TABLE
  $check_username_result = mysqli_query($db, "SELECT * FROM members WHERE username = '$username'");
  $check_username = mysqli_num_rows($check_username_result);
  if($check_username > 0) {
    //CHECK IF THE ACCOUNT EXISTS
    $check_account_result = mysqli_query($db, "SELECT * FROM members WHERE username = '$username' AND password = '$password' LIMIT 1");
    $check_account = mysqli_num_rows($check_account_result);
    if($check_account > 0) {
      //CREATE A SESSION
      $_SESSION['username'] = $username;
      echo "<script>window.location.href='../index.php';</script>";
    }else{
      echo "<script>window.location.href='../login.php?error=Incorrect password';</script>";
    }
  }else{
    echo "<script>window.location.href='../login.php?error=Username does not exists';</script>";
  }
}

if(isset($_POST['adminlogin'])){
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password = md5($password_1);
    //CHECK IF USERNAME EXISTS IN members TABLE
    $check_username_result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");
    $check_username = mysqli_num_rows($check_username_result);
    if($check_username > 0) {
      //CHECK IF THE ACCOUNT EXISTS
      $check_account_result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1");
      $check_account = mysqli_num_rows($check_account_result);
      if($check_account > 0) {
        //CREATE A SESSION
        $_SESSION['adminusername'] = $username;
        echo "<script>window.location.href='../admin/home.php';</script>";
      }else{
        echo "<script>window.location.href='../admin/login.php?error=Incorrect password';</script>";
      }
    }else{
      echo "<script>window.location.href='../admin/login.php?error=Username does not exists';</script>";
    }
}


if(isset($_POST['makerequest'])){
  $fullnames = mysqli_real_escape_string($db, $_POST['fullnames']);
  $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $bloodtype = mysqli_real_escape_string($db, $_POST['bloodtype']);
  $info = mysqli_real_escape_string($db, $_POST['info']);
  $userid = mysqli_real_escape_string($db, $_POST['userid']);

  mysqli_query($db, "INSERT INTO  requests (username,fullnames,phonenumber,location,bloodtype,info) VALUES('$userid','$fullnames','$phonenumber','$location','$bloodtype','$info')");
  echo "<script>window.location.href='../request.php?success=Request has being submited successfully';</script>";
}
<?php
session_start();
require "./config.php";
require "./models/db.php";
require "./models/users.php";
$user = new Users;
    if(isset($_POST['submit'])){
       $username= $_POST['username'];
       $password= $_POST['password'];       
        if ($user->checkLogin($username,$password)) {
            $_SESSION['user'] = $username;
            header('location:./index.php'); 
        }
        else {
            header('location:./login.php'); 
        }
    }
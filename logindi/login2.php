<?php
require "../config.php";
require "../admin/models/db.php";
require "../admin/models/user.php";
$user = new User;
    if(isset($_POST['submit'])){
       $username= $_POST['username'];
       $password= $_POST['password'];       
        if ($user->checkLogin($username,$password)) {
            $_SESSION['user'] = $username;
            header('location:../admin/index.php'); 
        }
        else {
            //header('location:../admin/login.php'); 
            header('location:../admin/login.php'); 
        }
    }
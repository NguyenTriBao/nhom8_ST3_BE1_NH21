<?php
require "config.php";
require "models/db.php";
require "./models/users.php";
$user = new users;
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ktra = $_POST['ktra'];
    if($password == $ktra){
        $user->addregister($username, $password);
       header('location:index.php');
    }
}
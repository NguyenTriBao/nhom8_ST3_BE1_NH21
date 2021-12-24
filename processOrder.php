<?php
    session_start();
    require 'config.php';
    require 'models/db.php';
    require 'models/order.php';
    require 'models/product.php';
    if(isset($_POST['submitOrder'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $order = new order();
        $order->insertKH($name,$email,$address,$phone);
        header('location:index.php');
    }
?>
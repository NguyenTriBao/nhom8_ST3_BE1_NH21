<?php
require "config.php";
require "models/db.php";
require "models/customer.php";
$customer = new customer;
if(isset($_GET['id'])){
    $customer->delCustomer($_GET['id']);
}
header('location:customer.php')
?>
<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
$product = new product;
$manu = new manufacture;
$type = new protype;
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $image = $_FILES['image']['name'];
    $product->editProduct($id,$name,$manu_id,$type_id,$price,$image,$desc);
    //xu ly upload:
    $target_dir = "../";
    $target_file = $target_dir . basename($_FILES["image"]["name"]); 
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    //header('location:products.php');
}


<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manu = new manufacture;
if(isset($_GET['manu_id'])){
    $manu->delManu($_GET['manu_id']);
}
header('location:manufactures.php')
?>

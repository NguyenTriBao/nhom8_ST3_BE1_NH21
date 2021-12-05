<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new protype;
if(isset($_GET['type_id'])){
    $protype->delProtype($_GET['type_id']);
}
header('location:protypes.php')
?>

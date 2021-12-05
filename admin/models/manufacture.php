<?php
class Manufacture extends Db{
    public function addManu($name){
        $sql = self::$connection->prepare("
        INSERT INTO `manufactures`(`manu_name`) 
        VALUES (?)");
        $sql->bind_param("s", $name);
        return $sql->execute();
    }
    public function getAllManu(){
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getNewManu(){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures`,`products` WHERE `products`.`manu_id` = `manufactures`.`manu_id` ORDER BY `products`.`id` DESC LIMIT 4");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delManu($manu_id){
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manu_id`=?");
        $sql->bind_param("i",$manu_id);
        return $sql->execute();
    }
}
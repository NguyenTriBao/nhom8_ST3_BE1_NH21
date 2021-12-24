<?php
class Customer extends Db{
    public function getAllcustomer(){
        $sql = self::$connection->prepare("SELECT * FROM khachhang");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function delCustomer($id){
        $sql = self::$connection->prepare("DELETE FROM `khachhang` WHERE  `MaKH`=?");
        $sql->bind_param("i",$id);
        return $sql->execute();
    }
}
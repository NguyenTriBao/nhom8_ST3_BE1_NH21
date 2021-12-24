<?php
class Users extends Db{
public function checkLogin($username,$password){
    $sql = self::$connection->prepare("SELECT * FROM dangnhapuser WHERE `username`=? AND `password`=?");
$passwordd = md5($password);
$sql->bind_param("ss", $username, $passwordd);
$sql->execute();
$items = $sql->get_result()->num_rows;
if($items == 1){
    return true;
}
else
{
    return false;
}
}
public function addregister($username, $password){
    $sql = self::$connection->prepare("
    INSERT INTO `dangnhapuser`(`username`,`password`) 
    VALUES (?,?)");
    var_dump("INSERT INTO `dangnhapuser`(`username`,`password`) 
    VALUES ($username,$password)");
    $passwordd = md5($password);
    $sql->bind_param("ss", $username,$passwordd);
    return $sql->execute();
}
}
?>
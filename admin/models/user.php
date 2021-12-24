<?php

class User extends Db{
public function checkLogin($username,$password){
    $sql = self::$connection->prepare("SELECT * FROM user WHERE `username`=? AND `password`=?");
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
}
?>
<?php
class Product extends Db
{

public function getAllProducts()
{
$sql = self::$connection->prepare("SELECT * FROM products");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items;//return an array
}

public function getProductById($id)
{
$sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
$sql->bind_param("i",$id);
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items;//return an array
}


public function getNewproduct(){
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 10");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;//return an array
}

public function search($keyword){
    $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
    $keyword = "%$keyword%";
    $sql->bind_param("s", $keyword);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;//return an array
}

public function getOldproduct(){
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id ASC LIMIT 10");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;//return an array
}
public function getOldProductByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE `products`.`manu_id` = `manufactures`.`manu_id` && `manufactures`.`manu_id`=? ORDER BY id ASC LIMIT 5");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

public function getNewProductByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE `products`.`manu_id` = `manufactures`.`manu_id` && `manufactures`.`manu_id`=?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
public function getProductByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE `products`.`manu_id` = `manufactures`.`manu_id` && `manufactures`.`manu_id`=?");
        $sql->bind_param("i", $manu_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
public function paginate($url, $total, $perPage)
{
    $totalLinks = ceil($total/$perPage);
 	$link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
      		$link = $link."<li><a href='$url&page=$j'> $j </a></li>";
     	}
     	return $link;
}
    public function get3ProductByManuId($manu_id, $page, $perPage)
    {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE manu_id = ? LIMIT ?, ?");
        $sql->bind_param("iii", $manu_id, $firstLink, $perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function getProductByName($Name)
{
$sql = self::$connection->prepare("SELECT * FROM products WHERE `name` = ?");
$sql->bind_param("s",$Name);
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items;//return an array
}
public function delProduct($id){
    $sql = self::$connection->prepare("DELETE From `products` Where `id`=?");
    $sql->bind_param("i",$id);
    return $sql->execute();
}

}
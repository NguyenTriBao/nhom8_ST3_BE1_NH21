<?php
class Product extends Db
{

public function getAllProducts()
{
$sql = self::$connection->prepare("SELECT * 
FROM products,manufactures,protypes
WHERE products.manu_id = manufactures.manu_id
AND products.type_id = protypes.type_id
ORDER BY id DESC");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items;//return an array
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
    public function addProduct($name,$manu_id,$type_id,$price,$image,$desc){
        $sql = self::$connection->prepare("
        INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `image`, `description`) 
        VALUES (?,?,?,?,?,?)");
        $sql->bind_param("siiiss", $name,$manu_id,$type_id,$price,$image,$desc);
        return $sql->execute();
    }
    public function delProduct($id){
        $sql = self::$connection->prepare("DELETE From `products` Where `id`=?");
        $sql->bind_param("i",$id);
        return $sql->execute();
    }
}
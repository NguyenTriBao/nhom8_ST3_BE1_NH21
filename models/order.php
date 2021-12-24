<?php
    class order extends Db{
        //them du lieu vao table khachhang
        function insertKH($name,$email,$address,$phone){
            $query = self::$connection->prepare("INSERT INTO khachhang VALUES(NULL,?,?,?,?)");
            $query->bind_param("sssi",$name,$email,$address,$phone);
            return $query->execute();
        }

        //them du lieu vao table hoadon(makh,id,tongtien)
        function insertHoaDon($makh,$id,$tongtien){
            $query = self::$connection->prepare("INSERT INTO hoadon VALUES(?,?,?)");
            $query->bind_param("iis",$makh,$id,$tongtien);
            return $query->execute();
        }
        function getMaKHMax(){
            $query = self::$connection->prepare("SELECT MAX(MaKH) as MaKhachHang FROM khachhang");
            $query->execute();
            $item = $query->get_result()->fetch_all(MYSQLI_ASSOC);
            $max = 0;
            foreach($item as $values){
                $max = $values['MaKhachHang'];
            }
            return $max;
        }
    }
?>
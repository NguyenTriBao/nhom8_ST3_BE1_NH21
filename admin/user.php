<?php    
    class User{
        //Bai1
        public $username;
        public $password;
        public $firstName;
        public $lastName;
        //Bai2
        public function __construct($username,$password,$firstName,$lastName){
            $this->username = $username;
            $this->password = password_hash($password,PASSWORD_DEFAULT);
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
    }
    class ktra{
        public $username;
        public $password;
    
        public function __construct($username,$password){
            $this->username = $username;
            $this->password = $password;
        }
        public function ktra($username,$password){
            $hash = password_hash("12345",PASSWORD_DEFAULT);
            if($username == "admin@gmail.com" && password_verify($password,$hash)){
                return true;
            }
            else {
                return false;
            }
        }
    }
    ?>
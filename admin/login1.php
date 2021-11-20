<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "user.php";
    ?>
    <form action="" method="post">
    Username : <input type="text" name="username" require><br><br>
    Password : <input type="password"name="password" require><br><br>
    <input type="submit"name="submit"value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
       $username= $_POST['username'];
       $password= $_POST['password'];
        $user = new ktra($username,$password);
        if ($user->ktra($username,$password) == true) {
            echo "Logged in successfully";
        }
        else {
            echo "Sai tk và mk";
        }
    }
    ?>
</body>
</html>
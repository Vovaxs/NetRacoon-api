<?php
/**
 * Created by PhpStorm.
 * Author: Zirka
 * Date: 02.09.2015
 * Time: 22:36
 */
use htdocs\NetRacoon\Entity\StandartUser;
use htdocs\NetRacoon\logic\Register;

echo '

<html>
<head>
</head>
<body>
<div>
  <form name = "form1" action = "./index.php" method = "post">
    Ваше імя: <input type = "text" name = "firstname" value = "">
    <br>
    Ваш пароль: <input type = "password" name = "pass" value = "">
    <br>
    <textarea name = "message" rows = "10" cols = "15"></textarea>
    <br>
    Виберіть аватарку:
    <input type = "file" name = "path">
    <br>
    <input type = "submit" name = "start" value = "Регістрація">
    <br>
  </form>
</div>
</body>
</html>

' ;

if(isset($_POST["start"])){
    if($_POST["firstname"]){
        if($_POST["pass"]){
            include "UseCase/User.php";
            include "Entity/StandartUser.php";

            $user = new StandartUser(
                $_POST["firstname"],
                $_POST["pass"],
                $_POST["message"],
                empty($_POST["path"]) ? "" : $_POST["path"]
            );

            include "logic/Register.php";

            (new Register())->registerUser($user);

        }else{
            echo "Введіть ваш пароль";
        }
    }else{
       echo "Введіть ваше Ім'я";
    }
}

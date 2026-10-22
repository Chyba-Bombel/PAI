<?php
    $name = "username";
    $value = "Olek";
    //setcookie(name,value,expire,path,domain,secure,httponly);
    //wymaganie: name;
    //reszta opcjonalne
    setcookie($name, $value, time() + (86400*30), "/");

?>  
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE[$name])){
            echo "Ciacho ".$name." jest ustawione.";
            echo "Wartość: ".$_COOKIE[$name];
        } else{
            echo "Ciacho ". $name . " nie jest ustawione!";
        }
        //modyfikacja
        setcookie($name, "Słupinka", time() -3600);
        //usuwanie
        setcookie("username", "",time()-3600);
        if(count($_COOKIE) > 0){
            echo "Ciasteczka włączone";
        } else {
            echo "Ciasteczka wyłączone";
        }
    ?>
</body>
</html>
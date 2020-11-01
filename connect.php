<?php

try{

    $db= new PDO("mysql:host=localhost;dbname=shipping_automation;charset-utf8",'root','sifre222');
    // echo "Success";

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
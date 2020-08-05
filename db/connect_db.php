<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ipos','root','Prezident1129');
    //echo 'Connection Successfull';
}catch(PDOException $error){
    echo $error->getmessage();
}


?>
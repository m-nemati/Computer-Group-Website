<?php

$serverName="localhost";
$dataBaseName="computer_tvu";
$userName="root";
$password="";

$dsn="mysql:host=$serverName; dbname=$dataBaseName; charset=utf8";

try{
    $strConn=new PDO($dsn, $userName, $password);
    $strConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOEXCEPTION $e){

    echo("خطا در ارتباط با پایگاه داده!");
}


?>
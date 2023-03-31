<?php 


$dsn ="mysql:host=localhost;dbname=login";
$user="root";
$password="";
$option=array(
PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES UTF8" // FOR arabic
);

try {    //cotact pdo database
  $con =new PDO($dsn,$user,$password,$option);
  $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  include "sec.php";
}
catch (PDOException $e){
    echo $e ->getMessage();
}




?>
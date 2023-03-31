<?php 
include "../contact.php";


$username = req("username");
$email    = req("email");
$password = req("password");

$stmt =$con->prepare("
INSERT INTO `info`(`username`, `email`, `mobil`, `passeword`)
 VALUES ('?','?','?','?')");
 $stmt->execute(array($username,$email,$password));

$count=$stmt->rowCount();

if ($count >0){
    echo json_encode(array("result"=>"good"));
}else{
    echo json_encode(array("result"=>"faild"));
}


?>
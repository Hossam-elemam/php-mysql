<?php

include "conniction.php" ;

$feedback = $_POST['feedback'] ;
$UserId = $_POST['UserId'];

$sql = "INSERT INTO `feedbacks`( `feedback`, `UserId`)
VALUES ( :feedback ,:UserId )" ;

$stmt = $con->prepare($sql) ;
$stmt->execute(array(
":feedback" => $feedback ,
":UserId" => $UserId
));

$count = $stmt->rowCount() ;

if ($count > 0) {
echo json_encode(array("status" => "success add")) ;
}
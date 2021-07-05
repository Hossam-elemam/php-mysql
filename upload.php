<?php
include "conniction.php" ;


$imagename = $_POST['imagename'];
$image = base64_decode($_POST['image64']);

$UserId = $_POST['UserId'];

//$sql = "INSERT INTO `analysis_imgs`( `image`, `UserId`)
//VALUES ( :image ,:UserId )" ;

//$sql = ("UPDATE `analysis_imgs` SET `image`='$image'  WHERE `UserId`='$UserId'");
$sql = ("UPDATE users SET image='$image'  WHERE UserId='$UserId'");

$stmt = $con->prepare($sql) ;
$stmt->execute(array(
":image" => $image ,
":UserId" => $UserId ,
":image" => $imagename
));

$count = $stmt->rowCount() ;

if ($count > 0) {
file_put_contents("uploads\\" . $imagename, $image);
echo json_encode(array("status" => "success add")) ;
}

?>
<?php
$db = mysqli_connect("localhost", "root", "", "medical");
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$UserId = $_POST['UserId'];
$b64=$_POST['image64'];
$image = base64_decode($b64);
if($image==NULL){
die('Base64 value is not a valid image');
}
//`$UserId`//`$image`
 else {
    $sql = ("UPDATE users SET image='$image'  WHERE UserId='$UserId'");
    if(mysqli_query($db, $sql)){
    echo "image added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}

// Obtain the original content (usually binary data)

?>
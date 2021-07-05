
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title></title>
</head>
<body> 
   <!--<button type="button" id="button">Click Me!</button>-->
</body>
</html>
<script type="text/javascript">
    //$("#button").click(function(){

  $.post("http://127.0.0.1:5000/image",
  {
    user_id: "14"
    },
  function(data, status){
    //alert("Data: " + data + "\nStatus: " + status);
    //var  x=JSON.parse(data);
    console.log(data)
    alert("data:" + data);
  });
//});
</script>
<?php
header('Access-Control-Allow-Origin: *');

$db = mysqli_connect("localhost", "root", "", "medical");
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$imagename = $_POST['imagename'];
$image =$_POST['image64'];
$UserId = $_POST['UserId'];
$sql = ("UPDATE users SET image='$image'  WHERE UserId=$UserId");
$id = '14';
mysqli_query($db, $sql);
?>


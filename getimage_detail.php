<?PHP
include "conniction.php" ;

$sql = "SELECT * FROM analysis_imgs";
$stmt = $con->prepare($sql) ; 
$stmt-> execute();
$details = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($details);

?>
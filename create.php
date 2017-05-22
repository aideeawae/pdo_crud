<?php 
require_once("libs/Db.php"); 
$objDb = new Db();
$db = $objDb->database;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>

<?php
$query = $db->prepare("INSERT INTO member (id, firstname, lastname, status) VALUES (NULL, :firstname, :lastname, :status);");

$result = $query->execute([
  "firstname" => "Aidee",
  "lastname" => "awae",
  "status" => 1,]);
if($result){
  echo "Successfully";
}else{
  echo "Save fail!";
}
?>

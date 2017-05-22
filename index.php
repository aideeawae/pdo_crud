<?php 
require_once("libs/Db.php"); 
$objDb = new Db();
$db = $objDb->database;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PDO</title>
</head>
<body>

<?php
echo "hello pdo";
?>

</body>
</html>
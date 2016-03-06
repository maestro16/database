<?php
$dbloc ="mysql.hostinger.ru";
$dbuser ="u516131903_ilia";
$dbpass ="password";
if ($_SERVER["SERVER_ADDR"] == "127.0.0.1") {
    $dbloc ="localhost";
    $dbuser ="root";
    $dbpass ="";
};
echo mb_internal_encoding();

//$conn = @mysql_connect($dbloc, $dbuser, $dbpass);

$dsn = "mysql:host={$dbloc}";
$conn = new PDO($dsn, $dbuser, $dbpass);
$conn-> exec("SET CHARACTER SET utf8");

$id = $_POST['id']; 


$sql = "DELETE FROM `u516131903_proj`.`Project` WHERE `id` = $id";
$result = $conn->prepare($sql); 
$result->bindValue(":id", $id); 
echo $result->execute(); 

$conn->lastInsertId();

?>

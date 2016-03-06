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


$FIO = $_POST['FIO'];
$Vuz = $_POST['Vuz'];
$Course = $_POST['Course'];
$Phone = $_POST['Phone'];

//$sqlstring = "INSERT INTO `Project`.`u516131903_proj` (id, FIO, Vuz, Course, Phone) VALUES(:id, :FIO, :Vuz, :Course, :Phone)";
$sql = "INSERT INTO `u516131903_proj`.`Project` (`FIO`, `Vuz`, `Course`, `Phone`) VALUES (:FIO, :Vuz, :Course, :Phone)";
$result = $conn->prepare($sql);
$result->bindValue(":FIO", $FIO);
$result->bindValue(":Vuz", $Vuz);
$result->bindValue(":Course", $Course);
$result->bindValue(":Phone", $Phone);
$message = 'Data saved: ' . $result->execute();
$conn->lastInsertId();
?>
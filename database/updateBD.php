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
$FIO = $_POST['FIO'];
$Vuz = $_POST['Vuz'];
$Course = $_POST['Course'];
$Phone = $_POST['Phone'];

$sql = "UPDATE `u516131903_proj`.`Project` SET `FIO` = '{$FIO}', `Vuz` = '{$Vuz}', `Course` = {$Course}, `Phone` = {$Phone} WHERE `Project`.`id`={$id}";
$result = $conn->prepare($sql);
$result->execute();
?>

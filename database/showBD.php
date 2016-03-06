<?php
// connection DataBase
$dbloc ="mysql.hostinger.ru";
$dbuser ="u516131903_ilia";
$dbpass ="password";
if ($_SERVER["SERVER_ADDR"] == "127.0.0.1") {
    $dbloc ="localhost";
    $dbuser ="root";
    $dbpass ="";
};

$dsn = "mysql:host={$dbloc}";
$conn = new PDO($dsn, $dbuser, $dbpass);
$conn-> exec("SET CHARACTER SET utf8");
// end connection
$sql = "SELECT * FROM `u516131903_proj`.`Project`";
$result = $conn -> query($sql);
print "<table border='3'><tr><td>ID</td><td>ФИО</td><td>ВУЗ</td><td>Курс</td><td>Телефон<td></tr>";
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    print "<tr>";
    echo "<td> $row[id] </td>";
    echo "<td> $row[FIO] </td>";
    echo "<td> $row[Vuz] </td>";
    echo "<td> $row[Course] </td>";
    echo "<td> $row[Phone] </td>";
    print "</tr>";
}
print "</table>";
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
</html>

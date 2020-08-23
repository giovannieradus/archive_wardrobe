<?php
// database logingegevens
$db_hostname = '127.0.0.1';
$db_username = '85214';
$db_password = 'Yeezy350';
$db_database = '85214_back12';

$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database );

if (!$mysqli) {
echo "FOUT: geen connectie naar database. <br>";
echo "Errno: " . mysqli_connect_errno() . "<br/>";
echo "Error: " . mysqli_connect_error() . "<br/>";
exit;
}
?>
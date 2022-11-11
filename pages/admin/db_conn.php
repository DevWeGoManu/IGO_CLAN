<?php

$sname = "localhost";
$uname = "Manu";
$password = "Manu123@@";
$db_name = "igo_clan";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}



?>
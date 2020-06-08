<?php

$mysqli_connection = new MySQLi('mysql-a', 'app', 'password2', 'app');
if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}

?>
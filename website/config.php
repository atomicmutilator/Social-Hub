<?php
//error_reporting(0);
//Website attributes

$web_name = "Social Hub";

echo '<head><title>' . $web_name . '</title></head>';



//Mysql connect
$db = mysqli_connect("localhost", "root", "", "socialhub");
if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
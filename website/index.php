
<?php session_start(); 
include("config.php");
if(isset($_SESSION['uid'])) {

echo 'Welcome! ';
echo '<a href="logout.php">Logout</a>  <br><br>';
} else {
include("login.php");

}

?>
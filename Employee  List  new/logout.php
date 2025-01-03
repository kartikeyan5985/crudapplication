<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "employee";
?>

<?php
session_start();
session_destroy();
header("Location: index.php");

?>

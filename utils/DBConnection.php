
<?php
$username = "root";
$password = "";
$dbName = "BCA";
$host = "localhost";
$conn = mysqli_connect($host,$username,$password,$dbName);

if (!$conn) {
    die("Cannot Coonect to Database".$dbName);
}
?>


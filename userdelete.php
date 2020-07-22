<?php
include "utils/DBConnection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from users where id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location:index.php");
    } else {
        echo mysqli_connect_error();
    }
}
else{
    header("location:index.php");

}

?>
<html>
<title> My Page</title>
</head>
<body>
<form METHOD="post">

    <br>
    ID:
    <input type="text" name="id">
    <br>
    <br>

    Name:
    <input type="text" name="name">
    <br>
    <br>
    Address:
    <input type="text" name="address">
    <br>
    <br>
    Contact:
    <input type="text" name="contact">
    <br>
    <br>
    <input type="submit" value="submit" name="submit">

</form>
</body>
</html>

<?php
include "utils/DBConnection.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $sql = "INSERT into users values ($id,'$name','$address','$contact')";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("location:nand.php");
    } else {
        echo mysqli_connect_error();

    }
    echo $sql;
}
?>


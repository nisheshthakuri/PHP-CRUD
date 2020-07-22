<?php

include "utils/DBConnection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select *from users where id=$id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $id = $data['id'];
    $name = $data['name'];
    $contact = $data['contact'];
    $address = $data['address'];
} else {
    header("location:index.php");

}

?>

<form METHOD="post">

    <br>

    ID:
    <input type="text" name="id" value="<?php echo $id; ?>">

    <br>
    <br>

    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br>
    <br>
    Address:
    <input type="text" name="address" value="<?php echo $address; ?>">
    <br>
    <br>
    Contact:
    <input type="text" name="contact"value="<?php echo $contact; ?>">
    <br>
    <br>
    <input type="submit" value="submit" name="submit">

</form>
<?php
if (isset($_POST['submit'])){



    $name=$_POST['name'];
    $address =$_POST['address'];
    $contact=$_POST['contact'];

    $sql="UPDATE users set name = '$name', address='$address',contact='$contact' where id=$id";

    $result=mysqli_query($conn,$sql);
    if ($result)
    {
        header("Location:index.php");

    }
else{
    header("Location:index.php");

}
}







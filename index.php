<button> <a href="user.php">ADD NEW DATA </a> </button>
<?php

include "utils/DBConnection.php";

$sql = "select * from users";
$result = mysqli_query($conn, $sql);
echo "<table border='1'><tr>
    <th>id</th>
    <th>Name</th>
    <th>Address</th>
    <th>Contact</th>
    <th>Action</th>
</tr>";
while ($data = mysqli_fetch_array($result)) {
    $id=$data['id'];
    $name=$data['name'];
    $address=$data['address'];
    $contact=$data['contact'];
    echo "<tr>   
        <td>$id</td>
<td>$name</td>
<td>$address</td>
<td>$contact</td>
<td>
<a href='useredit.php?id=$id'> Edit</a>
<a href='userdelete.php?id=$id' onclick='return confirm(\"Are you sure?\");'> Delete</a>
</td>
           </tr>";



}

echo "</table>"
?>


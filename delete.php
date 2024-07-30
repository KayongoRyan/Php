<?php
include 'connect.php';

if (isset($_GET['deleteid'])) {
    $id =intval($_GET ['deleteid']); // Ensure the ID is an integer

    $sql = "delete from `crud` where id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
       header('location:display.php');
    } else {
        die(mysqli_error($conn)); // Output any SQL error
    }
}
?>

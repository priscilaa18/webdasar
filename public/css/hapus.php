<?php
    // include database connection file
    include_once("conn.php");
 
// Get id from URL to delete that user
    $id = $_GET['delete'];
 
// Delete user row from table based on given id
    $result = mysqli_query($conn, "DELETE FROM data_diri WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
    header("./index.php");
?>
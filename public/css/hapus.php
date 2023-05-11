<?php
    // include database connection file
    include_once("./conn.php");

 if(isset($_GET['id'])){
// Get id from URL to delete that user
    $id = $_GET['id'];
 
// Delete user row from table based on given id
    $result = mysqli_query($conn, "DELETE FROM data_diri WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
    header("./index.php");
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama CRUD</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
</head>
<body>
<div class="col-lg-4 col-xxl-4 my-5 mx-auto">
<div class="alert alert-success" role="alert">
            <i class="bi bi-info-circle"></i> Data Berhasil Dihapus. <a class="btn btn-link" href="./">Halaman Utama</a>
        </div>
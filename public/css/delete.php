<?php 

if(isset($_GET['delete'])){
    
    // ambil id dari get
    $id = $_GET['delete'];

    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "Delete data berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

?>
<?php 

if(isset($_GET['id'])){
    // ambil id dari get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect($host, $user, $pass, $base);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo 'koneksi berhasil';
    }

    $sql = "DELETE FROM mahasiswa WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "Delete data berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
}

?>
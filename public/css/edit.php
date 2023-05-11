<?php
include_once("./conn.php");

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect($host, $user, $pass, $base);


    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";

    if ($result = mysqli_query($con, $sql)) {
        echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $nim = $user_data['nim'];
            $nama = $user_data['nama'];
            $id_jurusan = $user_data['id_jurusan'];
            $tpt_lahir = $user_data['tempat_lahir'];
            $tgl_lahir = $user_data['tanggal_lahir'];
            $gender = $user_data['jenis_kelamin'];
            $alamat = $user_data['alamat'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
}

if (isset($_POST['submit'])){
    $id = $_GET['submit'];
    //var_dump($_POST);
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect($host, $user, $pass, $base);


    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo 'koneksi berhasil';
    }

    $sql = "UPDATE mahasiswa SET nim='$nim',nama='$nama',tempat_lahir='$tpt_lahir',
    tanggal_lahir='$tgl_lahir',alamat='$alamat' WHERE id='$id' ";

    if (mysqli_query($con, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
      
    mysqli_close($con);
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
    <h1 class="text-center">UPDATE DATA DIRI</h1>
<?php
    if(isset($_GET['id'])): ?>
    <form action="" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $nim; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        Jenis Kelamin: <input type="text" name="gender" value="<?php echo $gender; ?>"><br>
        Tempat Lahir: <input type="text" name="tpt_lahir" value="<?php echo $tpt_lahir; ?>"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>
    <?php endif; ?>

        <div class="alert alert-success" role="alert">
            <i class="bi bi-info-circle"></i> Data Berhasil Diubah. <a class="btn btn-link" href="./">Halaman Utama</a>
        </div>
    
</body>
</html>
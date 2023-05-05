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
    <h1 class="text-center">DELETE DATA DIRI</h1>
    <?php

    if(isset($_GET['delete'])) {

        $id = $_GET['delete'];

        $sql = "DELETE FROM mahasiswa WHERE id='$id' ";
            
        if (mysqli_query($conn, $sql)) {
            echo "Delete data berhasil";
        } else {
            echo "Eror: " . $sql . "<br>" . mysql_error($con);
        }
    }

    ?>
        <div class="alert alert-success" role="alert">
            <i class="bi bi-info-circle"></i> Data Berhasil Dihapus. <a class="btn btn-link" href="./">Halaman Utama</a>
        </div>
    <?php
        }

    }
    </div>
    <script src="./js/bootsrap.min.js"></script>
    <script src="./js/bootsrap.bundle.min.js"></script>
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php INCLUDE('../navbar.php');
?>
<div class="container">
    <form action="proses.php" method="POST" enctype="multipart/form-data">
    <div class="row mt-5">
        <div class="col-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Data Karyawan</h3> 
            </div>
            <div class="card-body">
            <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
           <input type="text" name="nama_karyawan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Jabatan/label>
           <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
           <input type="text" name="namajurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-info btn-sm">submit</button>
        <a href="index.php" class="btn btn-warning btn-sm">Back</a>
      </div>
     </div>
    </div>
</div>

<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
<script src="../js/all.js"></script>
</body>
</html>
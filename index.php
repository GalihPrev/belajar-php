<!DOCTYPE html>
<html lang="en">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .hm-gradient {
        background: radial-gradient(circle at 18.7% 37.8%, rgb(250, 250, 250) 0%, rgb(225, 234, 238) 90%);
    }
</style>

<body class="hm-gradient">
    <!--MDB Tables-->
    <div class="container mt-4 ">
        <div class="card">
            <div class="card-body">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-10">
                        <h2 class="py-3 text-center font-bold font-up blue-text">Jurusan</h2>
                    </div>
                    <!-- Grid column -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <button type="button" class="btn btn-primary" onclick="window.location='tambahData_jurusan.php'"> Tambah Data </button>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID Jurusan</th>
                                        <th>Kode Jurusan</th>
                                        <th>Nama Jurusan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                    $sql = "SELECT * FROM jurusan";
                                    $query = mysqli_query($koneksi, $sql);
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['id_jurusan']; ?></td>
                                            <td><?php echo $data['kode_jurusan']; ?></td>
                                            <td><?php echo $data['nama_jurusan']; ?></td>
                                            <td>
                                                <a href="editData_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>" class="btn btn-warning">Edit</a>
                                                <a href="delete_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-10">
                    <h2 class="py-3 text-center font-bold font-up blue-text">Mahasiswa</h2>
                </div>
                <!-- Grid column -->
            </div>
            <div class="row">
                <div class="col-md-15">
                    <div class="table-responsive">
                        <button type="button" class="btn btn-primary" onclick="window.location='tambahData_mahasiswa.php'"> Tambah Data </button>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID Mahasiswa</th>
                                    <th>Nim Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Alamat Mahasiswa</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kode Jurusan</th>
                                    <th>ID Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "koneksi.php";
                                $sql = "SELECT * FROM mahasiswa inner join jurusan on mahasiswa.id_jurusan=jurusan.id_jurusan";
                                $query = mysqli_query($koneksi, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['id_mahasiswa']; ?></td>
                                        <td><?php echo $data['nim']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['tempat_lahir']; ?></td>
                                        <td><?php echo $data['tanggal_lahir']; ?></td>
                                        <td><?php echo $data['jenis_kelamin']; ?></td>
                                        <td><?php echo $data['kode_jurusan']; ?></td>
                                        <td><?php echo $data['id_jurusan']; ?></td>
                                        <td>
                                            <!-- <a href="tambahData_mahasiswa.php?id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>" class="btn btn-primary">Tambah</a> -->
                                            <a href="editData_mahasiswa.php?id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>" class="btn btn-warning">Edit</a>
                                            <a href="delete_mahasiswa.php?id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
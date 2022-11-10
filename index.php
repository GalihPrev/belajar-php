<!-- <?php



        // $nama = 'Galih Previand';
        // $umur = 20;

        // echo '<H1>Latihan PHP dasar</H1> ';

        // //contoh 1
        // echo ' Nama saya adalah ', $nama, ' dan umur saya adalah ', $umur, ' tahun ';

        // echo "<br> nama saya $nama dan umur saya $umur tahun <br> ";

        // $namaAdik = 'Rizky';
        // $umurAdik = 18;
        // $selisiUmur = $umur - $umurAdik;

        // echo '<br> Nama adik saya adalah ', $namaAdik, ' dan umur adik saya adalah ', $umurAdik, ' tahun';

        // //contoh 3
        // echo "<br> Nama adik saya adalah $namaAdik dan umur adik saya adalah $umurAdik tahun <br>";

        // echo '<br> selisih umur saya dan adik saya adalah ', $umur - $umurAdik, ' tahun';

        //contoh 4
        // echo "<br> selisih umur saya dan adik saya adalah $selisiUmur tahun <br>";

        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
table, th, td {
border:1px solid black;
}
</style>

<body>
    <h1>Data Fakultas</h1>

    <table border="1">
        <h2>Data Mahasiswa </h2>
        <tr>
            <!-- <th>No</th> -->
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Jurusan</th>
        </tr>



        <?php
        include 'koneksi.php';


        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
        while ($hasil = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <!-- <td><?php echo $no++; ?></td> -->
                <td><?php echo $hasil['nim']; ?></td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['alamat']; ?></td>
                <td><?php echo $hasil['tanggal_lahir']; ?></td>
                <td><?php echo $hasil['jenis_kelamin']; ?></td>
                <td><?php echo $hasil['kode_jurusan']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>


    <table border="1">
        <h2>Data Jurusan </h2>
        <tr>
            <!-- <th>no</th> -->
            <th>Id Jurusan</th>
            <th>kode Jurusan</th>
            <th>Nama Jurusan</th>
        </tr>

        <?php
        include 'koneksi.php';


        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM jurusan");
        while ($hasil = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <!-- <td><?php echo $no++; ?></td> -->
                <td><?php echo $hasil['id_jurusan']; ?></td>
                <td><?php echo $hasil['kode_jurusan']; ?></td>
                <td><?php echo $hasil['nama_jurusan']; ?></td>

            </tr>
        <?php
        }
        ?>

    </table>

    <table border="1">
        <h2>Data Jurusan </h2>
        <tr>
            <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>alamat</th>
            <th>tanggal lahir</th>
            <th>jenis kelamin</th>
            <th>kode Jurusan</th>
            <th>Nama Jurusan</th>

        </tr>

        <?php
        include 'koneksi.php';


        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa INNER JOIN jurusan ON mahasiswa.kode_jurusan = jurusan.kode_jurusan");
        while ($hasil = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $hasil['nim']; ?></td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['alamat']; ?></td>
                <td><?php echo $hasil['tanggal_lahir']; ?></td>
                <td><?php echo $hasil['jenis_kelamin']; ?></td>
                <td><?php echo $hasil['kode_jurusan']; ?></td>
                <td><?php echo $hasil['nama_jurusan']; ?></td>

            </tr>
        <?php
        }
        ?>

    </table>
</body>

</html>
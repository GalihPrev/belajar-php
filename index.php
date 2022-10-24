<?php



$nama = 'Galih Previand';
$umur = 20;

echo '<H1>Latihan PHP dasar</H1> ';

//contoh 1
echo ' Nama saya adalah ', $nama, ' dan umur saya adalah ', $umur, ' tahun ';

echo "<br> nama saya $nama dan umur saya $umur tahun <br> ";

$namaAdik = 'Rizky';
$umurAdik = 18;
$selisiUmur = $umur - $umurAdik;

echo '<br> Nama adik saya adalah ', $namaAdik, ' dan umur adik saya adalah ', $umurAdik, ' tahun';

//contoh 3
echo "<br> Nama adik saya adalah $namaAdik dan umur adik saya adalah $umurAdik tahun <br>";

echo '<br> selisih umur saya dan adik saya adalah ', $umur - $umurAdik, ' tahun';

//contoh 4
echo "<br> selisih umur saya dan adik saya adalah $selisiUmur tahun <br>";

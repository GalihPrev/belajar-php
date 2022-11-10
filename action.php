<?php
if (isset($_GET['p']) && $_GET['p'] == 'tampil') {
    echo $_POST['nama'];
    echo "<br/>";
    echo $_POST['alamat'];
    echo "<br/>";
    echo $_POST['password'];
} else if (isset($_GET['p']) == 'pesan') {
    echo "Hallo".$_GET['nama'];
    echo "<br/>";
    echo "Alamar rumah ".$_GET['alamat'];
    echo "<br/>";
    echo "Password ".$_GET['password'];
    
}else{
    echo "Anda tidak berhak mengakses halaman ini";
}

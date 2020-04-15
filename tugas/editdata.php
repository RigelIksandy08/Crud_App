<?php

include('koneksi.php');

$pk = $_POST['no'];

$kodep = $_POST['kode_produk'];
$namap = $_POST['nama_produk'];
$hargap = $_POST['harga'];
$satuanp = $_POST['satuan'];
$kategorip = $_POST['kategori'];
$urlp = $_POST['url_picture'];
$stokp = $_POST['stok'];

$hasil =$con-> query("UPDATE `datap` SET `kode_produk` = '$kodep', `nama_produk` = '$namap', `harga` = '$hargap', `satuan` = '$satuanp', `kategori` = '$kategorip', `url_picture` = '$urlp', `stok` = '$stokp' WHERE `datap`.`no` = $pk");

if ($hasil == TRUE){
    echo "
            <script>
                alert('Berhasil Mengedit Data');
                window.location = 'editform.php';
            </script>
        ";
}else{
    echo "
        <script>
            alert('Gagal Mengedit Data');
            window.location = 'editform.php';
        </script>
    ";
}
?>
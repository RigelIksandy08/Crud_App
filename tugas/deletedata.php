<?php
    include ('koneksi.php');

    $key = $_GET['key'];
    $hasil = $con->query("DELETE FROM `dataP` WHERE `no`=$key");

    if ($hasil == TRUE) {
        echo " 
            <script>
                alert('Berhasil Menghapus Data');
                window.location = 'form_input.php';
            </script>
            ";
    } else {
        echo "
            <script>
                alert('Gagal Menghapus Data');
                window.location = 'form_input.php';
            </script>
        ";
    }
?>
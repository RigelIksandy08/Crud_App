<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    th, td, h1{
        text-align: center;
    }
</style>
</head>
<body>
    <h1>INVOICE</h1>
    <table class="table table-bordered" align="center" style="width:    75%; margin-top:    2%;">
        <thead class="thead-dark">
            <tr>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Satuan Produk</th>
                <th>Kategori Produk</th>
                <th>Jumlah Produk</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $np = $_POST["nama_produk"];
                $hp = $_POST["harga_produk"];
                $sp = $_POST["satuan"];
                $kp = $_POST["kategori"];
                $jp = $_POST["jumlah"];
                $ttl = $_POST["harga_produk"] * $_POST['jumlah'];

                echo "<td>".$np."</td>";
                echo "<td>".$hp."</td>";
                echo "<td>".$sp."</td>";
                echo "<td>".$kp."</td>";
                echo "<td>".$jp."</td>"; 
                echo "<td>".$ttl."</td>";
            ?>
        </tbody>
    </table>
</body>
</html>
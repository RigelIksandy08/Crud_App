<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 

        include('koneksi.php');

        $key = $_GET['key'];
        $hasil = $con->query("SELECT * FROM `dataP` WHERE `no` = $key");

        foreach($hasil as $data){
            
    ?>

        <form action="editdata.php" method="post" class="form" style="border : 1px solid black; width : 40%; margin : 1% 30% 2% 30%">
            <h2 style="font-size: 28px; text-align: center; margin: 10px 0px">EDIT PRODUK</h2>
            <table>
                <tr>
                    <td style="font-size: 20px; width: 30%">
                        <input type="hidden" class="form-control" name="no" value="<?php echo $data['no']; ?>">Kode Produk
                    </td>
                    <td>
                        <input type="text" class="form-control" name="kode_produk" value="<?php echo $data['kode_produk']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td style="font-size : 20px; width : 30p%">Nama Produk</td>
                    <td>
                        <input type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td style="font-size : 20px; width : 30p%">Harga</td>
                    <td>
                        <input type="text" class="form-control" name="harga" value="<?php echo $data['harga']; ?>" required>
                    </td>
                </tr>
                <tr>
                <td style="font-size: 20px; width: 30%">Satuan</td>
                <td>
                    <select name="satuan" class="form-control">
                        <option value="null">Pilih Satuan</option>
                        <option <?php if($data['satuan'] == "Gelas"){ echo "selected=selected"; } ?> value="Gelas">Gelas</option>
                        <option <?php if($data['satuan'] == "Piring"){ echo "selected=selected"; } ?> value="Piring">Piring</option>
                        <option <?php if($data['satuan'] == "Mangkuk"){ echo "selected=selected"; } ?> value="Mangkuk">Mangkuk</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px; width: 30%">Kategori</td>
                <td>
                    <select name="kategori" class="form-control">
                        <option value="null">Pilih Kategori</option>
                        <option <?php if($data['kategori'] == "Makanan"){ echo "selected=selected"; } ?> value="Makanan">Makanan</option>
                        <option <?php if($data['kategori'] == "Minuman"){ echo "selected=selected"; } ?> value="Minuman">Minuman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="font-size: 20px; width: 30%">URL Gambar</td>
                <td><input type="text" class="form-control" name="url_picture" value="<?php echo $data['url_picture']; ?>" required></td>
            </tr>
            <tr>
                <td style="font-size: 20px; width: 30%">Stok</td>
                <td><input type="Number" class="form-control" name="stok" value="<?php echo $data['stok']; ?>" required></td>
            </tr>
            <tr>
                <td colspan = 2 class="td"><input type="submit" name="edit" class="btn btn-primary" value="Edit"></td>
            </tr>
            </table>
        </form>
        <?php } ?>
</body>
</html>
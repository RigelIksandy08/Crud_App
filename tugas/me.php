<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <form  action="" method="post" class="form" style="border : 1px solid black; width : 40%; margin : 1% 30% 2% 30%">
      <h1 style="font-size: 28px; text-align: center; margin: 10px 0px">PESAN PRODUK</h1>
      <table class="table table-borderless" align="center">
        <tr style="text-align:center;">
        </tr>
        <tr>
          <td style="font-size:25px: width:30%:">Kode Produk</td>
          <td style="font-size:25px:">
            <input type="text" class="form-control" name="kode_produk" required>
          </td>
        </tr>
        <tr>
          <td style="font-size:25px: width:30%:">Nama Produk</td>
          <td>
            <input type="text" class="form-control" name="nama_produk" required>
          </td>
        </tr>
        <tr>
          <td style="font-size:25px: width:30%:">Harga Produk</td>
          <td>
            <input type="number" class="form-control" name="harga" required>
          </td>
        </tr>
        <tr>
          <td style="font-size:25px: width:30%:">Satuan</td>
          <td>
            <select name="satuan" class="form-control">
              <option value="null">Pilih Satuan</option>  
              <option value="Gelas">Gelas</option>
              <option value="Piring">Piring</option>
              <option value="Mangkuk">Mangkuk</option>
            </select>
          </td>
        </tr>
        <tr>
          <td style="font-size:25px: width:30%:">Kategori</td>
          <td>
            <select name="kategori" class="form-control">
              <option value="null">Pilih Kategori</option>
              <option value="Makanan">Makanan</option>
              <option value="Minuman">Minuman</option>
            </select>
          </td>
        </tr>
        <tr>
          <td style="font-size: 20px; width: 30%">URL Gambar</td>
          <td>
            <input type="text" class="form-control" name="url_picture" required>
          </td>
        </tr>
        <tr>
          <td style="font-size: 20px; width: 30%">Stok</td>
          <td>
            <input type="Number" class="form-control" name="stok" required>
          </td>
        </tr>
        <tr>
          <td colspan = 2 class="td">
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
          </td>
        </tr>
      </table>
    </form>

    <table class="table table-bordered" align="center" style="width: 95%;">
      <tr>
        <th style="text-align : center">No</th>
        <th style="text-align : center">Kode Produk</th>
        <th style="text-align : center">Nama Produk</th>
        <th style="text-align : center">Harga Produk</th>
        <th style="text-align : center">Satuan</th>
        <th style="text-align : center">Kategori</th>
        <th style="text-align : center">Gambar</th>
        <th style="text-align : center">Stok Awal</th>
        <th style="text-align : center">Edit</th> 
      </tr>

      <?php 
      
      include ('koneksi.php');
      $hasil = $con-> query("SELECT * FROM `dataP`");
      ?>

      <?php 
        foreach($hasil as $data){

        
      ?>  

      <tr>
          <td style="text-align : center">
            <?php echo  $data['no']  ?>
          </td>
          <td style="text-align : center">
            <?php echo  $data['kode_produk']  ?>
          </td>
          <td>
            <?php echo  $data['nama_produk']  ?>
          </td>
          <td style="text-align : center">
            <?php echo  $data['harga']  ?>
          </td>
          <td>
            <?php echo  $data['satuan']  ?>
          </td>
          <td>
            <?php echo  $data['kategori']  ?>
          </td>
          <td>
            <img src="<?php echo $data['url_picture'] ?>" style="width : 120px;" alt="">
          </td>
          <?php
          
            if ($data['stok'] < 5){
                echo "<td style='background : red; color : white; text-align : center;'>".$data['stok']."</td>";
            }else{
                echo "<td style='text-align : center'>".$data['stok']."</td>";
            }

          ?>
          <td style="text-align : center">
          <a href="editform.php?key=<?php echo $data['no']; ?>">Edit</a> || <a href="deletedata.php?key=<?php echo $data['no']; ?>">Delete</a>
          </td>
      </tr>

      <?php } ?>

      <?php 
        
        if (isset($_POST['submit'])){

          $kodep = $_POST['kode_produk'];
          $namap = $_POST['nama_produk'];
          $hargap = $_POST['harga'];
          $satuanp = $_POST['satuan'];
          $kategorip = $_POST['kategori'];
          $urlp = $_POST['url_picture'];
          $stokp = $_POST['stok'];

          $result =$con->exec("INSERT INTO `dataP` (`no`, `kode_produk`, `nama_produk`, `harga`, `satuan`, `kategori`, `url_picture`, `stok`) VALUES (NULL, '$kodep', '$namap', '$hargap', '$satuanp', '$kategorip', '$urlp', '$stokp')");

          if ($result == TRUE) {
            echo  "
                    <script>
                      alert('Berhasil Menambahkan Data');
                      window.location = 'me.php';
                    </script>
                  ";
          }else{
            echo  "
                    <script>
                      alert('Berhasil Menambahkan Data');
                       window.location = 'me.php';
                    </script>
                   ";
          }
        }

      ?>
    </table>
</body>
</html>
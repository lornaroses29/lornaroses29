<?php
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="gambar/WebPro10.png" type="image/x-icon">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>
                <img src="gambar/WebPro10.png" height="100px">
                 Daftar Barang
            </h1>
            <hr>
            <a href="add.php" class="btn btn-primary" style="float: right;">Tambah Data</a> <br><br>
        </div>
        <table class="table table-hover table-striped table-bordered">

    <tr>
        <th>No</th>
        <th>Barang</th>
        <th>Stok</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Action</th>
    </tr>
    
    <?php
    $no = 1;
    foreach($data_barang as $row){
    ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['stok']; ?></td>
        <td><?php echo $row['harga_beli']; ?></td>
        <td><?php echo $row['harga_jual']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="simpan.php?id=<?= $row['id']; ?>&action=delete" class="btn btn-danger btn-sm" 
            onclick="return confirm('Data Barang akan dihapus, Yakin?')">Hapus</a>
        </td>
        </tr>
    <?php
    }
    ?>
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" \
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
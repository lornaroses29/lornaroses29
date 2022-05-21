<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="gambar/WebPro10.png" type="image/x-icon">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <img src="gambar/WebPro10.png" height="100px">
                    Data Barang
                </h1>
                <hr>
                <a href="index.php" class="btn btn-primary" style="float: right;">Kembali</a> <br></br>
            </div>
            <?php
                include_once('koneksi.php');
                $db = new database();
                $id = $_GET['id'];
                if(! is_null($id))
                {
                $r = $db->get_by_id($id);
                }
                else
                {
                header('location:index.php');
                }
                ?>
            <form action="simpan.php?action=update" method="post">
                <div class="mb-2">
                    <label for="nama_barang" class="form-label">Nama Barang*</label>
                    <input type="text" name="nama_barang" value="<?= $r['nama_barang']; ?>" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input type="number" name="stok" value="<?= $r['stok']; ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="harga_beli" class="form-label">Harga Beli</label>
                    <input type="number" name="harga_beli" value="<?= $r['harga_beli']; ?>" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="number" name="harga_jual" value="<?= $r['harga_jual']; ?>" class="form-control">
                </div>
                <div>
                    <input type="hidden" name="id" value="<?= $r['id']; ?>">
                    <input type="reset" class="btn btn-md btn-warning">
                    <button type="submit" name="simpan" class="btn btn-md btn-primary">Update</button>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    S integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
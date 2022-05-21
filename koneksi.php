<?php
class database
{

    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "barang"; 
    var $koneksi = ""; 

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
        if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }
         
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi,"SELECT * FROM barang");
        while($row = mysqli_fetch_assoc($data)){
        $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_data($nama_barang, $stok, $harga_beli, $harga_jual)
    {
        mysqli_query($this->koneksi,"INSERT INTO barang VALUES ('', '$nama_barang', '$stok', '$harga_beli', '$harga_jual') ");
    }


    function get_by_id($id)
    {
    $query = mysqli_query($this->koneksi,"SELECT* FROM barang WHERE id='$id'");
    return $query->fetch_array();
    }

    function update_data($nama_barang, $stok, $harga_beli, $harga_jual, $id)
    {
    $query = mysqli_query($this->koneksi, "UPDATE barang SET nama_barang='$nama_barang', 
    stok='$stok', harga_beli='$harga_beli', harga_jual='$harga_jual' WHERE id='$id'");
    }
    
    function delete_data($id)
    {
    $query = mysqli_query($this->koneksi,"DELETE from barang where id='$id'");
    }
}
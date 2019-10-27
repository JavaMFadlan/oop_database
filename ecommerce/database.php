<?php
class Database
{
    public  $host = "localhost",
            $user = "root",
            $pass = 123,
            $db = "bootstrapdatabase";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        if ($this->koneksi) {

        }else {
            return "koneksi Database Gagal";
        }
    }
}
class Ecommerce extends Database
{
    public function index(){
        $ecommerce = mysqli_query($this->koneksi,"select * from ecommerce");
        return $ecommerce;
    }
    public function create($nama_barang, $kategori_barang, $jumlah_barang, $harga_barang, $deskripsi_barang,$foto_barang, $sub_total)
    {
        mysqli_query($this->koneksi,"insert into ecommerce values('','$nama_barang','$kategori_barang','$jumlah_barang','$harga_barang','$deskripsi_barang','$foto_barang','$sub_total')");
    }
    public function show($id)
    {
        $ecommerce =mysqli_query($this->koneksi,"select * from ecommerce where id='$id'");
        return $ecommerce;
    }
    public function edit($id)
    {
        $ecommerce = mysqli_query($this->koneksi,"select * from ecommerce where id='$id'");
        return $ecommerce;
    }
    public function update($id, $nama_barang, $kategori_barang, $jumlah_barang, $harga_barang, $deskripsi_barang,$foto_barang, $sub_total)
    {
        mysqli_query($this->koneksi,"UPDATE ecommerce SET 
        nama_barang='$nama_barang',kategori_barang='$kategori_barang',jumlah_barang='$jumlah_barang',harga_barang='$harga_barang',deskripsi='$deskripsi_barang',foto_barang='$foto_barang',sub_total='$sub_total' WHERE id='$id'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from ecommerce where id='$id'");
    }
    
}
class Login extends Database
{
    public function register($user, $pass)
    {
        mysqli_query($this->koneksi,"insert into login values('$user','$pass')");
    }
    public function masuk($user)
    {
        $login = mysqli_query($this->koneksi,"select * from login where username='$user'");
        return $login;
    }
    public function periksa()
    {
        $login = mysqli_query($this->koneksi,"select * from login");
        return $login;
    }
    
}

$db = new Database();

?>
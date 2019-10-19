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
class Toko extends Database
{
    public function index()
    {
        $toko = mysqli_query($this->koneksi,"select * from toko");
        return $toko;
    }
    public function create($nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi_produk, $sub_total)
    {
        mysqli_query($this->koneksi,"insert into toko values('','$nama_produk','$kategori_produk','$jumlah_produk','$harga_produk','$deskripsi_produk','$sub_total')");
    }
    public function show($id)
    {
        $toko =mysqli_query($this->koneksi,"select * from toko where id='$id'");
        return $toko;
    }
    public function edit($id)
    {
        $toko = mysqli_query($this->koneksi,"select * from toko where id='$id'");
        return $toko;
    }
    public function update($id, $nama_produk, $kategori_produk, $jumlah_produk, $harga_produk, $deskripsi_produk, $sub_total)
    {
        mysqli_query($this->koneksi,"update toko set nama_produk='$nama_produk',kategori_produk='$kategori_produk',jumlah_produk='$jumlah_produk',harga_produk='$harga_produk',deskripsi_produk='$deskripsi_produk',sub_total='$sub_total' where id='$id'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from toko where id='$id'");
    }
}
$db = new Database();

?>
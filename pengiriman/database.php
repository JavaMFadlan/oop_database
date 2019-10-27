<?php
class Database
{
    public  $host = "localhost",
            $user = "root",
            $pass = 123,
            $db = "crud";
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
class Pengiriman extends Database
{
    public function index(){
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM pengiriman");
        return $pengiriman;
    }
    public function create($nama_pengirim,$alamat_pengirim,$nama_barang,$berat_barang,$foto_barang,$layanan,$no_pengirim,$nama_penerima,$alamat_penerima,$kode_pos)
    {
        mysqli_query($this->koneksi,"insert into pengiriman values('','$nama_pengiriman','$alamat_pengirim','$nama_barang','$berat_barang','$foto_barang','$layanan','$no_pengirim','$nama_penerima','$alamat_penerima','$kode_pos')");
    }
    public function show($id)
    {
        $pengiriman =mysqli_query($this->koneksi,"SELECT * FROM pengiriman where id='$id'");
        return $pengiriman;
    }
    public function edit($id)
    {
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM pengiriman where id='$id'");
        return $pengiriman;
    }
    public function update($id, $nama_pengiriman,$nama_barang,$berat_barang,$foto_barang,$layanan,$no_pengirim,$nama_penerima,$alamat_penerima,$kode_pos)
    {
        mysqli_query($this->koneksi,"UPDATE pengiriman SET 
        nama_pengirim='$nama_pengirim',alamat_pengirim='$alamat_pengirim',nama_barang='$nama_barang',berat_barang='$berat_barang',foto_barang='$foto_barang',
        layanan='$layanan',no_pengirim='$no_pengirim',nama_penerima='$nama_penerima',alamat_penerima='$alamat_penerima',kode_pos='$kode_pos' WHERE id='$id'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"DELETE  pengiriman WHERE id='$id'");
    }
    
}

$db = new Database();

?>
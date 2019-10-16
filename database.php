<?php
class Database
{
    public  $host = "localhost",
            $user = "root",
            $pass = 123,
            $db = "latihan";
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
class Siswa extends Database
{
    public function index()
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from siswa");
        return $datasiswa;
    }
    public function create($nis, $nama, $alamat)
    {
        mysqli_query($this->koneksi,"insert into siswa values('','$nis','$nama','$alamat')");
    }
    public function show($id)
    {
        $datasiswa =mysqli_query($this->koneksi,"select * from siswa where id='$id'");
        return $datasiswa;
    }
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
        return $datasiswa;
    }
    public function update($id, $nis, $nama, $alamat)
    {
        mysqli_query($this->koneksi,"update siswa set nis='$nis',nama='$nama',alamat='$alamat' where id='$id'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from siswa where id='$id'");
    }
}
$db = new Database();

?>

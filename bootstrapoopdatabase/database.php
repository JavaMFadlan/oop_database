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
class Biodata extends Database
{
    public function index()
    {
        $biodata = mysqli_query($this->koneksi,"select * from biodata");
        return $biodata;
    }
    public function create($nama, $alamat, $tgl_lahir, $jk, $agama, $umur)
    {
        mysqli_query($this->koneksi,"insert into biodata values('','$nama','$alamat','$tgl_lahir','$jk','$agama','$umur')");
    }
    public function show($id)
    {
        $biodata =mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $biodata;
    }
    public function edit($id)
    {
        $biodata = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
        return $biodata;
    }
    public function update($id, $nama, $alamat, $tgl_lahir, $jk, $agama, $umur)
    {
        mysqli_query($this->koneksi,"update biodata set nama='$nama',alamat='$alamat',tgl_lahir='$tgl_lahir',                                     jk='$jk',agama='$agama',umur='$umur' where id='$id'");
    }
    public function delete($id)
    {
        mysqli_query($this->koneksi,"delete from biodata where id='$id'");
    }
}
$db = new Database();

?>
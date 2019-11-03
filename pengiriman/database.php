<?php
class Database
{
    public  $host = "localhost",
            $user = "root",
            $pass = 123,
            $db = "pengiriman";
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
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM tb_pengiriman");
        return $pengiriman;
    }
    public function create($id_pengirim,$id_penerima,$id_barang,$id_layanan,$id_tipe)
    {
        mysqli_query($this->koneksi,"insert into tb_pengiriman values('','$id_pengirim','$id_penerima','$id_barang','$id_layanan','$id_tipe')");
    }
    public function show($id_pengiriman)
    {
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM tb_pengiriman where id='$id_pengiriman'");
        return $pengiriman;
    }
    public function edit($id_pengiriman)
    {
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM tb_pengiriman where id='$id_pengiriman'");
        return $pengiriman;
    }
    public function update($id_pengiriman,$id_pengirim,$id_penerima,$id_barang,$id_layanan)
    {
        mysqli_query($this->koneksi,"UPDATE tb_pengiriman SET 
        id_pengirim='$id_pengirim',id_penerima='$id_penerima',id_barang='$id_barang',id_layanan='$id_layanan',id_tipe='$id_tipe' WHERE id_pengiriman='$id_pengiriman'");
    }
    public function delete($id_pengiriman)
    {
        mysqli_query($this->koneksi,"DELETE tb_pengiriman WHERE id='$id_pengiriman'");
    }
    
}
class Pengirim extends Database
{
    public function index(){
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM tb_pengirim");
        return $pengiriman;
    }
    public function create($nama,$kota,$kode_pos)
    {
        mysqli_query($this->koneksi,"insert into tb_pengirim values('','$nama','$kota','$kode_pos')");
    }
    public function mencaripengirim()
    {
        $caripengirim = mysqli_query($this->koneksi,"SELECT max(id_pengirim) as id_pengirim from tb_pengirim LIMIT 1");
        return $caripengirim;
    }
    public function show($id_pengirim)
    {
        $pengirim =mysqli_query($this->koneksi,"SELECT * FROM tb_pengirim where id='$id_pengirim'");
        return $pengirim;
    }
    public function edit($id_pengirim)
    {
        $pengirim = mysqli_query($this->koneksi,"SELECT * FROM tb_pengirim where id='$id_pengirim'");
        return $pengirim;
    }
    public function update($id_pengirim,$nama,$kota,$kode_pos)
    {
        mysqli_query($this->koneksi,"UPDATE tb_pengirim SET 
        nama_pengirim='$nama',kota_pengirim='$kota',kode_pos_pengirim='$kode_pos' WHERE id_pengirim='$id_pengirim'");
    }
    public function delete($id_pengirim)
    {
        mysqli_query($this->koneksi,"DELETE tb_pengirim WHERE id='$id_pengirim'");
    }
}
class Penerima extends Database
{
    public function index(){
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM tb_penerima");
        return $pengiriman;
    }
    public function create($nama,$kota,$kode_pos)
    {
        mysqli_query($this->koneksi,"insert into tb_penerima values('','$nama','$kota','$kode_pos')");
    }
    public function mencaripenerima()
    {
        $caripenerima = mysqli_query($this->koneksi,"SELECT max(id_penerima) as id_penerima from tb_penerima LIMIT 1");
        return $caripenerima;
    }
    public function show($id_penerima)
    {
        $penerima =mysqli_query($this->koneksi,"SELECT * FROM tb_penerima where id='$id_penerima'");
        return $penerima;
    }
    public function edit($id_penerima)
    {
        $penerima = mysqli_query($this->koneksi,"SELECT * FROM tb_penerima where id='$id_penerima'");
        return $penerima;
    }
    public function update($id_penerima,$nama,$kota,$kode_pos)
    {
        mysqli_query($this->koneksi,"UPDATE tb_penerima SET 
        nama_penerima='$nama',kota_penerima='$kota',kode_pos_penerima='$kode_pos' WHERE id_penerima='$id_penerima'");
    }
    public function delete($id_penerima)
    {
        mysqli_query($this->koneksi,"DELETE tb_penerima WHERE id='$id_penerima'");
    }
}
class Barang extends Database
{
    public function index(){
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM tb_barang");
        return $pengiriman;
    }
    public function create($id_tipe,$nama,$berat,$foto)
    {
        mysqli_query($this->koneksi,"insert into tb_barang values('','$id_tipe','$nama','$berat','$foto')");
    }
    public function mencaribarang()
    {
        $caribarang = mysqli_query($this->koneksi,"SELECT max(id_barang) as id_barang FROM tb_barang LIMIT 1");
        return $caribarang;
    }
    public function show($id_barang)
    {
        $pengiriman =mysqli_query($this->koneksi,"SELECT * FROM tb_barang where id='$id_barang'");
        return $pengiriman;
    }
    public function edit($id_barang)
    {
        $pengiriman = mysqli_query($this->koneksi,"SELECT * FROM tb_barang where id='$id_barang'");
        return $pengiriman;
    }
    public function update($id_barang,$id_tipe,$nama,$berat,$foto)
    {
        mysqli_query($this->koneksi,"UPDATE tb_barang SET 
        id_tipe='$id_tipe',nama_barang='$nama',berat='$berat',foto='$foto' WHERE id_barang='$id_barang'");
    }
    public function delete($id_barang)
    {
        mysqli_query($this->koneksi,"DELETE tb_barang WHERE id='$id_barang'");
    }
}
class Tipe extends Database
    {
        public function type()
        {
            $tipe = mysqli_query($this->koneksi,"SELECT * FROM tipe");
        return $tipe;
        }
        public function caritipe($id_tipe)
        {
            $caritipe = mysqli_query($this->koneksi,"SELECT * FROM tipe WHERE id_tipe='$id_tipe'");
            return $caritipe;
        }
    }
    class Layanan extends Database
    {
        public function layan()
        {
            $layan = mysqli_query($this->koneksi,"SELECT * FROM tb_layanan");
            return $layan;
        }
        public function carilayan($id_layanan)
        {
            $carilayan = mysqli_query($this->koneksi,"SELECT * FROM tb_layanan WHERE id_layanan='$id_layanan'");
            return $carilayan;
        }
    }
    class Join extends Database
    {
        public function injoin()
        {
            
            $injoin = mysqli_query($this->koneksi,"SELECT * FROM tb_pengiriman
                                                INNER JOIN tb_barang ON tb_pengiriman.id_barang = tb_barang.id_barang
                                                INNER JOIN tb_pengirim ON tb_pengiriman.id_pengirim = tb_pengirim.id_pengirim
                                                INNER JOIN tb_penerima ON tb_pengiriman.id_penerima = tb_penerima.id_penerima
                                                INNER JOIN tb_layanan ON tb_pengiriman.id_layanan = tb_layanan.id_layanan
                                                INNER JOIN tipe ON tb_pengiriman.id_tipe = tipe.id_tipe
                                                ");                  
        return $injoin;
        }
        public function wherejoin($id)
        {
            // $injoin = mysqli_query($this->koneksi,"SELECT * FROM tb_barang
            //                                     INNER JOIN tipe ON tb_barang.id_tipe = tipe.id_tipe
            //                                     ");
            $injoin = mysqli_query($this->koneksi,"SELECT * FROM tb_pengiriman
                                                    INNER JOIN tb_barang ON tb_pengiriman.id_barang = tb_barang.id_barang
                                                    INNER JOIN tb_pengirim ON tb_pengiriman.id_pengirim = tb_pengirim.id_pengirim
                                                    INNER JOIN tb_penerima ON tb_pengiriman.id_penerima = tb_penerima.id_penerima
                                                    INNER JOIN tb_layanan ON tb_pengiriman.id_layanan = tb_layanan.id_layanan
                                                    INNER JOIN tipe ON tb_pengiriman.id_tipe = tipe.id_tipe
                                                    WHERE tb_pengiriman.id_pengiriman = '$id'");
        return $injoin;
        }
    }
    


$db = new Database();
$pengiriman = new Pengiriman();
$pengirim = new Pengirim();
$penerima = new Penerima();
$barang = new Barang();
$tipe = new Tipe();
$join = new Join();
$layanan = new Layanan();

?>
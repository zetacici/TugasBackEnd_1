<?php
require_once('form.php');

class produk
{
    var $id_barang;
    public $nama_barang;
    public $harga_barang;
    public $stok_barang;

    function __construct()
    {
        $this->id_barang = 0;
        $this->nama_barang = " ";
        $this->harga_barang = 0;
        $this->stok_barang = 0;
    }

    function cetak_data()
    {
        echo "ID Barang : " . $this->id_barang . "<br/>";
        echo "Nama Barang : " . $this->nama_barang . "<br/>";
        // stok dan harga tidak dipakai di form produk baru
    }
}

class produkLengkap extends produk
{
    var $tipe_produk;
    var $deskripsi;

    function __construct()
    {
        parent::__construct();
        $this->tipe_produk = " ";
        $this->deskripsi = " ";
    }

    function set_tipe($tipe)
    {
        $this->tipe_produk = $tipe;
    }

    function set_deskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    function cetak_dataProduk()
    {
        parent::cetak_data();
        echo "Tipe Produk : " . $this->tipe_produk . "<br/>";
        echo "Deskripsi : " . nl2br(htmlspecialchars($this->deskripsi)) . "<br/>";
    }

    final function input_dataProduk()
    {
        $form = new form("", "Simpan");
        $form->displayFormProduct();
    }

    final function terima_dataProduk()
    {
        $this->id_barang = isset($_POST['id_produk']) ? $_POST['id_produk'] : '';
        $this->nama_barang = isset($_POST['nama_produk']) ? $_POST['nama_produk'] : '';
        $this->set_tipe(isset($_POST['tipe_produk']) ? $_POST['tipe_produk'] : '');
        $this->set_deskripsi(isset($_POST['deskripsi']) ? $_POST['deskripsi'] : '');
    }
}
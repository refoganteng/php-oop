<?php
class Hewan
{
    public $nama, $harga, $jumlahKaki;

    public function __construct($nama = "nama", $harga = 0, $jumlahKaki = 0)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlahKaki = $jumlahKaki;
    }

    public function infoHewan()
    {
        return "$this->nama yang kakinya $this->jumlahKaki";
    }
}

class BeliHewan
{
    public $hewan; // properti untuk menyimpan objek Hewan

    // Constructor menerima object Hewan
    public function __construct(Hewan $hewan)
    {
        $this->hewan = $hewan;
    }

    public function infoBeli()
    {
        $struk = "Pelanggan telah membeli [{$this->hewan->infoHewan()}] - seharga Rp [{$this->hewan->harga}]";
        echo $struk;
        echo "<hr>";
    }
}

// Membuat objek Hewan
$kucing = new Hewan("kucing", 200000, 4);
$ayam = new Hewan("ayam", 300000, 2);

// Membuat objek BeliHewan dengan constructor
$pembelian1 = new BeliHewan($kucing);
$pembelian2 = new BeliHewan($ayam);

// Menampilkan info pembelian
$pembelian1->infoBeli();
$pembelian2->infoBeli();

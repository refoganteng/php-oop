<?php
//buat class hewan
class Hewan
{
    //property
    public $nama, $harga, $jumlahKaki;

    //(magic) method constructor
    public function __construct($nama = "nama", $harga = 0, $jumlahKaki = 0)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlahKaki = $jumlahKaki;
    }

    //method biasa
    public function infoHewan()
    {
        return "$this->nama hewan berkaki $this->jumlahKaki";
    }
}

//buat class beli hewan
class beliHewan 
{
    //method infoBeli dengan parameter dari class Hewan (gak boleh yang lain)
    public function infoBeli(Hewan $hewan)
    {
        $struk = "Pelanggan telah membeli {$hewan->infoHewan()} seharga Rp {$hewan->harga}";
        echo $struk;
        echo "<hr>";
    }
}

//buat object dari class Hewan
$hewan1 = new Hewan("Kucing", 200000, 4);
$hewan2 = new Hewan("Ayam", 300000, 2);

echo $hewan1->infoHewan() . "<hr>";
echo $hewan2->infoHewan() . "<hr>";

//buat object dari class beliHewan
$pembelian = new beliHewan();
$pembelian->infoBeli($hewan1);
$pembelian->infoBeli($hewan2);

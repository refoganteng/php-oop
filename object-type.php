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
        return "$this->nama hewan berkaki $this->jumlahKaki";
    }
}

class beliHewan
{
    public function infoBeli(Hewan $Hewan)
    {
        $struk = "Pelanggan telah membeli {$Hewan->infoHewan()} seharga Rp {$Hewan->harga}";
        echo $struk;
        echo "<hr>";
    }
}

$hewan1 = new Hewan("Kucing", 200000, 4);
$hewan2 = new Hewan("Ayam", 300000, 2);

echo $hewan1->infoHewan() . "<hr>";
echo $hewan2->infoHewan() . "<hr>";

$pembelian = new beliHewan();
$pembelian->infoBeli($hewan1);
$pembelian->infoBeli($hewan2);

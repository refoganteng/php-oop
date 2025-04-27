<?php
//buat class hewan
class Hewan
{
    //property
    public $nama, $harga, $jumlahKaki,
        $hargaRumput, $hargaJagung, $tipeHewan;

    //(magic) method constructor
    public function __construct($nama = "nama", $harga = 0, $jumlahKaki = 0, $hargaRumput = 0, $hargaJagung = 0, $tipeHewan = "")      
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlahKaki = $jumlahKaki;
        $this->hargaRumput = $hargaRumput;
        $this->hargaJagung = $hargaJagung;
        $this->tipeHewan = $tipeHewan;
    }

    //method biasa
    public function infoHewan()
    {
        return "$this->nama hewan berkaki $this->jumlahKaki";
    }

    //method biasa
    public function infoHewan2()
    {
        $str = "{$this->tipeHewan} | {$this->infoHewan()} | ";
        if ($this->tipeHewan == "mamalia") {
            $str .= "Harga Rumput : Rp {$this->hargaRumput}";
        } else if ($this->tipeHewan == "unggas") {
            $str .= "Harga Jagung : Rp {$this->hargaJagung}";
        }
        return $str;
    }
}

//buat class beli hewan
// class beliHewan
// {
//     //method infoBeli dengan parameter dari class Hewan (gak boleh yang lain)
//     public function infoBeli(Hewan $hewan)
//     {
//         $struk = "Pelanggan telah membeli {$hewan->infoHewan()} seharga Rp {$hewan->harga}";
//         echo $struk;
//         echo "<hr>";
//     }
// }

//buat object dari class Hewan
$kucing = new Hewan("Kucing", 200000, 4, 10000, 0, "mamalia");
$ayam = new Hewan("Ayam", 300000, 2, 0, 50000, "unggas");

echo $kucing->infoHewan2() . "<hr>";
echo $ayam->infoHewan2() . "<hr>";



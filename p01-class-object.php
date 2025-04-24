<?php

// class hewan
class Hewan
{
    //property (like variable)
    public $nama, $harga, $jumlahKaki;

    //method (like function)
    public function infoHewan()
    {
        echo "Nama : $this->nama <br>";
        echo "Harga : $this->harga <br>";
        echo "Jumlah Kaki : $this->jumlahKaki <br>";
        echo "<hr>";
    }
}

//object
$hewan1 = new Hewan();
$hewan1->nama = "Kucing";
$hewan1->harga = 200000;
$hewan1->jumlahKaki = 4;

$hewan2 = new Hewan();
$hewan2->nama = "Anjing";
$hewan2->harga = 300000;
$hewan2->jumlahKaki = 4;

echo $hewan1->infoHewan();
echo $hewan2->infoHewan();

<?php
// class hewan
class Hewan
{
    //property (like variable)
    public $nama, $harga, $jumlahKaki;

    //method (like function)
    //__construct adalah constructor
    public function __construct($nama = "nama", $harga = 0, $jumlahKaki = 0)
    {
       $this->nama = $nama;
       $this->harga = $harga;
       $this->jumlahKaki = $jumlahKaki;
    }

    public function infoHewan()
    {
        echo "Nama : $this->nama <br>";
        echo "Harga : $this->harga <br>";
        echo "Jumlah Kaki : $this->jumlahKaki <br>";
        echo "<hr>";
    }
}

//object
$hewan1 = new Hewan("Kucing", 200000, 4);
$hewan2 = new Hewan("Anjing", 300000, 4);
echo $hewan1->infoHewan();
echo $hewan2->infoHewan();













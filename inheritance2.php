<?php
// Class induk (parent)
class Rumah
{
    public $alamat;
    public $warna;

    public function __construct($alamat = "Alamat Belum Diisi", $warna = "Putih")
    {
        $this->alamat = $alamat;
        $this->warna = $warna;
    }

    public function infoRumah()
    {
        return "Rumah beralamat di {$this->alamat} dengan warna {$this->warna}.";
    }
}

// Class turunan (child)
class RumahMewah extends Rumah
{
    public $jumlahKolamRenang;

    public function __construct($alamat, $warna, $jumlahKolamRenang = 1)
    {
        // Memanggil constructor parent (Rumah)
        parent::__construct($alamat, $warna); //ini adalah overriding
        $this->jumlahKolamRenang = $jumlahKolamRenang;
    }

    public function infoRumahMewah()
    {
        // Pakai method dari parent + tambah data baru
        return $this->infoRumah() . " Rumah ini memiliki {$this->jumlahKolamRenang} kolam renang.";
    }
}

// Membuat object
$rumah1 = new Rumah("Jl. Merpati No.5", "Biru");
$rumah2 = new RumahMewah("Jl. Elit No.10", "Putih Mewah", 2);

// Tampilkan informasi
echo $rumah1->infoRumah();
echo "<hr>";
echo $rumah2->infoRumahMewah();
?>

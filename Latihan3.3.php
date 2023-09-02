<?php
Class TokoPegadaian {
    var $NamaToko = "TOKO PEGADAIAN";
    var $Alamat = "Jl Keadilan No 16";
    var $Telepon = 72353459;
    var $BesarPinjaman = 1000000;
    var $BesarBunga = 10;
    var $LamaAngsuran = 5;

    public function __construct($NamaToko, $Alamat, $Telepon, $BesarPinjaman, $BesarBunga, $LamaAngsuran) {
        $this->NamaToko = $NamaToko;
        $this->Alamat = $Alamat;
        $this->Telepon = $Telepon;
        $this->BesarPinjaman = $BesarPinjaman;
        $this->BesarBunga = $BesarBunga;
        $this->LamaAngsuran = $LamaAngsuran;
    }

    public function TotalSeluruh () {
        $TotalPinjaman = $this->BesarPinjaman + ($this->BesarPinjaman * ($this->BesarBunga / 100));
        $BesarAngsuran = $TotalPinjaman / $this->LamaAngsuran;

        echo "Besar Pinjaman : Rp. " . number_format ($this->BesarPinjaman, 0, ',','.') . "<br>";
        echo "Besar Bunga : " . $this->BesarBunga . "%<br>";
        echo "Lama Angsuran : " . $this->LamaAngsuran . "bulan<br>";
        echo "Besar Angsuran per bulan : Rp. " . number_format ($BesarAngsuran, 0, ',','.') . "<br>";
        echo "Total Pinjaman : Rp. " . number_format ($BesarAngsuran, 0, ',', '.') . "<br>"; 
    }

    public function NamaToko (){
        echo "Informasi Toko <br>";
        echo "Nama Toko : " . $this->NamaToko . "<br>";
        echo "Alamat : " . $this->Alamat . "<br>";
        echo "Telepon : " . $this->Telepon . "<br>";
    }
}

$ObjekToko = new TokoPegadaian ("TOKO PEGADAIAN", "Jl Keadilan No 16", 72353459, 1000000, 10, 5);
$ObjekToko->NamaToko ();
$ObjekToko->TotalSeluruh ();
?>
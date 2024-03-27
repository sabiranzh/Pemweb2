<?php
class Mahasiswa {
    // Variabel NIM dan NAMA
    private $NIM;
    private $NAMA;

    // Konstruktor untuk menginisialisasi NIM dan NAMA
    public function __construct($NIM, $NAMA) {
        $this->NIM = $NIM;
        $this->NAMA = $NAMA;
    }

    // Fungsi predikat_ipk() untuk mengembalikan predikat IPK
    public function predikat_ipk($IPK) {
        if ($IPK < 2.0) {
            return "Cukup";
        } elseif ($IPK >= 2.0 && $IPK < 3.0) {
            return "Baik";
        } elseif ($IPK >= 3.0 && $IPK < 3.75) {
            return "Memuaskan";
        } else {
            return "Cum Laude";
        }
    }
}
?>

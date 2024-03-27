<?php
class NilaiMahasiswa {
    // Variabel yang ada dalam class NilaiMahasiswa
    private $nilai;

    // Konstruktor untuk menginisialisasi nilai
    public function __construct($nilai) {
        $this->nilai = $nilai;
    }

    // Fungsi kelulusan untuk menentukan status lulus atau tidak lulus
    public function kelulusan() {
        if ($this->nilai < 56) {
            return "TIDAK LULUS";
        } else {
            return "LULUS";
        }
    }

    // Fungsi grade untuk mengembalikan grade berdasarkan nilai
    public function grade() {
        if ($this->nilai >= 0 && $this->nilai <= 35) {
            return "E";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "D";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "C";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "B";
        } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        } else {
            return "Nilai tidak valid";
        }
    }
}
?>

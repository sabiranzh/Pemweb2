<?php
require_once "class_persegipanjang.php";
// Contoh penggunaan class PersegiPanjang
$persegiPanjang = new PersegiPanjang(5, 3);
echo "Luas persegi panjang: " . $persegiPanjang->hitungLuas() . "<br>";
echo "Keliling persegi panjang: " . $persegiPanjang->hitungKeliling();
?>
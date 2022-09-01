<?php
// Data Warna, jangan diubah
$kode_warna = array(
    "Black",
    "Brown",
    "Red",
    "Orange",
    "Yellow",
    "Green",
    "Blue",
    "Violet",
    "Gray",
    "White"
);

// Ubah disini
$input_warna = 1;

echo "<h1>Anda menginputkan angka " . $input_warna . "</h1>";
echo "<h2>Warna nya adalah warna " . $kode_warna[$input_warna] . "</h2>";

?>
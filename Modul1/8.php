<?php

$nama_barang = "Ujang Geming";
$harga_satuan = 5000;
$jumlah_barang = 50;
$member_toko = true;

echo '<h1>Anda membeli barang <span style="color:blue">' . $nama_barang . "</span> (Rp. " . $harga_satuan . "/pcs) sebanyak " . $jumlah_barang . " pcs.</h1>";

if($member_toko){
    echo "<h1>Subtotal Harga = <span style='color:red'>Rp. " . ($harga_satuan * $jumlah_barang) ."</span></h1>";
    echo "<h1>Karena anda member, ada diskon 5%!</h1>";
    echo "<h1>Total Bayar = <span style='color:green'>Rp. " . (0.95 * $harga_satuan * $jumlah_barang) ."</span></h1>";
}
else {
    echo "<h1>Total Bayar = <span style='color:red'>Rp. " . ($harga_satuan * $jumlah_barang) ."</span></h1>";
}


?>
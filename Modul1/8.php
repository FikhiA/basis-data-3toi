<?php

$harga_barang = array(
    "kopih" => 5000,
    "kopis" => 6000,
    "gorengan" => 1500,
);

$nama_barang = array(
    "kopih" => "Kopi Hitam",
    "kopis" => "Kopi Susu",
    "gorengan" => "Gorengan",
);

if($_GET["barang"] == null || $_GET["jumlah"] == null) {
    echo '
    <h1 style="color: lightgreen">Minimarket Ujang</h1>
        <form action="" method="get">
            <label for="barang">Pilih Barang yang akan dibeli:</label><br />
            <select name="barang" id="barang">
                <option value="kopih">Kopi Hitam</option>
                <option value="kopis">Kopi Susu</option>
                <option value="gorengan">Gorengan</option>
            </select>
            <br>
            <br>

            <label for="jumlah">Jumlah barang yang akan dibeli:</label><br />
            <input type="number" id="jumlah" name="jumlah"/> <br>
            <br>

            <label for="jumlah">Apakah anda member?</label><br />
            <select name="member" id="member">
                <option value="0">Tidak</option>
                <option value="1">Ya!</option>
            </select>
            <br>

            <input type="Submit" value="Oke" />
        </form>
    ';
    exit();
}

$nama_beli = $nama_barang[$_GET['barang']];
$harga_satuan = $harga_barang[$_GET['barang']];
$jumlah_barang = $_GET['jumlah'];
$member_toko = $_GET['member'];

echo '<h1>Anda membeli barang <span style="color:blue">' . $nama_beli . "</span> (Rp. " . $harga_satuan . "/pcs) sebanyak " . $jumlah_barang . " pcs.</h1>";

if($member_toko){
    echo "<h1>Subtotal Harga = <span style='color:red'>Rp. " . ($harga_satuan * $jumlah_barang) ."</span></h1>";
    echo "<h1>Karena anda member, ada diskon 5%!</h1>";
    echo "<h1>Total Bayar = <span style='color:green'>Rp. " . (0.95 * $harga_satuan * $jumlah_barang) ."</span></h1>";
}
else {
    echo "<h1>Total Bayar = <span style='color:red'>Rp. " . ($harga_satuan * $jumlah_barang) ."</span></h1>";
}

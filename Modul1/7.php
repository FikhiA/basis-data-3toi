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

if($_GET["input"] == null) {
    echo '
    <form action="" method="get">
        <label for="input">Masukkan kode resistor:</label><br>
        <input type="text" id="input" name="input" placeholder="3292" maxlength="4"><br>
        <input type="Submit" value="Oke" />
    </form>
    ';
    exit();
}

$input_resistor = $_GET["input"];

echo "<style>body {background-color: #d6d6d6;}</style>";

echo "<h1>Anda menginputkan angka " . $input_resistor . "</h1>";
echo "<h2>Gelang 1 berwarna <span style='color:" . $kode_warna[$input_resistor / 1000 % 10] . ";'>" . $kode_warna[$input_resistor / 1000 % 10] . "</span> </h2>";
echo "<h2>Gelang 2 berwarna <span style='color:" . $kode_warna[$input_resistor / 100 % 10] . ";'>" . $kode_warna[$input_resistor / 100 % 10] . "</span> </h2>";
echo "<h2>Gelang 3 berwarna <span style='color:" . $kode_warna[$input_resistor / 10 % 10] . ";'>" . $kode_warna[$input_resistor / 10 % 10] . "</span> </h2>";
echo "<h2>Gelang 4 berwarna <span style='color:" . $kode_warna[$input_resistor % 10] . ";'>" . $kode_warna[$input_resistor % 10] . "</span> </h2>";


?>
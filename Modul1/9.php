<?php

$randomized_data = array();

echo "<h1>Didapatkan data = ";

for($i = 0; $i < 5; $i++) {
    $randomized_data[$i] = rand(0, 1000);
    echo ($i != 4) ? ($randomized_data[$i] . ", ") : ($randomized_data[$i] . ".</h1>");
}

$sort_asc = $randomized_data;
sort($sort_asc);

echo "<h1>Diurutkan dari yang terkecil = ";
for($i = 0; $i < 5; $i++) {
    echo ($i != 4) ? ($sort_asc[$i] . ", ") : ($sort_asc[$i] . ".</h1>");
}

$sort_desc = $randomized_data;
rsort($sort_desc);

echo "<h1>Diurutkan dari yang terbesar = ";
for($i = 0; $i < 5; $i++) {
    echo ($i != 4) ? ($sort_desc[$i] . ", ") : ($sort_desc[$i] . ".</h1>");
}

echo '
    <button onclick="location.reload();">Random lagi!</button>
';

?> 
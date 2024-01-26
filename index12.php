<?php
$a = [
    ['nama' => 'Ban', 'diskon' => '10'],
    ['nama' => 'oli mesin'],
    ['nama' => 'kampas rem'],
    ['nama' => 'busi', 'diskon' => '9'],
    ['nama' => 'akumulator', 'diskon' => '7'],
];



    foreach ($a as $b) {
        if (isset($b['diskon'])) {
            echo "<br>" . "Nama: " . $b['nama'] . ", Diskon: " . $b['diskon'] . "%";
        }
    }

?>
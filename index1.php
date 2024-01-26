<?php
function hitung_imt($berat_badan, $tinggi_badan) {
    $tinggi_badan_m = $tinggi_badan / 100;
    $imt = $berat_badan / ($tinggi_badan_m ** 2);
    if ($imt < 16.5) {
        return "berat badan kurang.";
    } elseif ($imt >= 16.5 && $imt < 22.9) {
        return "berat badan normal.";
    } elseif ($imt >= 22.9 && $imt < 24.9) {
        return "berat badan lebih.";
    } else {
        return "obesitas.";
    }
}

echo hitung_imt(44,148);
?>
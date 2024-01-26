<?php
function ubah_hari($day) {
    $day = date('l', strtotime($day));
    if ($day == "Monday") {
        return "Senin";
    } else if ($day == "Tuesday") {
        return "Selasa";
    } else if ($day == "Wednesday") {
        return "Rabu";
    } else if ($day == "Thursday") {
        return "Kamis";
    } else if ($day == "Friday") {
        return "Jumat";
    } else if ($day == "Saturday") {
        return "Sabtu";
    } else if ($day == "Sunday") {
        return "Minggu";
    } else {
        return "Hari tidak valid";
    }
}
echo ubah_hari('2024-01-25');
?>
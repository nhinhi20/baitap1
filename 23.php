//Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
<?php
function kiemTraSoHoanHao($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}

// Số cần kiểm tra
$soCanKiemTra = 28;

if (kiemTraSoHoanHao($soCanKiemTra)) {
    echo "$soCanKiemTra là số hoàn hảo";
} else {
    echo "$soCanKiemTra không phải là số hoàn hảo";
}
?>

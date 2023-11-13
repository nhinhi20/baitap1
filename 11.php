//Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
<?php
function kiemTraArmstrong($number) {
    $sum = 0;
    $temp = $number;
    $n = strlen($number);

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $n);
        $temp = (int)($temp / 10);
    }

    if ($number == $sum) {
        return true;
    } else {
        return false;
    }
}

// Số cần kiểm tra
$soCanKiemTra = 153;

if (kiemTraArmstrong($soCanKiemTra)) {
    echo "$soCanKiemTra là số Armstrong";
} else {
    echo "$soCanKiemTra không phải là số Armstrong";
}
?>

// Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
<?php
function kiemTraSoNguyenTo($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Số cần kiểm tra
$soCanKiemTra = 17;

if (kiemTraSoNguyenTo($soCanKiemTra)) {
    echo "$soCanKiemTra là số nguyên tố";
} else {
    echo "$soCanKiemTra không phải là số nguyên tố";
}
?>

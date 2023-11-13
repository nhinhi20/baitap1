//Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
<?php
function kiemTraNguyenTo($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

function timSoNguyenToTrongKhoang($start, $end) {
    echo "Các số nguyên tố từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (kiemTraNguyenTo($i)) {
            echo $i . " ";
        }
    }
}

// Khoảng cần tìm số nguyên tố
$batDau = 10;
$kethuc = 30;

// Tìm số nguyên tố trong khoảng
timSoNguyenToTrongKhoang($batDau, $kethuc);
?>

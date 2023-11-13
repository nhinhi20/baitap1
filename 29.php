//Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
<?php
function kiemTraSoChinhPhuong($number) {
    // Kiểm tra số chính phương
    $sqrt = sqrt($number);
    return ($sqrt * $sqrt == $number);
}

function timSoChinhPhuongTrongKhoang($start, $end) {
    $soChinhPhuong = [];

    for ($i = $start; $i <= $end; $i++) {
        if (kiemTraSoChinhPhuong($i)) {
            $soChinhPhuong[] = $i;
        }
    }

    return $soChinhPhuong;
}

// Khoảng cần tìm số chính phương
$start = 1;
$end = 30;

$squareNumbers = timSoChinhPhuongTrongKhoang($start, $end);
echo "Các số chính phương từ $start đến $end là: " . implode(", ", $squareNumbers);
?>

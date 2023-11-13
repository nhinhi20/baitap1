// Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
<?php
function timSoDuongLonNhat($arr) {
    $maxPositive = null;

    foreach ($arr as $number) {
        if ($number > 0) { // Kiểm tra số dương
            if ($maxPositive === null || $number > $maxPositive) {
                $maxPositive = $number;
            }
        }
    }

    return $maxPositive;
}

// Mảng cần tìm số dương lớn nhất
$array = array(-10, -5, 8, 15, -3, 20);

// Tìm số dương lớn nhất trong mảng
$maxPositive = timSoDuongLonNhat($array);

if ($maxPositive !== null) {
    echo "Số dương lớn nhất trong mảng là: $maxPositive";
} else {
    echo "Không có số dương trong mảng.";
}
?>

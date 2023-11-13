//Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
<?php
function timSoLeLonNhat($arr) {
    $maxOdd = null;

    foreach ($arr as $number) {
        if ($number % 2 !== 0) { // Kiểm tra số lẻ
            if ($maxOdd === null || $number > $maxOdd) {
                $maxOdd = $number;
            }
        }
    }

    return $maxOdd;
}

// Mảng cần tìm số lẻ lớn nhất
$array = array(10, 7, 25, 18, 31, 42, 49);

// Tìm số lẻ lớn nhất trong mảng
$maxOdd = timSoLeLonNhat($array);

if ($maxOdd !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $maxOdd";
} else {
    echo "Không có số lẻ trong mảng.";
}
?>

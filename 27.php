// Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
<?php
function timSoAmLonNhat($arr) {
    $maxNegative = null;

    foreach ($arr as $number) {
        if ($number < 0) { // Kiểm tra số âm
            if ($maxNegative === null || $number > $maxNegative) {
                $maxNegative = $number;
            }
        }
    }

    return $maxNegative;
}

// Mảng cần tìm số âm lớn nhất
$array = array(10, -15, -8, -3, 5, -20);

// Tìm số âm lớn nhất trong mảng
$maxNegative = timSoAmLonNhat($array);

if ($maxNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $maxNegative";
} else {
    echo "Không có số âm trong mảng.";
}
?>

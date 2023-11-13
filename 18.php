//Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
<?php
// Mảng chứa các phần tử
$array = array("a", "b", "c", "c", "a");

// Đếm số lần xuất hiện của mỗi phần tử trong mảng
$soLanXuatHien = array_count_values($array);

// Phần tử cần kiểm tra số lần xuất hiện
$elementToCount = "a";

// Kiểm tra số lần xuất hiện của một phần tử cụ thể
if (isset($soLanXuatHien[$elementToCount])) {
    echo "Số lần xuất hiện của '$elementToCount' trong mảng là: " . $soLanXuatHien[$elementToCount];
} else {
    echo "'$elementToCount' không xuất hiện trong mảng";
}
?>

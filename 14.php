//Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
<?php
// Mảng chứa các phần tử
$array = array("mot", "ba", "hallo", "bon");

// Phần tử cần tìm vị trí
$element = "mot";

// Tìm vị trí của phần tử trong mảng
$position = array_search($element, $array);

if ($position !== false) {
    echo "Vị trí của phần tử '$element' trong mảng là: $position";
} else {
    echo "Không tìm thấy phần tử trong mảng";
}
?>

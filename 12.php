//Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
<?php
// Mảng ban đầu
$array = array("a", "b", "c", "d");

// Phần tử cần chèn
$new_element = "o";

// Vị trí muốn chèn phần tử mới
$position = 1;

// Sử dụng array_splice để chèn phần tử vào mảng
array_splice($array, $position, 0, $new_element);

// In ra mảng sau khi chèn phần tử mới
print_r($array);
?>

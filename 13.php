//Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
<?php
// Mảng ban đầu chứa các phần tử trùng lặp
$array = array("a", "b", "c", "a", "d", "b");

// Loại bỏ các phần tử trùng lặp
$unique_array = array_unique($array);

// In ra mảng sau khi loại bỏ phần tử trùng lặp
print_r($unique_array);
?>

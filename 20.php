//Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.

// Thêm vào đầu mảng
<?php
// Mảng ban đầu
$array = array("b", "c");

// Phần tử cần thêm vào đầu mảng
$new_element = "a";

// Thêm phần tử vào đầu mảng
array_unshift($array, $new_element);

// In ra mảng sau khi thêm vào đầu
print_r($array);
?>

//Thêm vào cuối mảng
<?php
// Mảng ban đầu
$array = array("a", "b");

// Phần tử cần thêm vào cuối mảng
$new_element = "c";

// Thêm phần tử vào cuối mảng
array_push($array, $new_element);

// In ra mảng sau khi thêm vào cuối
print_r($array);
?>

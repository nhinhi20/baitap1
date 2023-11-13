//Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
<?php
// Mảng cần sắp xếp
$numbers = array(4, 2, 8, 6, 3);

// Sắp xếp mảng theo thứ tự tăng dần
sort($numbers);

// In mảng sau khi sắp xếp
foreach ($numbers as $number) {
    echo $number . " ";
}
?>

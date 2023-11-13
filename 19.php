//Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
<?php
// Mảng cần sắp xếp
$numbers = array(5, 8, 9, 6, 3);

// Sắp xếp mảng theo thứ tự giảm dần
rsort($numbers);

// In mảng sau khi sắp xếp giảm dần
foreach ($numbers as $number) {
    echo $number . " ";
}
?>

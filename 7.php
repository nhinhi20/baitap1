//Viết chương trình PHP để tính giai thừa của một số nguyên dương.
<?php
function tinhGiaiThua($n) {
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * tinhGiaiThua($n - 1);
    }
}

// Số cần tính giai thừa
$so = 5;

// Tính giai thừa
$giaiThua = tinhGiaiThua($so);
echo "Giai thừa của $so là: $giaiThua";
?>

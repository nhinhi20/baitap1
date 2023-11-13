// Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
<?php
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function timBSCNN($a, $b) {
    return ($a * $b) / timUSCLN($a, $b);
}

// Hai số cần tìm USCLN và BSCNN
$so1 = 24;
$so2 = 36;

// Tìm USCLN và BSCNN
$uscln = timUSCLN($so1, $so2);
$bscnn = timBSCNN($so1, $so2);

echo "Ước số chung lớn nhất của $so1 và $so2 là: $uscln <br>";
echo "Bội số chung nhỏ nhất của $so1 và $so2 là: $bscnn";
?>

//Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
<?php
function inSoFibonacci($n) {
    $first = 0;
    $second = 1;

    if ($n <= 0) {
        return;
    }

    echo "Các số Fibonacci trong khoảng là: ";
    echo $first . " ";

    if ($n > 1) {
        echo $second . " ";
    }

    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second;
        echo $next . " ";
        $first = $second;
        $second = $next;
    }
}

// Số lượng số Fibonacci cần in trong khoảng
$soLuong = 10;

// In ra số Fibonacci trong khoảng
inSoFibonacci($soLuong);
?>

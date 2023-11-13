//Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
<?php
function kiemTraPalindrome($str) {
    // Loại bỏ khoảng trắng và chuyển đổi chuỗi thành chữ thường để so sánh dễ dàng hơn
    $str = strtolower(str_replace(' ', '', $str));

    // Đảo ngược chuỗi
    $reversedStr = strrev($str);

    // So sánh chuỗi ban đầu với chuỗi đảo ngược
    if ($str === $reversedStr) {
        return true;
    } else {
        return false;
    }
}

// Chuỗi cần kiểm tra
$string = "Hello world";

if (kiemTraPalindrome($string)) {
    echo "'$string' là chuỗi Palindrome";
} else {
    echo "'$string' không phải là chuỗi Palindrome";
}
?>

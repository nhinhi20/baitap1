// Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
<?php
function kiemTraChuoiCon($chuoiCon, $chuoiCha) {
    $viTri = strpos($chuoiCha, $chuoiCon);

    if ($viTri !== false) {
        return true;
    } else {
        return false;
    }
}

// Chuỗi cần kiểm tra
$chuoiCon = "abc";
// Chuỗi cha
$chuoiCha = "xyzabcde";

if (kiemTraChuoiCon($chuoiCon, $chuoiCha)) {
    echo "'$chuoiCon' là chuỗi con của '$chuoiCha'";
} else {
    echo "'$chuoiCon' không phải là chuỗi con của '$chuoiCha'";
}
?>

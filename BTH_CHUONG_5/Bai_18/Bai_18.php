<?php
$chuoi = "TRUONG DAI HỌC BẠC LIÊU";

$tu = explode(' ', $chuoi);

$tuDaiNhat = '';
$doDai = 0;

foreach ($tu as $t) {
    $doDaiTu = mb_strlen($t, 'UTF-8');
    
    if ($doDaiTu > $doDai) {
        $tuDaiNhat = $t;
        $doDai = $doDaiTu;
    }
}

echo "Từ dài nhất trong chuỗi là: $tuDaiNhat, có $doDai ký tự";
?>

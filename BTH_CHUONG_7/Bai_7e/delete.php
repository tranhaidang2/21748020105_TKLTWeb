<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Không thể kết nối đến cơ sở dữ liệu: " . mysqli_connect_error());
}

echo "Kết nối thành công<br>";

$strSql = "DELETE FROM `nhasanxuat` WHERE QuocGia='Nhật Bản' ";


if (mysqli_query($conn, $strSql)) {
    echo "Thêm thành công";
} else {
    echo "Không thể xóa " . $strSql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);


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


$strSql = "INSERT INTO `hanghoa`(`MaHang`, `TenHang`, `MaNSX`, `NamSX`, `Gia`) 
           VALUES ('HP0O', 'HP', 'AS', '2012', '545')";


if (mysqli_query($conn, $strSql)) {
    echo "Thêm thành công";
} else {
    echo "Không thể thêm " . $strSql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>

<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";

// Connect to MySQL database
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Không thể kết nối đến cơ sở dữ liệu: " . mysqli_connect_error());
}

echo "Kết nối thành công<br>";

// SQL query to insert data into the 'hanghoa' table
$strSql = "DELETE FROM `nhasanxuat` WHERE QuocGia='Nhật Bản' ";


if (mysqli_query($conn, $strSql)) {
    echo "Thêm thành công";
} else {
    echo "Không thể xóa " . $strSql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);


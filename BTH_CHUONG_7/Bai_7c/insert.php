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
$strSql = "INSERT INTO `hanghoa`(`MaHang`, `TenHang`, `MaNSX`, `NamSX`, `Gia`) 
           VALUES ('HP0O', 'HP', 'AS', '2012', '545')";

// Execute the query
if (mysqli_query($conn, $strSql)) {
    echo "Thêm thành công";
} else {
    echo "Không thể thêm " . $strSql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

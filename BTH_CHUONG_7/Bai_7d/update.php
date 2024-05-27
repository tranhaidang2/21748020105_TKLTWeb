<?php
    $servername = "localhost";
    $database = "quanlybanhang";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Khong the ket noi den co so du lieu". mysqli_connect_error();
    }
    echo "Ket noi thanh cong";

    $strSql = "UPDATE `hanghoa` SET `TenHang`='[Yamate]' WHERE `MaHang`='TO02'";
    $result = mysqli_query($conn, $strSql);
    if ($result) {
        echo "Cap nhat thanh cong";
    }
    else {
        echo "Khong the cap nhat";
    }
?>
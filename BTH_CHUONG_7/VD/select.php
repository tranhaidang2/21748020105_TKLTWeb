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

    $strSql = "SELECT MaHang, TenHang FROM hanghoa";
    if ($result = mysqli_query($conn, $strSql)) {
        if ($result->num_rows > 0) {
            echo " <table border='1' style='border-collapse: collapse'>
                <tr>
                    <th>
                        Mã hàng
                    </th>
                    <th> 
                        Tên hàng
                    </th>
                    
                </tr>
            ";
            while ($row = mysqli_fetch_array($result)) {
                echo "
                        <tr>
                            <td>".$row['MaHang']."</td>
                            <td>".$row['TenHang']."</td>
                        </tr>
                    ";
                // echo $row['MaHang'];
                // echo $row['TenHang'];
                // echo $row['MaNSX'];
                // echo $row['NamSX'];
                // echo $row['Gia'];
            
            }
            mysqli_free_result($result);
        } 
        else 
        {
            echo 'No record';
        }
    }
    else 
    {
        echo 'Truy van that bai'.mysqli_error($conn);
    }
    mysqli_close($conn);

?>
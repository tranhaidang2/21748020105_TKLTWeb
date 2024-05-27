<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2b</title>
</head>
<body>
    <form action="Bai_2b.php" method="POST">
        <input type="text" name="txtName">
        <br>
        <input type="text" name="txtBirth">
        <br>
        <input type="text" name="txtClass">
        <br>
        <input type="text" name="txtPoint">
        <br>
        <input type="submit" name="Submit">
    </form>

    <?php 
        if(isset($_POST["Submit"])) {
            $hovaten = $_POST["txtName"];
            $ngaysinh = $_POST["txtBirth"];
            $lop = $_POST["txtClass"];
            $diem = $_POST["txtPoint"];
            echo "Họ và tên: $hovaten <br>";
            echo "Ngày sinh: $ngaysinh <br>";
            echo "Lớp: $lop <br>";
            echo "Điểm: $diem <br>";
        }
    ?>
</body>
</html>

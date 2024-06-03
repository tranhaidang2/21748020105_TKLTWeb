<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Menu Chức Năng</title>
</head>
<body>
    <form method="post">
        <label for="option">Chọn một lựa chọn:</label>
        <select name="option" id="option">
            <option value="1">Nhập danh sách các số nguyên</option>
            <option value="2">Tìm số lớn nhất trong danh sách</option>
            <option value="3">Tìm số nhỏ nhất trong danh sách</option>
            <option value="4">Tìm số chính phương trong danh sách</option>
            <option value="5">In ra các số chẵn trong danh sách</option>
            <option value="6">In ra các số lẻ trong danh sách</option>
            <option value="7">Sắp xếp mảng tăng dần</option>
        </select>
        <br><br>
        <label for="numbers">Nhập các số nguyên (ngăn cách bằng khoảng trắng):</label>
        <input type="text" name="numbers" id="numbers" placeholder="Nhập các số nguyên">
        <br><br>
        <button type="submit">Thực hiện</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $option = intval($_POST['option']);
        $numbers = isset($_POST['numbers']) ? array_map('intval', explode(' ', trim($_POST['numbers']))) : [];

        function isPerfectSquare($num) {
            $sqrt = sqrt($num);
            return ($sqrt == floor($sqrt));
        }

        switch ($option) {
            case 1:
                echo "Danh sách các số nguyên đã nhập: " .$numbers . "<br>";
                break;
            case 2:
                if (!empty($numbers)) {
                    echo "Số lớn nhất là: " . max($numbers) . "<br>";
                } else {
                    echo "Danh sách trống.<br>";
                }
                break;
            case 3:
                if (!empty($numbers)) {
                    echo "Số nhỏ nhất là: " . min($numbers) . "<br>";
                } else {
                    echo "Danh sách trống.<br>";
                }
                break;
            case 4:
                if (!empty($numbers)) {
                    echo "Các số chính phương trong danh sách là: ";
                    $perfectSquares = array_filter($numbers, 'isPerfectSquare');
                    echo implode(' ', $perfectSquares) . "<br>";
                } else {
                    echo "Danh sách trống.<br>";
                }
                break;
            case 5:
                if (!empty($numbers)) {
                    echo "Các số chẵn trong danh sách là: ";
                    $evenNumbers = array_filter($numbers, fn($num) => $num % 2 == 0);
                    echo implode(' ', $evenNumbers) . "<br>";
                } else {
                    echo "Danh sách trống.<br>";
                }
                break;
            case 6:
                if (!empty($numbers)) {
                    echo "Các số lẻ trong danh sách là: ";
                    $oddNumbers = array_filter($numbers, fn($num) => $num % 2 != 0);
                    echo implode(' ', $oddNumbers) . "<br>";
                } else {
                    echo "Danh sách trống.<br>";
                }
                break;
            case 7:
                if (!empty($numbers)) {
                    sort($numbers);
                    echo "Mảng sau khi sắp xếp tăng dần: " . implode(' ', $numbers) . "<br>";
                } else {
                    echo "Danh sách trống.<br>";
                }
                break;
            default:
                echo "Lựa chọn không hợp lệ. Vui lòng chọn lại.<br>";
        }
    }
    ?>
</body>
</html>

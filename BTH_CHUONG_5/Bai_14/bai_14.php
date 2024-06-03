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
            <option value="1">Nhập danh sách các số nguyên vào mảng hai chiều</option>
            <option value="2">Tìm số lớn nhất trong ma trận</option>
            <option value="3">Tìm số nhỏ nhất trong ma trận</option>
            <option value="4">Tổng các số trong ma trận</option>
            <option value="5">In ra màn hình các phần tử trong ma trận</option>
        </select>
        <br><br>
        <label for="matrix">Nhập ma trận (mỗi hàng ngăn cách bởi dấu chấm phẩy, mỗi số ngăn cách bởi dấu cách):</label>
        <textarea name="matrix" id="matrix" rows="5" cols="50" placeholder="Nhập ma trận"><?php echo isset($_POST['matrix']) ? htmlspecialchars($_POST['matrix']) : ''; ?></textarea>
        <br><br>
        <button type="submit">Thực hiện</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $option = intval($_POST['option']);
        $matrixInput = isset($_POST['matrix']) ? trim($_POST['matrix']) : '';

        function parseMatrix($matrixInput) {
            $matrix = [];
            $rows = explode(';', $matrixInput);
            foreach ($rows as $row) {
                $matrix[] = array_map('intval', explode(' ', trim($row)));
            }
            return $matrix;
        }

        function findMax($matrix) {
            $max = 0;
            foreach ($matrix as $row) {
                foreach ($row as $value) {
                    if ($value > $max) {
                        $max = $value;
                    }
                }
            }
            return $max;
        }

        function findMin($matrix) {
            $min = 0;
            foreach ($matrix as $row) {
                foreach ($row as $value) {
                    if ($value < $min) {
                        $min = $value;
                    }
                }
            }
            return $min;
        }
        function sumMatrix($matrix) {
            $sum = 0;
            foreach ($matrix as $row) {
                foreach ($row as $value) {
                    $sum += $value;
                }
            }
            return $sum;
        }

        function printMatrix($matrix) {
            foreach ($matrix as $row) {
                echo implode(' ', $row) . "<br>";
            }
        }

        $matrix = parseMatrix($matrixInput);

        switch ($option) {
            case 1:
                echo "Ma trận đã nhập:<br>";
                printMatrix($matrix);
                break;
            case 2:
                echo "Số lớn nhất trong ma trận là: " . findMax($matrix) . "<br>";
                break;
            case 3:
                echo "Số nhỏ nhất trong ma trận là: " . findMin($matrix) . "<br>";
                break;
            case 4:
                echo "Tổng các số trong ma trận là: " . sumMatrix($matrix) . "<br>";
                break;
            case 5:
                echo "Các phần tử trong ma trận:<br>";
                printMatrix($matrix);
                break;
            default:
                echo "Lựa chọn không hợp lệ. Vui lòng chọn lại.<br>";
        }
    }
    ?>
</body>
</html>

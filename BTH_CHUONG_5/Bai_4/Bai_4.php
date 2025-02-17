<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 400px;
            height: 300px;
            border: 1px solid black;
            border-radius: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: aliceblue;
        }

        .header {
            text-align: center;
        }
        input[type='text'] {
            height: 40px;
            margin: 5px;
            border-radius: 7px;
            border: 1px solid black;
        }
        
        .button-control {
            text-align: center;
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin: 10px auto;
        }
        button {
            height: 30px;
            width: 100px;
            border-radius: 7px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="get">
            <div class="header">
                <h3>TÍNH TOÁN SỐ HỌC</h3>
            </div>
            <div class="tinh">
                <label for="so1">Số thứ 1</label>
                <input type="text" name="so1" value="<?php echo isset($_GET['so1']) ? htmlspecialchars($_GET['so1']) : '' ?>">
                <br>
                <label for="so2">Số thứ 2</label>
                <input type="text" name="so2" value="<?php echo isset($_GET['so2']) ? htmlspecialchars($_GET['so2']) : '' ?>"><br>
                <label for="kq">Kết quả</label>
                <?php
                    if (isset($_GET['so1']) && isset($_GET['so2']) && isset($_GET['operation'])) {
                        $so1 = isset($_GET['so1']) ? intval($_GET['so1']) : 0;
                        $so2 = isset($_GET['so2']) ? intval($_GET['so2']) : 0;
                        $operation = $_GET['operation'];

                        switch ($operation) {
                            case 'cong':
                                $so3 = $so1 + $so2;
                                break;
                            case 'tru':
                                $so3 = $so1 - $so2;
                                break;
                            case 'nhan':
                                $so3 = $so1 * $so2;
                                break;
                            case 'chia':
                                if ($so2 != 0) {
                                    $so3 = $so1 / $so2;
                                } else {
                                    $so3 = 'Không thể chia cho 0';
                                }
                                break;
                            default:
                                $so3 = 'Invalid operation';
                                break;
                        }
                        echo "<input value='{$so3}' type='text' disabled/>";
                    } else {
                        echo "<input placeholder='Vui lòng nhập số và chọn phép tính' type='text' disabled/>";
                    }
                ?>
            </div>
            <div class="button-control">
                <button type="submit" name="operation" value="cong">Cộng</button> 
                <button type="submit" name="operation" value="tru">Trừ</button> 
                <button type="submit" name="operation" value="nhan">Nhân</button> 
                <button type="submit" name="operation" value="chia">Chia</button> 
            </div>  
        </form>
    </div>
</body>
</html>

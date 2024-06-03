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
                        $so1 = $_GET['so1'];
                        $so2 = $_GET['so2'];
                        $operation = $_GET['operation'];
                        if (is_numeric($so1) && is_numeric($so2)) {
                            $so1 = (int) $so1;
                            $so2 = (int) $so2;

                            function gcd($a, $b) {
                                while ($b != 0) {
                                    $t = $b;
                                    $b = $a % $b;
                                    $a = $t;
                                }
                                return $a;
                            }

                            function lcm($a, $b) {
                                return ($a * $b) / gcd($a, $b);
                            }

                            switch ($operation) {
                                case 'gcd':
                                    $so3 = gcd($so1, $so2);
                                    echo "<input value='{$so3}' type='text'/>";
                                    break;
                                case 'lcm':
                                    $so3 = lcm($so1, $so2);
                                    echo "<input value='{$so3}'type='text' />";
                                    break;
                                default:
                                    $so3 = 'Invalid operation';
                                    echo "<input value='{$so3}'type='text' />";
                                    break;
                            }
                        } else {
                $so3 = 'Invalid input';
            }
        }
    ?>
            </div>
            <div class="button-control">
                <button type="submit" name="operation" value="gcd">USCLN</button> 
                <button type="submit" name="operation" value="lcm">BSCNN</button> 
            </div>  
        </form>
    </div>
    
</body>
</html>

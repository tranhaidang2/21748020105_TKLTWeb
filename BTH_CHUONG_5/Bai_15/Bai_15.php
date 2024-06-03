<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCM</title>
</head>
<body>
    <form action="" method="get">
        <label for="string">Chuỗi:</label>
        <input type="text" name="string" required>
        <br/>
        <label for="char">Ký tự:</label>
        <input type="text" name="char" required maxlength="1">
        <br/>
        <button name="find" type="submit">Tính số lần xuất hiện</button>
    </form>
    
    <?php 
        if ( isset($_GET['find']) ) {
            $string = $_GET['string'];
            $char = $_GET['char'];
            $count = 0;

            for ($i = 0; $i < strlen($string); $i++) {
                if ($char == $string[$i]) {
                    $count++;
                }
            }
            echo "Số lần xuất hiện của ký tự '$char' trong chuỗi là: $count";
        }
    ?>
</body>
</html>

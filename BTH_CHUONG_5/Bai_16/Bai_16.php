<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
        <label for="string">Chuỗi:</label>
        <input type="text" name="string" required>
        <br/>
        <br/>
        <button name="daonguoc" type="submit">Đảo ngược</button>
    </form>
</body>
    <?php 
        if (isset($_GET["daonguoc"])) {
            $string = $_GET["string"];
            $new_String = "";

            for ($i = strlen($string) - 1; $i >= 0; $i--) {
                $new_StringString .= $string[$i];
            }
            echo "Chuỗi sau khi đảo ngược: " . $new_String;
        }
    ?>
</html>
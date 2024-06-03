<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Số n</th>
            <th>Số n<sup>2</sup></th>
        </tr>
        <?php 
            $n = 0;
            while ($n <= 50) {
                $nn = $n * $n;
                echo "
                    <tr>
                        <td>$n</td>
                        <td>$nn</td>
                    </tr>
                ";
                $n++;
            }
        ?>
    </table>
</body>
</html>

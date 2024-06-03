<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        .chessboard {
            display: flex;
            flex-wrap: wrap;
            width: 400px; 
            background-color: bisque;  
            border: 1px solid black;
        }

        .square {
            width: 50px;
            height: 50px;
        }

        .black {
            background-color: black;
        }
    </style>
</head>
<body>
<div class="chessboard">
    <?php
    for ($row = 1; $row <= 8; $row++) {
        for ($col = 1; $col <= 8; $col++) {
            $_black = ($row + $col) % 2 == 0;
            echo "<div class='square " . ($_black ? 'black' : '') . "'></div>";
        }
    }
    ?>
</div>
</body>
</html>

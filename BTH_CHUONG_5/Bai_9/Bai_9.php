<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Tables</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 70%;
            background-color: grey;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            text-align: justify;
        }

        .row {
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 10px;
        }

        .column {
            width: 10%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <?php 
        function bbc($start, $end) {
            for ($n = $start; $n <= $end; $n++) {
                echo "<div class='column'>";
                for ($i = 1; $i <= 10; $i++) {
                    $result = $n * $i;
                    echo "<div>$n x $i = $result</div>";
                }
                echo "</div>";
            }
        }
        
        echo "<div class='row'>";
        bbc(1, 5);
        echo "</div>";

        echo "<div class='row'>";
        bbc(6, 10); 
        echo "</div>";
        ?>
    </div>
</body>
</html>

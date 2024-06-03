<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $i = 0;
        for ($i = 1; $i < 101; $i++) {
            
            if ($i %2== 1) {
                echo"<p> $i </p>";
            }
            if ($i %2== 0) {
                echo"<p><b> $i </b></p>";
            }
            
        }
    ?>
</body>
</html>
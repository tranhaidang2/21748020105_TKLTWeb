<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php 
    do {
        $a = rand();
        $b = rand();
    } while ($a < $b);
    
    echo $a + $b;
    echo "<br>";
    echo $a - $b;
    echo "<br>";
    echo $a * $b;
    echo "<br>";
    echo $a / $b;
    echo "<br>";

?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colored Divs</title>
</head>
<body style="width:100vw; height:100vh; display: flex;">

<?php 
$color = ["black", "blue", "green", "red", "brown", "magenta"];

for ($i = 0; $i < count($color); $i++) { 
    echo "
        <div style='width:20%; height: 100%; background-color: $color[$i];'>
        </div>
    ";
}
?>

</body>
</html>

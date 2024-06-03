<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn năm</title>
</head>
<body>
    <form method="post">
        <label for="years">Chọn năm:</label>
        <select name="years" id="years">
            <?php
            function GetYear() {
                $currentYear = date("Y");
                for ($year = 1900; $year <= $currentYear; $year++) {
                    echo "<option value='$year'>$year</option>";
                }
            }
            GetYear();
            ?>
        </select>
        <input type="submit" value="Chọn">
    </form>
</body>
</html>

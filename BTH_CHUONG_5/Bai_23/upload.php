<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body {
            background-color: aquamarine;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            font-weight: bold;
            color: maroon;
            margin-bottom: 10px;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>File Upload</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <input type="file" name="fileUpload" style="margin-bottom: 10px;">
            <br>
            <input type="submit" name="up" value="Upload" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
        </form>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['up']) && isset($_FILES['fileUpload'])) {
            $Thumuc = 'Tailieu/';
            $uploadFile = $Thumuc . basename($_FILES['fileUpload']['name']);
            
            if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadFile)) {
                echo "<h2>Upload success</h2>";
                echo '<p><strong>Đường dẫn:</strong> ' . $uploadFile . '</p>';
                echo '<p><strong>Loại file:</strong> ' . $_FILES['fileUpload']['type'] . '</p>';
                echo '<p><strong>Kích thước file:</strong> ' . (int)$_FILES['fileUpload']['size'] / 1024 . ' KB</p>';
            } else {
                echo "<p class='error'>Lỗi.</p>";
            }
        }
        ?>
    </div>
</body>
</html>

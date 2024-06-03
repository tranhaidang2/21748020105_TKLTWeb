<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }
        ul li {
            margin-top: 10px;
            color: #555;
        }
        ul li.file-info {
            font-weight: bold;
            color: #e74c3c;
            text-transform: uppercase;
        }
        ul li.detail-info {
            margin-left: 20px;
            color: #333;
        }
        .error {
            color: #e74c3c;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Success</h1>
        <?php
        $uploadDirectory = 'BoSuuTap/';
        foreach($_FILES['myfile']['error'] as $key => $error) {
            if ($error == 0) {
                $temporaryName = $_FILES['myfile']['tmp_name'][$key];
                $fileName = $_FILES['myfile']['name'][$key];
                $uploadedFilePath = $uploadDirectory . $fileName;
                if (move_uploaded_file($temporaryName, $uploadedFilePath)) {
                    echo "<ul>";
                    echo "<li class='file-info'>File " . ($key + 1) . ":</li>";
                    echo "<ul class='detail-info'>";
                    echo "<li>Đường dẫn: " . $uploadedFilePath . "</li>";
                    echo "<li>Loại file: " . $_FILES['myfile']['type'][$key] . "</li>";
                    echo "<li>Kích thước file: " . (int)$_FILES['myfile']['size'][$key] / 1024 . " KB</li>";
                    echo "</ul>";
                    echo "</ul>";
                } else {
                    echo "<p class='error'>Lỗi</p>";
                }
            }
        }
        ?>
    </div>
</body>
</html>

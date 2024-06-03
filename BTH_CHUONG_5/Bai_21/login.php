<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
        }

        h1 {
            font-size: 30px;
            text-align: center;
            margin: 0 0 20px;
            color: #333;
        }

        p {
            font-size: 18px;
            text-align: center;
            margin-top: 20px;
            color: #555;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <?php
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {        
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $file_path = "USER.ini";

            $users = parse_ini_file('USER.ini', true);

            $login_valid = false;
            foreach ($users as $user) 
            {
                if ($user['username'] == $username && $user['email'] == $email && $user['password'] == $password) 
                {
                    $_SESSION['username'] = $username;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $login_valid = true;
                    break;
                }
            }

            if ($login_valid) 
            {
                echo '<h1>Trang xử lý thông tin đăng nhập</h1>';
                echo "<p>Thông tin đăng nhập hợp lệ</p>";
                echo '<form action="mainpage.php" method="GET">';
                    echo '<input type="submit" value="Trang chính">';
                echo '</form>';
            } 
            else 
            {
                echo '<h1>Trang xử lý thông tin đăng nhập</h1>';
                echo "<p>Thông tin đăng nhập không hợp lệ</p>";
            }
        }
        ?>
    </div>
</body>
</html>

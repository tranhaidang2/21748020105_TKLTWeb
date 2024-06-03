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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 300px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"],
        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"],
        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form action="" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="Matkhau" placeholder="Mật khẩu" required>
            <input type="text" name="ma_so" placeholder="Mã số" required>
            <input type="submit" value="Đăng nhập">
        </form>
        <button type="button">Đăng ký</button>
    </div>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] . "@blu.edu.vn";
    $password = $_POST['Matkhau'];
    $ma_so = $_POST['ma_so'];

    $users = parse_ini_file('user.ini', true);

    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password && $user['ma_so'] === $ma_so) {
            setcookie('user_email', $email, time() + 180);
            echo "<p style='text-align: center; color: green;'>Đăng nhập thành công!</p>";
            exit;
        }
    }

    echo "<p style='text-align: center; color: red;'>Thông tin đăng nhập không đúng!</p>";
}
?>

</html>

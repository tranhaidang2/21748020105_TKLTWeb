<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chính</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main-container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 600px;
            text-align: center;
        }

        h1 {
            font-size: 30px;
            margin: 0 0 20px;
            color: #333;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }

        .logout-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <?php
        session_start();

        if (!isset($_SESSION['username']) || !isset($_SESSION['email']) || !isset($_SESSION['password'])) 
        {
            header('Location: login.html');
            exit();
        }

        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        ?>

        <h1>Xin chào <?php echo $username; ?>!</h1>
        <p>Bạn đã đăng nhập thành công với địa chỉ email <?php echo $email; ?></p>

    </div>
</body>
</html>

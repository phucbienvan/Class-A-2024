<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: #ffffff;
            padding: 40px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-form h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color: #45a049;
        }

        .login-form .forgot-password {
            display: block;
            margin-top: 10px;
            color: #888888;
            text-decoration: none;
            font-size: 14px;
        }

        .login-form .forgot-password:hover {
            color: #333333;
        }
    </style>
</head>
<body>

<div class="login-form">
    <h2>LOGIN</h2>
    @if (session('loginErorr'))
        <p style="color: red;">Invalid email or password!</p>
    @endif
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Passwowrd" required>
        <button type="submit">Login</button>
        <a href="#" class="forgot-password">Quên mật khẩu?</a>
    </form>
</div>

</body>
</html>

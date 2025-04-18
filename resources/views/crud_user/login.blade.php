@extends('dashboard')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }

    .menu {
        border: 1px solid black;
        padding: 10px;
        margin: 10px;
    }

    .menu a {
        text-decoration: none;
        color: black;
    }

    .login-box {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .login-box input {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .username-box,
    .password-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .remember-me {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .remember-me input {
        width: 10%;
    }

    .forgot-password {
        text-align: left;
        display: block;
        margin-top: 10px;
    }

    .login-btn {
        background-color: blue;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .footer {
        border: 1px solid black;
        padding: 10px;
        margin: 10px;
    }

    .login {
        display: flex;
        justify-content: end;
        margin-top: 20px;
    }

    .login a {
        text-decoration: none;
        color: blue;
    }
</style>



<div class="login-box">
    <h2>Màn hình đăng nhập</h2>
    <form action="{{ route('user.authUser') }}" method="POST">
        @csrf
        <div class="username-box">
            <label>Email</label>
            <input type="text" name="email" required>
        </div>

        <div class="password-box">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <div class="remember-me">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Ghi nhớ đăng nhập</label>
        </div>

        <div class="login">
            <a href="#" class="forgot-password">Quên mật khẩu</a>
            <button type="submit" class="login-btn" style="margin-left: 10px">Đăng nhập</button>
        </div>

    </form>
</div>

<div class="footer">
    Lập trình web @01/2024
</div>
@endsection

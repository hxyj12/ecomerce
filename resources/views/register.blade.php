<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            text-align: center;
        }

        .register-container h2 {
            color: #333;
            margin-bottom: 30px;
        }

        .register-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 8px;
            font-size: 16px;
        }

        .form-group button {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .form-group .login-link {
            text-align: left;
            margin-top: 10px;
            color: #555;
        }

        .form-group .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .form-group .login-link a:hover {
            text-decoration: underline;
        }
        .small-text{
            font-size: 10px;
            color: red;
            padding: 5px;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register</h2>
    <form class="register-form" action="/register" method="post">
        @csrf
        <div class="form-group">
            <label for="username">Name:</label>
            <input type="text" id="username" name="name" >
            @error('name')
                <p class="small-text">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            @error('email')
                <p class="small-text">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            @error('password')
                <p class="small-text">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Confirm Password:</label>
            <input type="password" id="password" name="password_confirmation" >
        </div>

        <div class="form-group">
            <button type="submit">Register</button>
        </div>

        <div class="form-group login-link">
            <span>Already have an account? </span><a href="/login">Login here</a>
        </div>
    </form>
</div>

</body>
</html>

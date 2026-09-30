<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login - Warehouse</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f4f7fb;
        }

        .login-box {
            width: 90%;
            max-width: 420px;
            background: white;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h1 {
            text-align: center;
            color: #14213d;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #374151;
        }

        input {
            width: 100%;
            padding: 13px;
            margin-bottom: 20px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            outline: none;
        }

        input:focus {
            border-color: #14213d;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 9px;
            background: #14213d;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #6b7280;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="login-box">

        <h1>Admin Login</h1>

        <p class="subtitle">
            Login to manage aircraft parts
        </p>

        <form>

            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                placeholder="Enter username"
            >

            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter password"
            >

            <button type="submit">
                Login
            </button>

        </form>

        <a href="<?php echo e(route('access')); ?>" class="back">
            ← Back to Access
        </a>

    </div>

</body>
</html><?php /**PATH C:\Users\azidw\indo-aero\resources\views/admin/login.blade.php ENDPATH**/ ?>
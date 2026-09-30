<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Access - Warehouse</title>

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
            align-items: center;
            justify-content: center;
            background: #f4f7fb;
        }

        .access-container {
            width: 90%;
            max-width: 900px;
            text-align: center;
        }

        .logo {
            width: 90px;
            height: 90px;
            object-fit: contain;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 32px;
            color: #14213d;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #6b7280;
            margin-bottom: 40px;
        }

        .access-options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .access-card {
            background: white;
            padding: 40px 30px;
            border-radius: 18px;
            text-decoration: none;
            color: inherit;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: 0.3s ease;
            border: 1px solid #e5e7eb;
        }

        .access-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .icon {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .access-card h2 {
            color: #14213d;
            margin-bottom: 10px;
        }

        .access-card p {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .button {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 10px;
            background: #14213d;
            color: white;
            font-weight: bold;
        }

        @media (max-width: 700px) {
            .access-options {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 26px;
            }
        }
    </style>
</head>

<body>

    <div class="access-container">

        
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Warehouse Logo" class="logo">

        <h1>Welcome to Warehouse</h1>
        <p class="subtitle">Choose how you want to access the system</p>

        <div class="access-options">

            
            <a href="<?php echo e(route('home')); ?>" class="access-card">

                <div class="icon">👤</div>

                <h2>Continue as Guest</h2>

                <p>
                    Browse aircraft parts and view company contact information
                    without an account.
                </p>

                <span class="button">
                    Enter as Guest
                </span>

            </a>


            
            <a href="<?php echo e(route('admin.login')); ?>" class="access-card">

                <div class="icon">🔐</div>

                <h2>Login as Admin</h2>

                <p>
                    Access the administration dashboard to manage aircraft
                    part information.
                </p>

                <span class="button">
                    Admin Login
                </span>

            </a>

        </div>

    </div>

</body>
</html><?php /**PATH C:\Users\azidw\indo-aero\resources\views/access.blade.php ENDPATH**/ ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up Successful!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: grey;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: orange;
            margin-bottom: 1rem;
        }
        p {
            color: #333;
            margin-bottom: 1.5rem;
        }
        .btn {
            display: inline-block;
            background-color: orange;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Sign Up Successful!</h1>
        <p>Your account has been created successfully. You can now log in to access your account.</p>
        <a href="login.php" class="btn">Go to Login Page</a>
    </div>
</body>
</html>
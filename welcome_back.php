<?php
    session_start();
    if(!isset($_SESSION['name'])) {
        header("Location: login.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Back!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: grey;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }
      .welcome-container {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        text-align: center;
        max-width: 400px;
        width: 90%;
      }
      h1 {
        color: orange;
        margin-bottom: 1rem;
      }
      .user-name {
        font-weight: bold;
        color: #28a745;
      }
      .home-link {
        display: inline-block;
        margin-top: 1rem;
        padding: 0.5rem 1rem;
        background-color: orange;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }
      .home-link:hover {
        background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="welcome-container">
      <h1>Welcome Back!</h1>
      <p class="lead">We're glad to see you again, <span class="user-name"><?php echo htmlspecialchars($_SESSION['name']); ?></span>!</p>
      <a href="index.php" class="home-link">Return to Home Page</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


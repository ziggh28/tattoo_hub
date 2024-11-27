<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Successful! - Tattoo Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa;
      }
      .success-icon {
        font-size: 4rem;
        color: #28a745;
      }
      .user-name {
        font-weight: bold;
        color: #007bff;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-body text-center p-5">
              <div class="success-icon mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
              </div>
              <h1 class="display-4 mb-4">Login Successful!</h1>
              <p class="lead mb-4">Welcome back, <span class="user-name"><?php echo htmlspecialchars($_SESSION['name']); ?></span>!</p>
              <p class="mb-4">We're excited to have you here. Explore the latest tattoo designs and connect with talented artists.</p>
              <a href="index.php" class="btn btn-primary btn-lg">Go to Home Page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


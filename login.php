<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/login.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
    <div id="navbar-placeholder"></div>
    <div class="login-container">
        <div class="card">
            <h1>Login</h1>
            <p>Enter your email and password to access your account</p>
            <form id="loginForm" class="login-form">
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="m@example.com" required>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    Login
                </button>
            </form>
            <div class="separator">Or continue with</div>
            <div id="g_id_onload"
                 data-client_id="YOUR_GOOGLE_CLIENT_ID"
                 data-context="signin"
                 data-ux_mode="popup"
                 data-callback="handleCredentialResponse"
                 data-auto_prompt="false">
            </div>

            <div class="g_id_signin"
                 data-type="standard"
                 data-shape="rectangular"
                 data-theme="outline"
                 data-text="signin_with"
                 data-size="large"
                 data-logo_alignment="left">
            </div>
            <p class="register-link">
                Don't have an account? <a href="/sign_up_page.html">Register here</a>
            </p>
        </div>
    </div>
    <script src="functions/sign_in.js"></script>
    <script>
        function handleCredentialResponse(response) {
            // Handle the Google Sign-In response here
            console.log("Encoded JWT ID token: " + response.credential);
            // You can send this token to your server for verification
        }
        // Load the navbar
        fetch('navbar.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    <div id="footer-placeholder"></div>
    <script>
        fetch('footer.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            });
    </script>
</body>
</html>
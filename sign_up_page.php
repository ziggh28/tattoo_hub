<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Hub - Client Sign Up</title>
    <link rel="stylesheet" href="styles/sign_up_client.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script src="scripts.js" defer></script>
</head>
<body>
    <div class="signup-container">
        <h1>Sign up for Tattoo Hub</h1>
        <form action="sign_up_action.php" method="POST" id="signup-form">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter Username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-input-wrapper">
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    <button type="button" class="password-toggle" data-target="password">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
                <div class="password-strength">
                    <div id="password-strength-text"></div>
                    <div class="strength-meter">
                        <div id="strength-meter-fill" class="strength-meter-fill"></div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="re-password">Re-enter Password</label>
                <div class="password-input-wrapper">
                    <input type="password" id="re-password" name="re-password" placeholder="Re-enter password" required>
                    <button type="button" class="password-toggle" data-target="re-password">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <button type="submit" name="submit">Sign Up</button>
        </form>
        <a id="login_link" href="login_page.php">Already have an account? Log In</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('signup-form');
            const passwordInput = document.getElementById('password');
            const rePasswordInput = document.getElementById('re-password');
            const strengthMeter = document.getElementById('strength-meter-fill');
            const strengthText = document.getElementById('password-strength-text');

            function checkPasswordStrength(password) {
                let strength = 0;
                if (password.length >= 8) strength++;
                if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
                if (password.match(/\d/)) strength++;
                if (password.match(/[^a-zA-Z\d]/)) strength++;

                switch (strength) {
                    case 0:
                    case 1:
                        strengthMeter.style.width = '25%';
                        strengthMeter.className = 'strength-meter-fill weak';
                        strengthText.textContent = 'Weak';
                        break;
                    case 2:
                        strengthMeter.style.width = '50%';
                        strengthMeter.className = 'strength-meter-fill medium';
                        strengthText.textContent = 'Medium';
                        break;
                    case 3:
                        strengthMeter.style.width = '75%';
                        strengthMeter.className = 'strength-meter-fill strong';
                        strengthText.textContent = 'Strong';
                        break;
                    case 4:
                        strengthMeter.style.width = '100%';
                        strengthMeter.className = 'strength-meter-fill strong';
                        strengthText.textContent = 'Very Strong';
                        break;
                }
            }

            passwordInput.addEventListener('input', () => checkPasswordStrength(passwordInput.value));

            form.addEventListener('submit', function(event) {
                if (passwordInput.value !== rePasswordInput.value) {
                    event.preventDefault();
                    alert('Passwords do not match. Please try again.');
                }
            });

            // Password toggle functionality
            document.querySelectorAll('.password-toggle').forEach(button => {
                button.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const passwordInput = document.getElementById(targetId);
                    const icon = this.querySelector('i');

                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        passwordInput.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });
        });

        function closeModal() {
            document.getElementById('loginModal').style.display = 'none';
        }
    </script>
</body>
</html>


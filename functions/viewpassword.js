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
});


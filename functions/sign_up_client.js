function togglePasswordVisibility(inputId) {
    const passwordInput = document.getElementById(inputId);
    const icon = passwordInput.nextElementSibling;

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    }
}

function calculatePasswordStrength(password) {
    let strength = 0;
    if (password.length > 6) strength += 20;
    if (password.match(/[a-z]+/)) strength += 20;
    if (password.match(/[A-Z]+/)) strength += 20;
    if (password.match(/[0-9]+/)) strength += 20;
    if (password.match(/[$@#&!]+/)) strength += 20;
    return strength;
}

function updatePasswordStrength(strength) {
    const strengthBar = document.getElementById('strength-bar-fill');
    const strengthText = document.getElementById('strength-text');

    strengthBar.style.width = strength + '%';

    if (strength <= 20) {
        strengthBar.style.backgroundColor = '#ff4d4d';
        strengthText.textContent = 'Weak';
        strengthText.style.color = '#ff4d4d';
    } else if (strength <= 60) {
        strengthBar.style.backgroundColor = '#ffd633';
        strengthText.textContent = 'Medium';
        strengthText.style.color = '#ffd633';
    } else {
        strengthBar.style.backgroundColor = '#5cd65c';
        strengthText.textContent = 'Strong';
        strengthText.style.color = '#5cd65c';
    }
}

document.getElementById('password').addEventListener('input', function() {
    const strength = calculatePasswordStrength(this.value);
    updatePasswordStrength(strength);
});


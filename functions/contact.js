document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact-form');
    const messageDiv = document.getElementById('message');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const messageText = document.getElementById('message-text').value;

        if (name && email && subject && messageText) {
            // Here you would typically send the form data to a server
            // For this example, we'll just show a success message
            messageDiv.style.display = 'block';
            messageDiv.style.backgroundColor = '#4CAF50';
            messageDiv.textContent = `Message sent successfully! Subject: ${subject}`;
            form.reset();

            // Hide the message after 3 seconds
            setTimeout(() => {
                messageDiv.style.display = 'none';
            }, 3000);
        } else {
            messageDiv.style.display = 'block';
            messageDiv.style.backgroundColor = '#f44336';
            messageDiv.textContent = 'Please fill in all fields.';
        }
    });
});
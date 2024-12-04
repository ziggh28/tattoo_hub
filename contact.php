<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tattoo Hub</title>
    <link rel="stylesheet" href="styles/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script>
        (function() {
            emailjs.init({
                publicKey: "HE1JjwRQAsDoZudBU",
            });
        })();
    </script>
    <script src="jscustomersupport.js" defer></script>
    <div id="navbar-placeholder"></div>
    <script>
        fetch('navbar-basic.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>

</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Us</h1>
            <p>We're here to help and answer any question you might have</p>
        </div>
    </header>

    <main class="container">
        <section class="contact-info">
            <h2>Customer Service</h2>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <p>888-888-8888</p>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <p>customerservice@tattoohub.com</p>
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>123 Tattoo Street, Ink City, TA 12345</p>
            </div>
        </section>

        <section id="contact">
            <h2>Send us a message</h2>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="pnumber">Phone Number</label>
                    <input type="tel" id="pnumber" name="pnumber" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Request booking/question" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Time/date and Idea" required></textarea>
                </div> 
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <div id="footer-placeholder"></div>
    <script>
        fetch('footer.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            });
    </script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            sendMail();
        });
    </script>
</body>
</html>


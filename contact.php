<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tattoo Hub</title>
    <link rel="stylesheet" href="styles/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script>
        (function() {
            emailjs.init({
                publicKey: "HE1JjwRQAsDoZudBU",
            });
        })();
    </script>
    <script src="jscustomersupport.js" defer></script>
</head>
<body>
    <div id="navbar-placeholder"></div>
    <script>
        fetch('navbar.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('navbar-placeholder').innerHTML = data;
            });
    </script>
    <header>
        <div class="container">
            <br>
            <h1>Contact Us</h1>
        </div>
    </header>
    <section id="contact" class="container">
        <div style="text-align:center">
            <h2>Customer Service</h2>
            <p>Phone: 888-888-8888</p>
            <p>Email: customerservice@tattoohub.com</p>
        </div>
        <div class="column">
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name.." required>
                </div>
                <div class="form-group">
                    <label for="email">Your email</label>
                    <input type="email" id="email" name="email" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <label for="pnumber">Phone Number</label>
                    <input type="tel" id="pnumber" name="pnumber" placeholder="Your phone number" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Request booking/question" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Time/date and Idea" style="height:170px" required></textarea>
                </div> 
                <button type="submit">Send</button>
            </form>
        </div>
    </section>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            sendMail();
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
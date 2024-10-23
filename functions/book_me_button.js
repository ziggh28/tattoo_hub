const bookMeBtn = document.getElementById('bookMeBtn');
const bookingPopup = document.getElementById('bookingPopup');
const closeBtn = document.querySelector('.close-btn');

bookMeBtn.addEventListener('click', () => {
    bookingPopup.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    bookingPopup.style.display = 'none';
});

window.addEventListener('click', (event) => {
    if (event.target == bookingPopup) {
        bookingPopup.style.display = 'none';
    }
});

function sendMail(event) {
    event.preventDefault();
    let parms = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        pnumber: document.getElementById("pnumber").value,
        subject: document.getElementById("subject").value,
        message: document.getElementById("message").value,
    }
    emailjs.send("service_ndsvvl7", "template_bv7ciun", parms).then(() => {
        alert("Booking Sent!");
        bookingPopup.style.display = 'none';
        document.getElementById("bookingForm").reset();
    });
}
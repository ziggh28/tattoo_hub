// scripts.js
function sendMail(){
    event.preventDefault();
    let parms = {
        name : document.getElementById("name").value,
        email : document.getElementById("email").value,
        pnumber : document.getElementById("pnumber").value,
        subject : document.getElementById("subject").value,
        message : document.getElementById("message").value,
    }                              
    emailjs.send("service_ndsvvl7","template_sk7jc1a",parms).then(alert("Booking Sent!"))
}
document.addEventListener('DOMContentLoaded', () => {
    const styleSearch = document.getElementById('styleSearch');
    const styleList = document.getElementById('styleList');
    const styles = styleList.getElementsByTagName('li');

    styleSearch.addEventListener('keyup', () => {
        const filter = styleSearch.value.toLowerCase();

        Array.from(styles).forEach(style => {
            const text = style.textContent || style.innerText;
            if (text.toLowerCase().indexOf(filter) > -1) {
                style.style.display = '';
            } else {
                style.style.display = 'none';
            }
        });
    });
});

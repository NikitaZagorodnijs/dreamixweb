// Pop-Up Logic
const contactButton = document.getElementById('contact-button');
const popupOverlay = document.getElementById('popup-overlay');
const closeForm = document.getElementById('close-form');

// Show the form
contactButton.addEventListener('click', () => {
    popupOverlay.style.display = 'flex';
});

// Close the form
closeForm.addEventListener('click', () => {
    popupOverlay.style.display = 'none';
});

// Temporary form submission message
document.getElementById('contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    alert('Thank you! Your details have been sent. I will contact you shortly.');
    popupOverlay.style.display = 'none';
    document.getElementById('contact-form').reset();
});

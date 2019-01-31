/* Slideshow */

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}



// Form Validation
function validateFormC() {
    // Contact Page
    let x = document.forms["contactForm"]["name_contact"].value;
    if (x === "") {
        alert("Vergeet je naam niet in te vullen!");
        return false;
    }
    x = document.forms["contactForm"]["email_contact"].value;
    if (x === "") {
        alert("Vergeet je mailadres niet in te vullen!");
        return false;
    }
    x = document.forms["contactForm"]["subject_contact"].value;
    if (x === "") {
        alert("Vergeet het onderwerp niet in te vullen!");
        return false;
    }
    x = document.forms["contactForm"]["contact_about"].value;
    if (x === "") {
        alert("Vergeet je bericht niet in te vullen!");
        return false;
    }
}

function validateFormS() {
    // Signup Page
    let x = document.forms["signupForm"]["email"].value;
    if (x === "") {
    alert("Vergeet je mailadres niet in te voeren!");
    return false;
    }
    x = document.forms["signupForm"]["gebruikersnaam"].value;
    if (x === "") {
    alert("Vergeet je gebruikersnaam niet in te voeren!");
    return false;
    }
    x = document.forms["signupForm"]["wachtwoord"].value;
    if (x === "") {
    alert("Vergeet je wachtwoord niet in te voeren!");
    return false;
    }
}

function validateFormA() {
    // Appointment Page
    let x = document.forms["appointmentForm"]["gender"].value;
    if (x === "") {
        alert("Vergeet je geslacht niet in te voeren!");
        return false;
    }
    x = document.forms["appointmentForm"]["type_of_work"].value;
    if (x === "") {
        alert("Vergeet niet te kiezen waar je geïnteresseerd in bent!");
        return false;
    }
    x = document.forms["appointmentForm"]["about_work"].value;
    if (x === "") {
        alert("Vergeet niet te vermelden waar het over gaat!");
        return false;
    }
    x = document.forms["appointmentForm"]["photos"].value;
    if (x === "") {
        alert("Vergeet het uploaden van de foto's niet!");
        return false;
    }
    x = document.forms["appointmentForm"]["info_photos"].value;
    if (x === "") {
        alert("Vergeet geen verdere uitleg te geven!");
        return false;
    }
    x = document.forms["appointmentForm"]["datum"].value;
    if (x === "") {
        alert("Vergeet de datum niet!");
        return false;
    }
}

function validateFormM() {
    // Manage Page
    let x = document.forms["manageForm"]["available_time"].value;
    if (x === "") {
        alert("Vergeet je beschikbaarheid niet in te voeren!");
        return false;
    }
}

function validateFormAD() {
    // Admin Page
    let x = document.forms["adminForm"]["gebruikersnaam"].value;
    if (x === "") {
        alert("Vergeet je gebruikersnaam niet in te voeren!");
        return false;
    }
    x = document.forms["adminForm"]["wachtwoord"].value;
    if (x === "") {
        alert("Vergeet je wachtwoord niet in te voeren!");
        return false;
    }
}


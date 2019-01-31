<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <script type="text/javascript" src="reservation.js" defer></script>
    <link rel="stylesheet" type="text/css" href="reservation.css"
</head>
<body>

<img src="img/logo-ermax.png" alt="Logo Ermax Bouw" class="main-image">

<nav class="navbar">
    <a href="index.php">Over Ermax</a>
    <a href="projects.php">Projecten</a>
    <div class="dropdown">
        <button class="dropbtn">Reservering
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="signup.php">Aanmelden</a>
            <a href="appointment.php">Afspraak Maken</a>
            <a href="manage.php">Afspraak Beheren</a>
        </div>
    </div>
    <a href="contact.php">Contact</a>
    <a class="admin_page" href="admin.php">Admin</a>
</nav>

<footer>
    <p>Ermax Bouw B.V. | Cairostraat 68 | 3047 BC Rotterdam | tel: 010-4625675 | fax: 010-2622534 |<strong><a href="mailto:info@ermaxbouw.nl">info@ermaxbouw.nl</a></strong></p>
</footer>

<img src="img/Ermax_Locatie.png" class="locatie_ermax">

<div class="contact_me">

    <form name="contactForm" onsubmit="return validateFormC()" method="post" action="">
        <fieldset class="fieldset_contact">
            <legend class="legend_contact">Contact</legend>

            <p class="contact_name_01"><label class="contact_name_1" for="name_contact">Naam:</label>
                <input id="name_contact" class="contact_name_1" type="text" name="name_contact" value="">
            </p>

            <p class="contact_email_01"><label class="contact_email_1" for="contact_email">E-mail:</label>
                <input id="contact_email" class="contact_email_1" type="email" name="email_contact" value="">
            </p>

            <p class="contact_subject_01"><label class="contact_subject_1" for="contact_subject">Onderwerp:</label>
                <input id="contact_subject" class="contact_subject_1" type="text" name="subject_contact" value="">
            </p>

            <p class="contact_about_01"><label class="contact_about_1" for="contact_about">Bericht:</label>
                <textarea rows="5" cols="50" id="contact_about" class="contact_about_1" name="contact_about"></textarea>
            </p>

            <p class="contact_submit_01"><input class="contact_submit_1" type="submit" name="submit" value="Verzenden">
            </p>

        </fieldset>
    </form>
</div>

<div id="google" class="google">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19678.80856546524!2d4.409752!3d51.93667!3m2!1i
        1024!2i768!4f13.1!3m3!1m2!1s0x47c5cacad941d2e9%3A0xdf8cf970d82904aa!2sCa%C3%AFrostraat+68!5e0!3m2!1snl!2sus!4v13
        98250641686" width="600" height="440" frameborder="0" style="border:0"></iframe>
    </div>
    <div id="groen4"><span class="tekst_links"></span><h3><small><a href="https://maps.google.com/maps?ll=51.940181,4.40
    5747&amp;z=12&amp;t=m&amp;hl=nl-NL&amp;gl=US&amp;mapclient=embed&amp;q=Caïrostraat+68+Rotterdam+Noord-West+3047+BC+
    Rotterdam,+Nederland"></a></small></h3>
    </div>


</body>
</html>
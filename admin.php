<?php
include './CreatingDatabase.php'
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
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

<div class="admin_login_1">

    <form name="adminForm" onsubmit="return validateFormAD()" method="post" action="">
        <fieldset class="fieldset_4">
            <legend class="legend_4">Aanmelden Admin</legend>

            <p class="text_type_02"><label class="text_type_2" for="gebruikersnaam1">Gebruikersnaam:</label>
                <input id="gebruikersnaam1" class="text_type_2" type="text" name="gebruikersnaam" value="">
            </p>

            <p class="password_type_02"><label class="password_type_2" for="wachtwoord1">Wachtwoord:</label>
                <input id="wachtwoord1" class="password_type_2" type="password" name="wachtwoord" value="">
            </p>

            <p class="submit_03"><input class="submit_3" type="submit" name="submit" value="Aanmelden">
            </p>

        </fieldset>
    </form>




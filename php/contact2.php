<?php

if (isset($_POST["receiver"], $_POST["naam"], $_POST["email"], $_POST["bericht"])) {
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $msg = "Bedankt dat u contact met ons heeft opgenomen, " . $naam . "! We zullen zo snel mogelijk contact met u opnemen via " . $email . ".\nMet vriendelijke groet,\nAlexander Le\nHidde van Etten\nTobias van Hooft";
    $headers = "From: 7578512@students.uu.nl";

    if (mail($naam, $email, $msg, $headers)) {
        $myfile = fopen($naam . ".txt", "w");
        if (fwrite($myfile, "Please contact " . $naam . " at the following email: " . $email)) {
            echo "success";
        } else {
            echo "fail";
        }
        fclose($myfile);
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../styles.css">
            <title>Contact us</title>
        </head>
        <body style="background-image: url('../images/background.jpg');">
            <nav class="nav-top">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../about.html">About</a></li>
                    <li><a href="../gallery.html">Gallery</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </nav>
            <div class="test">
                <nav class="form">
                    <h1 class="success">Beste <?php echo htmlspecialchars($naam); ?>,
                    <br><br>
                    Bedankt voor het invullen van het formulier.
                    We zullen u binnenkort via <?php echo htmlspecialchars($email); ?> contacteren.
                    <br><br>
                    Met vriendelijke groet,
                    <br>Alexander
                    <br>Hidde
                    <br>Tobias
                    </h1>
                </nav>
            </div>
        </body>
        </html>

        <?php
    } else {
        header("Location: contact.php?error=De mailserver kon de mail niet versturen.");
    }
} else {
    header("Location: contact.php?error=Gelieve alle velden in te vullen.");
}
?>
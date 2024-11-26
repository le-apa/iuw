<?php

if (isset($_POST["receiver"], $_POST["naam"], $_POST["email"], $_POST["bericht"])){
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $msg = wordwrap($_POST["bericht"],70);
    $headers = "From: 7578512@students.uu.nl";
    
    if(mail($_POST["email"],$_POST["naam"],$msg,$headers)){
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Contact us</title>
</head>
<body style="background-image: url(background.jpg);">

    <nav class="nav-top">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.php">Contact us</a></li>
        </ul>
    </nav>

<div class="test">
    <nav class="form">
        <h1 class="success">Beste <?php echo $naam ?>,
        <br>
        <br>
Bedankt voor het invullen van het formulier.
We zullen u binnenkort via <?php echo $email ?> contacteren.
<br>
<br>
Met vriendelijke groet, 
<br>
Alexander
<br>
Hidde
<br>
Tobias
</h1>
    </nav>
</div>
</body>
</html>
    


<?php 
 }else{
    header("Location: contact.php?error=De mailserver kon de mail niet versturen.");
 } 
}else{
    header("Location: contact.php?error=Gelieve alle velden in te vullen.");
}
?>


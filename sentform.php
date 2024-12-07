<?php
    $msg = "Dear " . htmlspecialchars($_POST['name']) . ", thank you for filling in the contact form.";
    $headers = "From: sender@example.com";
    $mail_status = mail($_POST["email"], "IUW group 13", $msg, $headers);
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
            <li><a href="../Werkcollegeopdracht/index.html">Home</a></li>
            <li><a href="../Werkcollegeopdracht/about.html">About</a></li>
            <li><a href="../Werkcollegeopdracht/gallery.html">Gallery</a></li>
            <li><a href="../Werkcollegeopdracht/contact.php">Contact us</a></li>
            <li><a href="../Werkcollegeopdracht/bootstrap.html">Bootstrap</a></li>
            <li><a href="../Werkcollegeopdracht/responsive.html">Responsive</a></li>
        </ul>
    </nav>
    <div class="form-container">
        <div class="form">
            <?php
            if ($mail_status) {
                $naam = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                echo "<h1 class='success'> Beste $naam, Bedankt voor het invullen van het formulier. We zullen u binnenkort via $email contacteren. Met vriendelijke groet, Alexander, Hidde, Tobias</h1>";
            } else {
                header("Location: contact.php?error=De mailserver kon de mail niet versturen.");
            }
            ?>
        </div>
    </div>
</body>
</html>

<?php
    $myfile = fopen($_POST["naam"] . ".txt", "w");
    if (fwrite($myfile,"Please contact " . $_POST["naam"] . " at the following email: " . $_POST["email"]))
    {
        echo "success";
    }
    else
    {
        echo"fail";
    }
    fclose($myfile);
?>
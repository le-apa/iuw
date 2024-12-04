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
<body>
    <nav class="nav-top">
        <ul>
            <li><a href="../Werkcollegeopdracht/index.html">Home</a></li>
            <li><a href="../Werkcollegeopdracht/about.html">About</a></li>
            <li><a href="../Werkcollegeopdracht/gallery.html">Gallery</a></li>
            <li><a href="../Werkcollegeopdracht/contact.html">Contact us</a></li>
            <li><a href="../Werkcollegeopdracht/bootstrap.html">Bootstrap</a></li>
            <li><a href="../Werkcollegeopdracht/responsive.html">Responsive</a></li>
        </ul>
    </nav>
    <?php
    if ($mail_status) {
        echo $msg;
    } else {
        echo "Failed to send mail.";
    }
    ?>
</body>
</html>
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
            <li><a href="bootstrap.html">Bootstrap</a></li>
            <li><a href="responsive.html">Responsive</a></li>
        </ul>
    </nav>
    <div class="form-container">
        <form class="form" action="sentform.php" method="post">
            <div class="wrapper">
                <label for="name">Name:</label>
                <input required type="text" id="name" name="name" placeholder="John Doe">
                <label for="email">Email:</label>
                <input required type="email" id="email" name="email" placeholder="example@students.uu.nl">
            </div>
            <div class="message">
                <label for="message">Message:</label>
                <textarea type="text" id="message" name="message"></textarea>
            </div>
            <?php
            if (isset($_GET["error"])){ ?> <p class="error"><?php echo $_GET["error"] ?> </p> <?php } ?>
            <div class="submitbutton">
                <button type="submit" name="submit" value="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
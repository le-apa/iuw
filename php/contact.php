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
        <form class="form" action="contact2.php" method="post">
            <h1>Kies ontvanger:</h1>
            <div class="boxes">
                <label for="Alexander">Alexander</label>
                <input type="radio" id="Alexander" name="receiver" value="Alexander">
                <label for="Hidde">Hidde</label>
                <input type="radio" id="Hidde" name="receiver" value="Hidde">
                <label for="Tobias">Tobias</label>
                <input type="radio" id="Tobias" name="receiver" value="Tobias">
            </div>
            <div class="wrapper">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" placeholder="Uw naam" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Uw email" required>
            </div>
            <div class="message">
                <label for="bericht">Uw bericht:</label>
                <textarea id="bericht" name="bericht" required></textarea>
            </div>
            <?php if (isset($_GET["error"])) { ?>
                <p class="error"><?php echo htmlspecialchars($_GET["error"]); ?></p>
            <?php } ?>
            <div class="submitbutton">
                <button type="submit" name="versturen" value="verstuur">Versturen</button>
            </div>
        </form>
    </div>
</body>
</html>
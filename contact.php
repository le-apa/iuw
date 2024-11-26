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
        <form action="contact2.php" method="post">
            <h1>kies ontvanger:</h1>
            <div class="boxes">
                <label class="Alexander" for="Alexander">Alexander</label>
                <input type="radio" id="Alexander" name="receiver">
                <label class="Hidde" for="Hidde">Hidde</label>
                <input type="radio" for="Hidde" id="Hidde" name="receiver">
                <label class="Tobias" for="Tobias">Tobias</label>
                <input type="radio" for="Tobias" id="Tobias" name="receiver">
            </div>
        <div class="wrapper">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" placeholder="Uw naam">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Uw email">
        </div> 
            <div class="message">
                <label for="bericht">Uw bericht:</label>
                <textarea type="text" id="bericht" name="bericht"></textarea>
            </div>
            <?php
            if (isset($_GET["error"])){ ?> <p class="error"><?php echo $_GET["error"] ?> </p> <?php } ?>
            <div class="submitbutton">
                <button type="submit" name="versturen" value="verstuur">versturen</button>
            </div>
        </form>
    </nav>
</div>
</body>
</html>
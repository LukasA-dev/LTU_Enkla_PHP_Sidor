<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida 1</title>
    <link rel="stylesheet" href="style.css"> <!-- Länkar till extern CSS-fil för att styla sidan -->
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <h1>Välkommen till min första PHP-sida</h1> <!-- Rubrik som välkomnar användaren -->
        <p>Det här är en enkel introduktion till PHP.</p> <!-- Introduktionsparagraf -->

        <!-- Formulär för användarinput med POST-metod för att skicka data säkert -->
        <form method="POST">
            <input type="text" name="name" placeholder="Ange ditt namn">
            <input type="submit" value="Skicka">
        </form>

        <?php
        // Kontrollerar om formuläret skickats och att 'name'-fältet inte är tomt
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']); // Saniterar input för att förhindra XSS-attacker

            // Skriver ut en hälsning och utför olika strängmanipulationer
            echo "<p>Hej $name</p>";
            echo "<p>Baklänges: " . strrev($name) . "</p>";
            echo "<p>Gemener: " . strtolower($name) . "</p>";
            echo "<p>Versaler: " . strtoupper($name) . "</p>";
            echo "<p>Antal tecken: " . strlen($name) . "</p>";
        }
        ?>
    </div>
    <?php include 'footer.php'; ?> <!-- En gemensam footer -->
</body>

</html>
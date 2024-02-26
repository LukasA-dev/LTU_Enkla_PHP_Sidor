<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 5</title>
    <link rel="stylesheet" href="style.css"> <!-- Länkar till samma CSS-fil -->
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <h1>Serverinformation</h1> <!-- Rubrik för sidan -->
        <p>Här visas information om servern och din anslutning.</p> <!-- Instruktioner för användaren -->

        <?php
        // PHP-kod för att skriva ut information om server och användarens anslutning
        echo "<h2>Server och anslutningsinformation:</h2>"; // Skriver ut en rubrik för server- och anslutningsinformationen
        echo "<p>Servernamn: " . $_SERVER['SERVER_NAME'] . "</p>"; // Skriver ut servernamnet
        echo "<p>Din IP-adress: " . $_SERVER['REMOTE_ADDR'] . "</p>"; // Skriver ut användarens IP-adress
        echo "<p>Filnamn: " . basename($_SERVER['PHP_SELF']) . "</p>"; // Skriver ut namnet på den aktuella filen
        echo "<p>Kommunikationsport: " . $_SERVER['REMOTE_PORT'] . "</p>"; // Skriver ut den använda kommunikationsporten
        echo "<p>Anropsmetod: " . $_SERVER['REQUEST_METHOD'] . "</p>"; // Skriver ut anropsmetoden (GET eller POST)
        ?>
    </div>
    <?php include 'footer.php'; ?> <!-- Inkluderar samma footer -->

</body>

</html>
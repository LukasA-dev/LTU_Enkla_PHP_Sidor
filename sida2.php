<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 2</title>
    <link rel="stylesheet" href="style.css"> <!-- Länkar till samma CSS-fil -->
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <h1>Bondgårdsdjur</h1> <!-- Rubrik för sidan -->
        <p>Ange tre djur du kan hitta på en bondgård.</p> <!-- Instruktioner för användaren -->

        <!-- Formulär för att mata in tre djurnamn -->
        <form action="sida2.php" method="POST">
            Djur 1: <input type="text" name="animal1"><br>
            Djur 2: <input type="text" name="animal2"><br>
            Djur 3: <input type="text" name="animal3"><br>
            <input type="submit" value="Skicka">
        </form>

        <?php
        // Kontrollerar om data skickats via formuläret
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Skapar en array med de inmatade djurnamnen
            $farmAnimals = [$_POST["animal1"], $_POST["animal2"], $_POST["animal3"]];

            // Visar den ursprungliga listan av djur
            echo "<h2>Ursprungliga listan över djur:</h2>";
            echo "<pre>";
            print_r($farmAnimals); // Använder print_r för att visa arrayens innehåll
            echo "</pre>";

            // Modifierar arrayen: ersätter det tredje djuret och lägger till ett fjärde
            $farmAnimals[2] = "Struts";
            array_push($farmAnimals, "Alpacka");

            // Tar bort det första djuret från arrayen
            array_shift($farmAnimals);

            // Visar den modifierade listan av djur
            echo "<h2>Modifierad lista över djur:</h2>";
            echo "<pre>";
            print_r($farmAnimals);
            echo "</pre>";

            // Visar det första djuret i den modifierade listan
            echo "<p>Det första djuret i den modifierade listan är: {$farmAnimals[0]}</p>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?> <!-- Inkluderar samma footer -->
</body>

</html>
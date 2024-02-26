<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 3</title>
    <link rel="stylesheet" href="style.css"> <!-- Länkar till samma CSS-fil -->

<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <h1>Ord Sök</h1> <!-- Sidans huvudrubrik -->
        <p>Skriv in en mening och ett sökord för att se hur många gånger sökordet förekommer i meningen.</p> <!-- Instruktion till användaren -->

        <!-- Formulär för att ta emot en mening och ett sökord från användaren -->
        <form action="sida3.php" method="POST">
            Mening: <input type="text" name="sentence" size="50"><br> <!-- Textfält för meningen -->
            Sökord: <input type="text" name="keyword"><br> <!-- Textfält för sökordet -->
            <input type="submit" value="Sök"> <!-- Skicka-knapp -->
        </form>

        <?php
        // Kontrollerar om formuläret har skickats och att både mening och sökord är ifyllda
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['sentence']) && !empty($_POST['keyword'])) {
            $sentence = $_POST['sentence']; // Hämtar meningen
            $keyword = $_POST['keyword']; // Hämtar sökordet

            // Delar upp meningen i enskilda ord och placerar i en array
            $words = explode(" ", $sentence);

            // Visar den inskrivna meningen
            echo "<h2>Inmatad mening:</h2>";
            echo "<p>$sentence</p>";

            // Visar arrayen med ord från meningen
            echo "<h2>Ord i meningen:</h2>";
            echo "<pre>";
            print_r($words);
            echo "</pre>";

            $count = 0; // Räknare för antalet förekomster av sökordet
            $positions = []; // Array för att hålla reda på positionerna för sökordet

            // Loopar igenom ordarrayen och jämför varje ord med sökordet
            foreach ($words as $index => $word) {
                if (strcasecmp($word, $keyword) == 0) { // Ignorerar skiftläge i jämförelsen
                    $count++; // Ökar räknaren
                    $positions[] = $index + 1; // Sparar ordets position (mänskliga positioner börjar från 1)
                }
            }

            // Visar resultaten från sökningen
            if ($count > 0) {
                echo "<p>Ordet <strong>$keyword</strong> finns på plats: " . implode(", ", $positions) . "</p>";
                echo "<p>Ordet <strong>$keyword</strong> hittades $count gånger.</p>";
            } else {
                echo "<p>Ordet <strong>$keyword</strong> hittades inte i meningen.</p>";
            }
        }
        ?>
    </div>

    <?php include 'footer.php'; ?> <!-- Inkluderar samma footer -->

</body>

</html>
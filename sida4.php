<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> <!-- Länkar till samma CSS-fil -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sida 4</title>
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <h1>Rektangelns omkrets och area</h1> <!-- Rubrik för sidan -->
        <p>Mata in längd och bredd för att beräkna rektangelns omkrets och area.</p> <!-- Instruktioner för användaren -->

        <!-- Formulär för att mata in längd och bredd -->
        <form action="sida4.php" method="POST">
            Längd: <input type="text" name="length"><br>
            Bredd: <input type="text" name="width"><br>
            <input type="submit" value="Beräkna">
        </form>

        <?php
        // Funktion för att beräkna omkretsen av rektangeln
        function calculateCircumference($length, $width)
        {
            $circumference = 2 * ($length + $width);
            return $circumference;
        }

        // Funktion för att beräkna arean av rektangeln
        function calculateArea($length, $width)
        {
            $area = $length * $width;
            return $area;
        }

        // Kontrollera om POST-förfrågan har skickats och om längd och bredd är angivna
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['length']) && !empty($_POST['width'])) {
            $length = $_POST['length'];
            $width = $_POST['width'];

            // Beräkna omkrets och area
            $circumference = calculateCircumference($length, $width);
            $area = calculateArea($length, $width);

            // Visa resultaten
            echo "<p>Omkretsen av rektangeln är: $circumference enheter.</p>";
            echo "<p>Arean av rektangeln är: $area kvadratenheter.</p>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?> <!-- Inkluderar samma footer -->

</body>

</html>
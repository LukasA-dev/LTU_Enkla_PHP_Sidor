<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Sida 6 - Mottagen data</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <h1>Mottagen data</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
            echo "<h2>Data skickad med GET:</h2>";
            echo "Namn: " . htmlspecialchars($_GET['name']) . "<br>";
            echo "E-post: " . htmlspecialchars($_GET['email']) . "<br>";
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            echo "<h2>Data skickad med POST:</h2>";
            echo "Namn: " . htmlspecialchars($_POST['name']) . "<br>";
            echo "E-post: " . htmlspecialchars($_POST['email']) . "<br>";
        } else {
            echo "<p>Ingen data mottagen.</p>";
        }
        ?>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
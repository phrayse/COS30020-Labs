<?php
    session_start();
    $number = $_SESSION["number"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author"	content="STUID" />
    <title>Lab9</title>
</head>
<body>
    <h1>Guessing Game - Lab09</h1>

    <?php
        echo "The number was $number.";
    ?>

    <p><a href="startover.php">Start Over</a></p>
</body>
</html>
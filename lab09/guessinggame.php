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
    <p>Enter a number between 1 and 100, then press the Guess button.</p>

    <?php
    session_start();
    if (isset($_GET["guess"]) && isset($_SESSION["number"])) {
        $number = $_SESSION["number"];
        if ($number == $_GET["guess"]) {
            echo "Correct!";
            $count = $_SESSION["count"];
            echo "You got it in $count guess" . ($count != 1 ? "es" : "") . ".";
        } else {
            $_SESSION["count"]++;
            $count = $_SESSION["count"];
            echo "Guess #$count was too " . ($number < $_GET["guess"] ? "high" : "low") . " - guess again!";
        }
    } else {
        $number = rand(1,100);
        $_SESSION["number"] = $number;
        $_SESSION["count"] = 0;
    }
    ?>

    <form action="guessinggame.php" method="get">
        <p>
            <input type="number" name="guess" min="1" max="100">
            <input type="submit" value="Guess" />
        </p>
    </form>

    <p><a href="giveup.php">Give Up</a></p>
    <p><a href="startover.php">Start Over</a></p>
</body>
</html>
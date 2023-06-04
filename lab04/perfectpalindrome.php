<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author"	content="STUID" />
    <title>Lab04 Task 2: Practising string functions</title>
</head>
<body>
    <h1>Web Programming - Lab 4</h1>
    <?php
    if (isset ($_POST["palindrome"])){ // check if form data exists
        $input = strtolower($_POST["palindrome"]);	// obtain the form data in lowercase
        $pattern = "/^.+$/";
        if (preg_match($pattern, $input)) {
            $tupni = strrev($input);
            if (strcmp($input, $tupni) == 0) {
                echo "<p>The text you entered is <em>perfectly</em> palindromic.</p>";
            } else {
                echo "<p>$input is not perfectly palindromic.</p>";
            }
        } else {
            echo "<p>Please enter a value<p>";
        }
        echo "<p><a href=\"perfectpalindromeform.php\">Back to form.</a></p>";
    }
    ?>
</body>
</html>
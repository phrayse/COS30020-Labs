<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author"	content="STUID" />
    <title>Lab04 extra task</title>
</head>
<body>
    <h1>Standard Palindrome Form with Results</h1>
    <form action="standardpalindromeself.php" method="POST">
        <p><label>Enter text:
            <input id="palindrome" type="text" name="palindrome" />
        </label></p>
        <p><input type="submit" value="Submit" /></p>
    </form>

    <?php
    if (isset($_POST["palindrome"])){ // check if form data exists
            $rawInput = strtolower($_POST["palindrome"]);
            $input = str_replace(["?", "!", "'", "\"", ",", ".", " "], "", $rawInput);	// obtain the form data in lowercase
            $pattern = "/^.+$/";
            if (preg_match($pattern, $input)) {
                $tupni = strrev($input);
                if (strcmp($input, $tupni) == 0) {
                    echo "<p>The text you entered is palindromic.</p>";
                } else {
                    echo "<p>$input is not palindromic.</p>";
                }
            } else {
                echo "<p>Please enter a value<p>";
            }
        }
    ?>
</body>
</html>
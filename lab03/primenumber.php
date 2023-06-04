<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Adv Web Development :: Lab 3" />
    <meta name="keywords" content="Web,programming" />
    <title>Task 3 form</title>
</head>
<body>
    <h1>Lab3 Task3: Prime Number</h1>
    <?php
    function is_prime($prime) {
        if (($prime > 0) && ($prime < 1000)) {
            if ($prime == 1 || $prime == 2) {
                return true;
            } else {
                for ($num = 2; $num <= $prime/2; $num++) {
                    if ($prime % $num == 0) {
                        return false;
                    }
                }
                return true;
            }
        } else {
            return;
        }
    }
        
    // Checks input is valid and outputs response.
    $prime = $_GET["prime"];
    echo "<p>The number you entered ($prime) is ";
    echo (is_null(is_prime($prime)) == 0)
        ? ((is_prime($prime) == true) ? "a prime number." : "a composite number.")
        : "invalid.";
    echo "</p>";
    echo "<p><a href=\"primenumberform.php\">Back</a></p>";
    ?>
</body>
</html>
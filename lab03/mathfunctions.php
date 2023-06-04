<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Adv Web Development :: Lab 3" />
    <meta name="keywords" content="Web,programming" />
    <title>math functions</title>
</head>
<body>
    <?php
    function factorial ($n) {	// declare the factorial function
        $result = 1;	// declare and initialise the result variable
        $factor = $n;	// declare and initialise the factor variable
        while ($factor > 1) {
            $result = $result * $factor; // loop to multiple all factors until 1
            $factor--;	// next factor
        }	// Note that the factor 1 is not multiplied 
        return $result;
    }
    ?>
</body>
</html>
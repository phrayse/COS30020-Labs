<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Web Programming :: Lab 2" />
    <meta name="keywords" content="Web,programming" />
    <title>Using variables, arrays and operators</title>
</head>
<body>
    <?php
    $variable = $_GET["variable"];
    if (is_numeric($variable)) {
        round($variable);
        echo "<p>The variable contains an ";
        echo ($variable % 2 == 0) ? "EVEN" : "ODD";
        echo " number.</p>";
    } else {
        echo "<p>$variable is not a number.</p>";
    }
    ?>
</body>
</html>
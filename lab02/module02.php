<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Web Programming :: Lab 2" />
    <meta name="keywords" content="Web,programming" />
    <title>Using variables, arrays and operators</title>
</head>
<body>
    <h1>Web Programming - Lab 2</h1>
    <?php
        $marks = array(85, 85, 95);
        $marks[1] = 90;
        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;
        ($ave >= 50)
            ? $status = "PASSED"
            : $status = "FAILED";
        echo "<p>The average score is $ave. You $status</p>";
    ?>
</body>
</html>
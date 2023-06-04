<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="STUID" />
    <title>Show guestbook</title>
</head>
<body>
    <main>
        <?php
        $filename = "../../data/lab05/guestbook.txt";
        if (is_readable($filename)) {
            echo "<pre>". stripslashes(readfile($filename)). "</pre>";
        }
        echo "<p><a href=\"guestbookform.php\">Back to form.</a></p>";

        ?>
    </main>
</body>
</html>
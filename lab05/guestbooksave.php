<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="STUID" />
    <title>SAVING</title>
</head>
<body>
    <?php
    if (isset($_POST["fname"]) && isset($_POST["sname"])) {
        umask(0007);
        $dir = "../../data/lab05";
        if (! is_dir($dir)) {
            mkdir($dir, 02770);
        }
      
        $fName = htmlspecialchars($_POST["fname"]);
        $sName = htmlspecialchars($_POST["sname"]);
        $fullName = "$fName $sName\n";
        $filename = "../../data/lab05/guestbook.txt";
        $handle = fopen($filename, "a");
        
        if (fwrite($handle, $fullName)>0) {
            echo "<p>Contract signed.
                <br>
                <a href=\"guestbookform.php\">Back to form.</a>
                <br>
                <a href=\"guestbookshow.php\">See who signed</a></p>";
        } else {
            echo "<p>Failed to sign.
                <br>
                <a href=\"guestbookform.php\">Back to form.</a></p>";
        }
        
        fclose($handle);
    } else {
        echo "<p><em>Please enter both fields</em>
            <br>
            <a href=\"guestbookform.php\">Back to form</a></p>";
    }
    ?>
</body>
</html>
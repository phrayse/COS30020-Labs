<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="STUID" />
    <title>Lab06 Guestbook</title>
</head>
<body>
    <?php
    if (isset($_POST["name"]) && isset($_POST["email"])) {
        // Create directory if required.
        umask(0007);
        $dir = "../../data/lab06";
        if (! is_dir($dir)) {
            mkdir($dir, 02770);
        }
        // initialise variables, concatenate.
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $signee = "$name,$email\n";
        $filename = "../../data/lab06/guestbook.txt";
        $handle = fopen($filename, "a");

        $allsignees = array();
        if ($filename) {
            $namedata = array();
            $handle = fopen($filename, "r");
            while (! feof($handle)) {
                $onesignee = fgets($handle);
                if ($onesignee != "") {
                    $details = explode(",", $onesignee);
                    $allsignees[] = $details;
                    $namedata[] = $details[0];
                    $emaildata[] = $details[1];
                }
            }
            fclose($handle);
            $newsignee = !(in_array($name, $namedata) && in_array($email, $emaildata));
        } else {
            $newsignee = true;
        }
        if ($newsignee) {
            $handle = fopen($filename, "a");
            $details = $name . "," . $email . "\n";
            fputs($handle, $details);
            fclose($handle);

            $allsignees[] = array($name, $email);
            echo "<p>Signature added</p>";
        } else {
            echo "<p>Signature already exists</p>";
        }
    }
    echo "<p><a href=\"guestbookform.php\">Back to form.</a><br><a href=\"guestbookshow.php\">See who signed</a></p>";
    
    ?>
</body>
</html>
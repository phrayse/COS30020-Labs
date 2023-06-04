<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="STUID" />
    <title>Lab06 Guestbook</title>
</head>
<body>
<main>
    <?php
    $filename = "../../data/lab06/guestbook.txt";
    $allsignees = array();
    if (is_readable($filename)) {
        $handle = fopen($filename, "r");
        while (! feof($handle)) {
            $onesignee = fgets($handle);
            if ($onesignee != "") {
                $details = explode(",", $onesignee);
                $allsignees[] = $details;
            }
        }
        fclose($handle);
    }

    if (! empty($allsignees)) {
        $table = "<table>";
        sort($allsignees);
        foreach($allsignees as $onesignee) {
            echo "<p>Name: $onesignee[0]<br>";
            echo "email: $onesignee[1]</p>";
        }
    } else {
        echo "<p>No signatures yet</p>";
    }
    echo "<p><a href=\"guestbookform.php\">Back to form.</a></p>";
    ?>
</main>
</body>
</html>
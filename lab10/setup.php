<?php
    $host = "";
    $user = "";
    $pswd = "";
    $dbnm = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="STUID" />
    <title>setup</title>
</head>
<body>
    <h1>Setup form</h1>
    <form action="setup.php" method="post">
        <p>
            <?php // Using radio buttons so I don't have to type things in every time
            echo "<label><input type=\"radio\" name=\"user\" value=\"$user\" required />Username</label>"
                . "<br>"
                . "<input type=\"radio\" name=\"pass\" value=\"$pswd\" required />Password</label>"
                . "<br>"
                . "<input type=\"radio\" name=\"db\" value=\"$dbnm\" required />Database</label>";
            ?>
        <br>
            <input type="submit" value="Set Up" />
        </p>
    </form>

    <?php
    if (isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["db"])) {
        // Create directory if required.
        umask(0007);
        $dir = "../../data/lab10";
        if (! is_dir($dir)) {
            mkdir($dir, 02770);
        }

        $user = $_POST["user"];
        $pswd = $_POST["pass"];
        $dbnm = $_POST["db"];

        // Create .txt file if required.
        $filename = "../../data/mykeys.txt";	// assumes php file is inside lab10
        if (!$filename) {	// check if file doesn't exist
            $handle = fopen($filename, "a");
            $data = "\$host = '';<br>"
                . "\$user = $user;<br>"
                . "\$pswd = $pswd;<br>"
                . "\$dbnm = $dbnm;\n";
            fputs($handle, $data);
            fclose($handle);
        }

        // Connect to database.
        $user = $_POST["user"];
        $pswd = $_POST["pass"];
        $dbnm = $_POST["db"];
        $connection = @mysqli_connect($host, $user, $pswd, $dbnm)
            or die("<p>The database server is not available.</p>");
        echo "<p>Successfully connected to database server.</p>";
        @mysqli_select_db($connection, $dbnm)
            or die("<p>The database is not available.</p>");
        echo "<p>Successfully opened the database</p>";

        $tableName = "hitcounter";
        $SQLstring = "SHOW TABLES LIKE '$tableName'";
        $queryResult = @mysqli_query($connection, $SQLstring);
        if (mysqli_num_rows($queryResult) > 0) {
            // table exists
        } else {
            // table doesn't exist
            $SQLString = "CREATE TABLE $tableName (
                id smallint NOT NULL PRIMARY KEY, 
                hits smallint NOT NULL, 
                PRIMARY KEY(id))";
            $queryResult = @mysqli_query($connection, $SQLstring);
            if ($queryResult === FALSE) {
                echo "<p>Unable to execute the query.</p>"
                    . "<p>Error code " . mysqli_errno($connection)
                    . ": " . mysqli_error($connection) . "</p>";
            } else {
                // Initialise a record.
                $addRecord = "INSERT INTO $tableName VALUES (1,0)";
                $queryResult = @mysqli_query($connection, $addRecord);
                if ($queryResult === FALSE) {
                    echo "<p>Unable to add record</p>"
                        . "<p>Error code " . mysqli_errno($connection)
                        . ": " . mysqli_error($connection) . "</p>";
                } else {
                    echo "<p>Record added</p>";
                }
            }
        }
    }
    ?>
</body>
</html>
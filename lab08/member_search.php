<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author"	content="STUID" />
    <title>lab8</title>
</head>
<body>
    <h1>Web Programming - Lab08</h1>
    <h2>Member search</h2>

    <form action="member_search.php" method="get">
        <fieldset>
            <p><label>Last name:
                <input type="text" name="lname" required />
            </label></p>
            <p><input type="submit" value="submit" />
                <input type="reset" value="clear" />
            </p>
        </fieldset>
    </form>
    <p><a href="vip_member.php">Back to homepage</a></p>

    <?php
    require_once ("settings.php");
    
    if (isset($_GET["lname"])) {
        $lname = $_GET["lname"];

        // Connect to database.
        $connection = @mysqli_connect($host, $user, $pswd, $dbnm)
            or die("<p>The database server is not available.</p>");
        @mysqli_select_db($connection, $dbnm)
            or die("<p>The database is not available.</p>");
        
        // Check vipmembers table exists.
        $tableName = "vipmembers";
        $SQLstring = "SHOW TABLES LIKE '$tableName'";
        $queryResult = @mysqli_query($connection, $SQLstring);
        if (mysqli_num_rows($queryResult) > 0) {

            // Database is now open, find the results we want.
            $query = "SELECT member_id, fname, lname, email FROM vipmembers WHERE lname = '$lname'";
            $results = @mysqli_query($connection, $query)
                or die("<p>Unable to execute the query.</p>"
                . "<p>Error code " . mysqli_errno($connection)
                . ": " . mysqli_error($connection) . "</p>");
            
            // results are loaded, print in HTML table.
            echo "<table width='100%' border='1'>";
            echo "<tr><th>VIP#</th><th>First name</th><th>Last name</th><th>Email</th></tr>";
            $row = mysqli_fetch_row($results);
            while ($row) {
                echo "<tr><td>{$row[0]}</td>";
                echo "<td>{$row[1]}</td>";
                echo "<td>{$row[2]}</td>";
                echo "<td>{$row[3]}</td></tr>";
                $row = mysqli_fetch_row($results);
            }
            echo "</table>";
            
            // results printed, show extra information.
            $numRows = mysqli_num_rows($results);
            $numFields = mysqli_num_fields($results);
            if ($numRows != 0 && $numFields != 0) {
                echo "<p>Query returned " . $numRows . " rows and " . $numFields . " fields.</p>";
            } else {
                echo "<p>Query returned no results.</p>";
            }
            
            // extra information all shown, close everything down.
            mysqli_free_result($results);
            mysqli_close($connection);
        }
    }
    ?>
</body>
</html>
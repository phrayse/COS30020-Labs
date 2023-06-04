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
    <?php
    require_once ("settings.php");

    // Connect to database.
    $connection = @mysqli_connect($host, $user, $pswd, $dbnm)
        or die("<p>The database server is not available.</p>");
    echo "<p>Successfully connected to database server.</p>";
    @mysqli_select_db($connection, $dbnm)
        or die("<p>The database is not available.</p>");
    echo "<p>Successfully opened the database</p>";
    
    // Database is now open, find the results we want.
    $query = "SELECT car_id, make, model, price FROM cars ORDER BY car_id";
    $results = @mysqli_query($connection, $query)
        or die("<p>Unable to execute the query.</p>"
        . "<p>Error code " . mysqli_errno($connection)
        . ": " . mysqli_error($connection) . "</p>");
    echo "<p>Successfully executed the query</p>";
    
    // results are loaded, print in HTML table.
    echo "<table width='100%' border='1'>";
    echo "<tr><th>Car#</th><th>Make</th><th>Model</th><th>Price</th></tr>";
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
    ?>
</body>
</html>
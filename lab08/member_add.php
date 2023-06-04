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
    <h2>add member</h2>

    <?php
    require_once ("settings.php");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $addRecord = "INSERT INTO vipmembers (fname, lname, gender, email, phone) 
        VALUES('$fname', '$lname', '$gender', '$email', '$phone')";

    // Connect to database.
    $connection = @mysqli_connect($host, $user, $pswd, $dbnm)
        or die("<p>The database server is not available.</p>");
    @mysqli_select_db($connection, $dbnm)
        or die("<p>The database is not available.</p>");

    $tableName = "vipmembers";
    $SQLstring = "SHOW TABLES LIKE '$tableName'";
    $queryResult = @mysqli_query($connection, $SQLstring);
    if (mysqli_num_rows($queryResult) > 0) {
        // table exists, just add information.
        $queryResult = @mysqli_query($connection, $addRecord);
        if ($queryResult === FALSE) {
            echo "<p>Unable to execute the query</p>"
            . "<p>Error code " . mysqli_errno($connection)
            . ": " . mysqli_error($connection) . "</p>";
        }
    } else {
        // table doesn't exist, create it.
        $SQLstring = "CREATE TABLE vipmembers (
            member_id int NOT NULL AUTO_INCREMENT, 
            fname varchar(40) NOT NULL, 
            lname varchar(40) NOT NULL, 
            gender varchar(1) NOT NULL, 
            email varchar(40) NOT NULL, 
            phone varchar(20) NOT NULL, 
            PRIMARY KEY(member_id)
        )";
        $queryResult = @mysqli_query($connection, $SQLstring);
        if ($queryResult === FALSE) {
            echo "<p>Unable to execute the query.</p>"
            . "<p>Error code " . mysqli_errno($connection)
            . ": " . mysqli_error($connection) . "</p>";
        } else {
            $queryResult = @mysqli_query($connection, $addRecord);
            if ($queryResult === FALSE) {
                echo "<p>Unable to execute the query</p>"
                . "<p>Error code " . mysqli_errno($connection)
                . ": " . mysqli_error($connection) . "</p>";
            }
        }
    }
    ?>
    <p><a href="vip_member.php">Back to home</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="Adv Web Development :: Lab 3" />
    <meta name="keywords" content="Web,programming" />
    <title>Task 3 form</title>
</head>
<body>
    <h1>Lab3 Task3: Prime Number</h1>
    <form id="form" action="primenumber.php" method="get">
        <p><label>Enter a number (1-999):
            <input id="prime" type="text" name="prime" pattern="[0-9]{1,3}"/>
        </label></p>
        <p><input type="submit" value="Check if it's prime"/></p>
    </form>
</body>
</html>
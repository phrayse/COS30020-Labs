<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author"	content="STUID" />
    <title>Lab6</title>
</head>
<body>
    <h1>Web Programming Form - Lab06</h1>
    <form action = "shoppingsave.php" method = "POST" >
        <p><label>Item:
            <input type="text" name="item" required />
        </label>
        <br>
        <label>Quantity:
            <input type="text" name="qty" required />
        </label>
        </p>
        <p><input type="submit" value="submit" />
        <br><input type="reset" value="clear" />
        </p>
    </form>
</body>
</html>
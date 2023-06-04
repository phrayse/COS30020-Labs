<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application development" />
    <meta name="keywords" content="PHP" />
    <meta name="author"	content="STUID" />
    <title>Shopping Form</title>
</head>
<body>
    <h1>Web Programming Form - Lab 5</h1>
    
    <form action="shoppingsave.php" method ="post">
        <fieldset>
            <p><label>Item name:
                <input type="text" name="item" required/>
            </label>
            <br>
            <label>Quantity:
                <input type="number" name="qty" required/>
            </label></p>

            <p><input type="submit" value="Submit"/>
            <br><input type="reset" value="Clear"/>
            </p>        
        </fieldset>
    </form>
</body>
</html>
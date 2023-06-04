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
    <h2>Add member form</h2>

    <form action="member_add.php" method="post">
        <fieldset>
            <p><strong>Enter your details to sign up</strong></p>
            <p><label>First name:
                <input type="text" name="fname" required />
            </label><br>
            <label>Last name:
                <input type="text" name="lname" required />
            </label><br>
            <label>Gender:
                <input type="text" name="gender" required />
            </label><br>
            <label>E-mail:
                <input type="text" name="email" required />
            </label><br>
            <label>Phone:
                <input type="text" name="phone" required />
            </label></p>
            <p><input type="submit" value="submit" />
                <input type="reset" value="clear" />
            </p>
        </fieldset>
    </form>
    <p><a href="vip_member.php">Back to homepage</a></p>
</body>
</html>
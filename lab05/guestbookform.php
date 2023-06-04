<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Guestbook" />
    <meta name="author" content="STUID" />
    <title>Lab05 Guestbook</title>
</head>
<body>
    <main>
    <h1>Lab05 Task 2 - Guestbook</h1>
    <form action="guestbooksave.php" method="post">
        <fieldset>
            <p><strong>Enter your details into the guestbook</strong></p>
            <p><label>First name:
                <input type="text" name="fname" required />
            </label><br>
            <label>Surname:
                <input type="text" name="sname" required />
            </label></p>
            <p><input type="submit" value="submit" />
                <input type="reset" value="clear" />
            </p>
        </fieldset>
    </form>
    <p><a href="guestbookshow.php">Show Guest Book</a></p>
    </main>
</body>
</html>
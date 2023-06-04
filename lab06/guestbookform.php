<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Guestbook" />
    <meta name="author" content="STUID" />
    <title>Lab06 Guestbook</title>
</head>
<body>
<main>
    <h1>Lab06 Task 2 - Guestbook</h1>
    <form action="guestbooksave.php" method="post">
        <fieldset>
            <p><strong>Enter your details into the guestbook</strong></p>
            <p><label>Name:
                <input type="text" name="name" required />
            </label><br>
            <label>E-mail:
                <input type="text" name="email" required />
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
<?php include_once 'dp/dp.php'; ?>

<html LANG="en">
<head>
    <meta charset="UTF-8">
    <title>Chat | login</title>
</head>
<body>
<center>
    <nav>
        <h1>Register or Login</h1>
        <sub>you are registered if your information not exist</sub>
    </nav>
    <main>
        <form action="validation.php" method="post">
            <hr>
            <label for="username">username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <br>
            <label for="password">password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <br>
            <button type="submit">Login</button>
        </form>
    </main>
</center>
</body>
</html>

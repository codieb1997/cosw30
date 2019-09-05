<!doctype html>
<html>
    <head>
        <meta charset "utf-8">
        <title>Login Form</title>
    </head>
    <body>
        <h1>Login Form</h1>
        <form action="process_login.php" method="POST">
            <p><label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required></p>
            
            <p><label for="password">Password:</label>
            <input type="password" name="password" id="password" required></p>
            
            <button>Log In!</button>
            
            <p><a href="register.php">Register here!</a></p>
        </form>
    </body>
</html>
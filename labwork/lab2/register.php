<!doctype html>
<html>
    <head>
        <meta charset "utf-8">
        <title>Register</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <p>Register Today!</p>
        <form action="process_register.php" method="POST">
            <p><label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required></p>
            
            <p><label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required></p>
            
            <p><label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required></p>
            
            <p><label for="password">Password:</label>
            <input type="password" name="password" id="password" required></p>
            
            <p><label for="confirm_password">Password:</label>
            <input type="password" name="confirm_password" id="confirm_password" required></p>
            
            <button>Register!</button>
            
            
        </form>
    </body>
</html>
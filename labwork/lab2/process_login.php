<?php
    
    // capture the data from our form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    //Check if the variables are empty 
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
    }
    
    // create variables to match email and password against
    $correct_email = 'test@test.com';
    $correct_password = '123';
    
    
    // check if the data is good (isnt empty, matches our creditials)
    //if (condition) {
        // run this code
   // } else {
        // do something else   
    //}
    
    # == is equal to
    # != is not equal to
    
    if($email == $correct_email && $password == $correct_password) {
        // success - output success message
        echo '<h1>You logged in successfully!</h1>';
        echo "<p>email address: $email</p>";
        echo "<p>password: $password</p>";
    } else {
        // error - out a error message
        echo '<h1>Sorry... try again</h1>';
        echo '<a href="login.php">go back</a>';
    }
    
    // output a little message for fun :)

?>
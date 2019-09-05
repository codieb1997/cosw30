<?php
    
    // capture the data from our form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

   function error_code() {
        echo ', please go back and try again.';
        echo '<p><a href="register.php">Restart here</a></p>';
    } 
    
    // check if the data is good (isnt empty, matches our creditials)
    //if (condition) {
        // run this code
   // } else {
        // do something else   
    //}
    
    # == is equal to
    # != is not equal to
    
    if(empty($_REQUEST['first_name']) == true) { 

        echo 'Check your first name';
        error_code();
    } else if (empty($_REQUEST['last_name']) == true) {
        echo 'Check your last name';
        error_code();
    } else if (empty($_REQUEST['email']) == true) {
        echo 'Check your email';
        error_code();
    } else if($password == $confirm_password) {
        echo '<h1>You logged in successfully!</h1>';
        echo "<p>email address: $email</p>";
        echo "<p>password: $password</p>";
    } else {
        // error - out a error message
        echo 'Your passwords don\'t match';
        error_code();
    }
    

    
    // output a little message for fun :)

?>
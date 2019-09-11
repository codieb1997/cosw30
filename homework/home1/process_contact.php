<?php

// capture the data from our form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

   function error_code() {
        echo ', please go back and try again.';
        echo '<p><a href="contact.html">Restart here</a></p>';
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
    } else (empty($_REQUEST['email']) == true) {
        echo 'Check your email';
        error_code();
    } 
    

    
    // output a little message for fun :)

?>
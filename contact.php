<?php
    $name 		= $_POST['name'];
    $email 		= $_POST['email'];
    $subject 	= $_POST['subject'];
    $message 		= $_POST['message'];
    $output 	= "Name: ".$name."\n\n Email: ".$email."\n\n Subject: ".$subject."\n\n Message: ".$message;
    //set your email address to receive messages
    $to 		= 'example@yourEmail.com';
    $headers	= 'From: "'.$email.'"';

    // Send the email.
    if (mail($to, $name, $output, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo "Thank You! Your message has been sent.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

?>

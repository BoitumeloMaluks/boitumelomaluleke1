
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "btmaluleke684@gmail.com"; 

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $message = $_POST["message"];

    $subject = "Contact Form Submission from $first_name $last_name";
    $body = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nContact Number: $contact_number\nMessage:\n$message";

    if (mail($to_email, $subject, $body)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
}
?>

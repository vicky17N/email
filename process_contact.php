<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "vicky6369ece@gmail.com"; // Replace with the actual recipient's email address

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    $success = mail($to, "Contact Form Submission", $email_message, $headers);

    if ($success) {
        header("Location: tnx.html");
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Sorry, there was an error processing your request.";
}
?>

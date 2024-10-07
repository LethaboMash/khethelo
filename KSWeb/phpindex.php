<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = "kshabangu116@gmail.com";

    // Create the email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Create the email body
    $email_body = "You have received a new message from the contact form:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        // Redirect or inform the user upon success
        echo "Message sent successfully!";
    } else {
        echo "Unable to send email. Please try again later.";
    }
} else {
    // If the request method is not POST, redirect to the main page
    header("Location: phpindex.php");
    exit();
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["number"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Set your email address where you want to receive emails
    $to = "mbux.270@gmail.com";

    // Set your email subject
    $subject = "New contact form submission from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers
    $email_headers = "From: $name <$email>";

    // Send the email
    if (mail($to, $subject, $email_content, $email_headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will contact you shortly.";
    } else {
        // Email not sent
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // If not a POST request, redirect back to the contact form
    header("Location: /contact.html");
}
?>

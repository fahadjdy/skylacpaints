<?php
    $name = $_POST['cf-name'];
    $email = $_POST['cf-email'];
    $message = $_POST['cf-message'];

    $subject = $_POST['cf-subject'];
    $to = "info@skylacpaints.com";
    
    // Prepare email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Prepare email body
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Send email
    $success = mail($to, $subject, $email_body, $headers);

    // Prepare response
    if ($success) {
        $response = array("status" => "success", "message" => "Thank you for your message! We'll get back to you soon.");
    } else {
        $response = array("status" => "error", "message" => "Oops! Something went wrong. Please try again later.");
    }

    // Send JSON response back to the previous page
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
?>  
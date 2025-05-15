<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
   try {
     $to = 'emailgn123@gmail.com';
    $subject = htmlspecialchars($_POST['subject'] ?? 'Contact Form');
    $message = htmlspecialchars($_POST['message'] ?? '');
    $from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
   } catch (\Throwable $th) {
    echo "Something went wrong while sending the email.";
   }
}
?>

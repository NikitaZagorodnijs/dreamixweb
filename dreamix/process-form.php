<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $business_field = htmlspecialchars(trim($_POST['business_field']));
    $design = htmlspecialchars(trim($_POST['design']));
    $deadline = htmlspecialchars(trim($_POST['deadline']));
    $website_size = htmlspecialchars(trim($_POST['website_size']));

    // Email settings
    $to = "zagorodnijsn@gmail.com"; // Replace with your email
    $subject = "New Website Inquiry from $name";
    $message = "You have a new inquiry:\n\n" .
               "Name: $name\n" .
               "Email: $email\n" .
               "Business Field: $business_field\n" .
               "Has Design: $design\n" .
               "Preferred Deadline: $deadline\n" .
               "Website Size: $website_size\n";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Thank you! Your details have been sent.'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error! Please try again.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request!";
}
?>

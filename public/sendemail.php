<?php
// Disable caching and set the response type to JSON
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');

// Update recipient email
$to = 'danushkaaberathna0@gmail.com'; 

// Email template file
$email_template = 'simple.html';

// Retrieve form data
$subject    = strip_tags($_POST['subject']);
$email      = strip_tags($_POST['email']);
$phone      = strip_tags($_POST['phone']);
$name       = strip_tags($_POST['name']);
$company    = strip_tags($_POST['company']);
$city       = strip_tags($_POST['city']);
$message    = nl2br(htmlspecialchars($_POST['message'], ENT_QUOTES));
$result     = array();

// Validate required fields (Name, Email, Message)
if (empty($name)) {
    $result = array('response' => 'error', 'empty' => 'name', 'message' => '<strong>Error!</strong> Name is empty.');
    echo json_encode($result);
    die;
}

if (empty($email)) {
    $result = array('response' => 'error', 'empty' => 'email', 'message' => '<strong>Error!</strong> Email is empty.');
    echo json_encode($result);
    die;
}

if (empty($message)) {
    $result = array('response' => 'error', 'empty' => 'message', 'message' => '<strong>Error!</strong> Message body is empty.');
    echo json_encode($result);
    die;
}

// Setup email headers
$headers  = "From: " . $name . ' <' . $email . '>' . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Prepare template tags to replace in the email content
$templateTags = array(
    '{{subject}}' => $subject,
    '{{email}}'   => $email,
    '{{message}}' => $message,
    '{{name}}'    => $name,
    '{{company}}' => $company,
    '{{city}}'    => $city,
    '{{phone}}'   => $phone
);

// Get the contents of the email template
$templateContents = file_get_contents(dirname(__FILE__) . '/email-templates/' . $email_template);

// Replace template tags with actual values
$contents = strtr($templateContents, $templateTags);

// Send the email
if (mail($to, $subject, $contents, $headers)) {
    $result = array('response' => 'success', 'message' => '<strong>Success!</strong> Mail Sent.');
} else {
    $result = array('response' => 'error', 'message' => '<strong>Error!</strong> Cannot Send Mail.');
}

// Return the result as a JSON response
echo json_encode($result);
die;

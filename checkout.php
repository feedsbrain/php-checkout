<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$referrer = $_SERVER['HTTP_REFERER'];

if ($referrer === '' || $referrer === null) {
    http_response_code(403);
    die('Forbidden');
}

require_once './vendor/swiftmailer/swiftmailer/lib/swift_required.php';

include './config/email.php';
include './includes/postdata.php';
include './includes/header.php';
include './includes/details.php';
include './includes/footer.php';

// Populating E-Mail Template
$email_template = $email_header . $email_details . $email_footer;

// Create the Transport
$transport = Swift_SmtpTransport::newInstance($smtp_server, $smtp_port, $smtp_security)
        ->setUsername($smtp_username)
        ->setPassword($smtp_password);

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance()
        ->setSubject('Order Submission at ' . $shop_name)
        ->setFrom(array($shop_email => $shop_bizname))
        ->setTo(array($email => $first_name . ' ' . $last_name))
        ->setBcc(array($shop_email => $shop_bizname))
        ->setBody($email_template)
        ->setContentType('text/html');

// Send the message
$result = $mailer->send($message);

// Just give simple response that service calling was OK
echo 'OK: ' . $email;

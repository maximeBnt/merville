<?php
include('Mail.php');

$recipients = 'paxman2@hotmail.fr';

$headers['From']    = 'maxime.binet@outlook.com';
$headers['To']      = 'paxman2@hotmail.fr';
$headers['Subject'] = 'Test message';

$body = 'Test message';

$smtpinfo["host"] = "smtp-mail.outlook.com";
$smtpinfo["port"] = "25";
$smtpinfo["auth"] = true;
$smtpinfo["username"] = "maxime.binet@outlook.com";
$smtpinfo["password"] = "Asokasok11";


// Create the mail object using the Mail::factory method
$mail_object =& Mail::factory("smtp", $smtpinfo);

if ($mail_object->send($recipients, $headers, $body))
    echo "coucou";
else
    echo "connard";
?>
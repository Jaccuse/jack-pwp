<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer
 * library with Google reCAPTCHA integration.
 *
 * @author Jack Arnold (replicated during Rochelle Lewis's demo)
 *
 **/

require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");
require_once("mail-config.php");
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
    if (!$resp->isSuccess()) {
        throw(new Exception("reCAPTCHA error!"));
    }
    // sanitize inputs
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    $swiftMessage = new Swift_Message();
    $swiftMessage->setFrom([$email => $name]);
    $recipients = $MAIL_RECIPIENTS;
    $swiftMessage->setTo($recipients);
    $swiftMessage->setSubject($subject);
    $swiftMessage->setBody($message, "text/html");
    $swiftMessage->addPart(html_entity_decode($message), "text/plain");
    $smtp = new Swift_SmtpTransport("mail.jaccuse.site", 26);
    $mailer = new Swift_Mailer($smtp);
    $numSent = $mailer->send($swiftMessage, $failedRecipients);

    if($numSent !== count($recipients)) {
        throw(new RuntimeException("unable to send email"));
    }
    // report when sent successfully
    echo "<div class=\"alert alert-success\" role=\"alert\">Email successfully sent.</div>";
} catch(Exception $exception) {
    echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh shnap</strong> Unable to send email: " . $exception->getMessage() . "</div>";
}
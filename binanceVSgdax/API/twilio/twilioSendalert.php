<?php
// Required if your environment does not handle autoloading
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require'vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC466f61b9836ae24e69af8e042d41ed41';
$token = '4541b0b629d9e9dc25b0580d4b94caac';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+15558675309',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+15017250604',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);

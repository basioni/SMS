<?php
require "Services/Twilio.php";
class SMS {

	

	
/* Send Message With Twilio
===========================*/ 	
function send_with_twilio()
{
$AccountSid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$AuthToken = "YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY";

// Your valid Twilio phone number
$fromNumber = "+14325551212";

// Create a new Twilio Rest Client
$client = new Services_Twilio($AccountSid, $AuthToken);

// Get the number and message we submitted
$toNumber = "+1" . $_REQUEST["number"];
$message = $_REQUEST["message"];

// If testing we only need to load the PHP page in the browser
if ($testing) {
    $fromNumber = "+14325551212";
    $toNumber = "+14325551212";
    $message = "This is a test. Time is " . date('h:i.s');
}

// Send SMS
// - $fromNumber is your Twilio number
// - $toNumber is any phone number
// - $message is the sms body
try {
    $sms = $client->account->messages->sendMessage($fromNumber, $toNumber, $message);

    // Display a confirmation message on the screen
    echo "An SMS message was sent to $toNumber";
}
catch (Exception $e) {
    echo "The message was not sent!<br><br>";
    // If you don't see the previous message
    // Check to see if your Twilio phone number is correct in the $fromNumber
    // Check to see if the number you are texting is verified (the $toNumber)
    // The $toNumber must be verified if you are using a trial Twilio account

    echo "From Number: " . $fromNumber." (must be your Twilio phone number)<br>";
    echo "To Number: " . $toNumber." (this must be a verified phone number if you are using a trial account)<br>";
    echo "Message: " . $message."<br>";
    echo "<br>";
}
	}
	
	
	
}

?>
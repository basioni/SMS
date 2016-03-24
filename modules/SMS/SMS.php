<?php
require "Services/Twilio.php";
class SMS {
var $snds_id = "";
var $snds_to = "";
var $snds_date = "";
var $snds_API = "";
var $snds_message = "";
var $snds_type = "";
var $snds_status= "";
	
/* insert new SMS to DB
====================== */

	function insert_Custom_sms_sends()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("INSERT INTO sms_sends SET 
	snds_to ='".$this->snds_to."' , 
	snds_date ='".$this->snds_date."' , 
	snds_API='".$this->snds_API."' , 
	snds_message ='".$this->snds_message ."' , 
	snds_type='Custom' , snds_status='Sent' 	;");

	$conn->close();
	}	

/* insert new SMS to DB
====================== */

	function insert_Scheduled_sms_sends()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("INSERT INTO sms_sends SET 
	snds_to ='".$this->snds_to."' , 
	snds_date ='".$this->snds_date."' , 
	snds_API='".$this->snds_API."' , 
	snds_message ='".$this->snds_message ."' , 
	snds_type='Scheduled' , snds_status='Planned' 	;");

	$conn->close();
	}	
	
/* Get SMS History
===========================*/ 		

	function get_sms_history()
	{	
	$SMS = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	
	$result = $conn->query("SELECT * FROM sms_sends ORDER BY snds_id DESC ;");

	while($row = $result->fetch_assoc())
	{
		$SMS .= '<tr><td>'.$row['snds_id'].'</td>';
		$SMS .= '<td>'.$row['snds_to'].'</td>';
		$SMS .= '<td>'.$row['snds_date'].'</td>';
		$SMS .= '<td>'.$row['snds_message'].'</td>';
		$SMS .= '<td>'.$row['snds_status'].'</td></tr>';
	}

	$conn->close();
	
	return $SMS;
	}
	
	/* Get SMS Scheduled
===========================*/ 		

	function get_sms_scheduled()
	{	
	$SMS = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	
	$result = $conn->query("SELECT * FROM sms_sends WHERE snds_type='Scheduled' AND snds_status='Planned' ORDER BY snds_id DESC ;");

	while($row = $result->fetch_assoc())
	{
		$SMS .= '<tr><td>'.$row['snds_id'].'</td>';
		$SMS .= '<td>'.$row['snds_to'].'</td>';
		$SMS .= '<td>'.$row['snds_date'].'</td>';
		$SMS .= '<td>'.$row['snds_message'].'</td>';
		$SMS .= '<td>'.$row['snds_status'].'</td></tr>';
	}

	$conn->close();
	
	return $SMS;
	}

	/** Return All Scheduled SMS Count 
========================== **/	
		function get_all_scheduled_Count()
	{	
	$all_groups = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	
	$result = $conn->query("SELECT * FROM sms_sends WHERE snds_type='Scheduled' AND snds_status='Planned';");
	$num_rows = mysqli_num_rows($result);

	
	$conn->close();
	
	return $num_rows;
	}

	
/** Return Today Scheduled SMS Count 
========================== **/	
		function get_today_scheduled_Count()
	{	
	$all_groups = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$today = date("Y-m-d");
	$result = $conn->query("SELECT * FROM sms_sends WHERE snds_type='Scheduled' AND snds_status='Planned' AND snds_date ='". $today ."';");
	$num_rows = mysqli_num_rows($result);

	
	$conn->close();
	
	return $num_rows;
	}	
	
/** Return Today Sent SMS Count in JSON format
========================== **/	
		function get_today_sent_Count()
	{	
	$all_groups = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$today = date("Y-m-d");
	$result = $conn->query("SELECT * FROM sms_sends WHERE snds_status='Sent' AND snds_date ='". $today ."' ;");
	$num_rows = mysqli_num_rows($result);

	
	$conn->close();
	
	return $num_rows;
	}
	
/** Return ALL Sent SMS Count
========================== **/	
		function get_all_sent_Count()
	{	
	$all_groups = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM sms_sends WHERE snds_status='Sent'  ;");
	$num_rows = mysqli_num_rows($result);

	
	$conn->close();
	
	return $num_rows;
	}
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
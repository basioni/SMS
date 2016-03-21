<?php

require 'SMS.php';
require '../contacts/contacts.php';


$SMS = new SMS();
$contact = new Contacts();
$recipients = "";
if(isset($_POST["sendSmsButton"]))
{
$date = date("Y-m-d");
 // if send to group.
	if( $_POST["sendtoradio"] == "Group")
	{
		$recipients = $contact->get_group_numbers($_POST["ConGroupID"]);
	}
	// if send to Contacts and numbers (recipients)
	else 
	{
		//echo $_POST["sendtoradio"] ;
		$recipients =  $_POST["recipients"];
	//	foreach ($recipients as $selected_option) echo $selected_option ;
	}
	
	$SMS->snds_date = $date;
	$SMS->snds_API = $_POST["asapi"] ;
	$SMS->snds_message = $_POST["messageBody"] ;
for ($i=0; $i<count($recipients); $i++)
{
	$SMS->snds_to = $recipients[$i] ;
	$SMS->insert_Custom_sms_sends();
}

echo'<script>alert("Your Message has been successfully sent! " );</script>';
echo '<script>location.replace("../../#sendingsms");</script>';
}

if(isset($_POST["scheduleSmsButton"]))
{
 // if send to group.
	if( $_POST["sendtoradio"] == "Group")
	{
		$recipients = $contact->get_group_numbers($_POST["ConGroupID"]);
	}
	// if send to Contacts and numbers (recipients)
	else 
	{
		//echo $_POST["sendtoradio"] ;
		$recipients =  $_POST["recipients"];
	//	foreach ($recipients as $selected_option) echo $selected_option ;
	}
	
	$SMS->snds_date = $_POST["years"] ."-". $_POST["months"] ."-". $_POST["days"];
	$SMS->snds_API = $_POST["asapi"] ;
	$SMS->snds_message = $_POST["messageBody"] ;
for ($i=0; $i<count($recipients); $i++)
{
	$SMS->snds_to = $recipients[$i] ;
	$SMS->insert_Scheduled_sms_sends();
}

echo'<script>alert("Your Message has been successfully Scheduled! " );</script>';
echo '<script>location.replace("../../#sendingsms");</script>';
}

?>
<?php

require 'Reminder.php';
require '../contacts/contacts.php';


$REMINDER = new Reminder();
$contact = new Contacts();
if(isset($_POST["sendAppointmentButton"]))
{
$REMINDER->load_birthday($_POST["BirthdayID"]);
$date = date("Y-m-d");
$next_year = date("Y")+1;
$contactID = $REMINDER->rmnd_to ;
	$REMINDER->rmnd_date = $date;
	$REMINDER->rmnd_API = $_POST["asapi"] ;
	$REMINDER->rmnd_message = $_POST["messageBody"] ;
	$REMINDER->rmnd_to = $_POST["mobile"];
	$REMINDER->update_appointment();

	// set next year Reminder 
	
	$REMINDER->rmnd_date = $next_year . date("-m-d");
	$REMINDER->rmnd_to = $contactID ;
	$REMINDER->insert_Appointment_reminder();
echo'<script>alert("Your Appointment Reminder has been successfully sent! " );</script>';
echo '<script>location.replace("../../#appointmentslist");</script>';
}

?>
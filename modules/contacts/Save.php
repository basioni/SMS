<?php

require 'contacts.php';
require '../Reminder/Reminder.php';

$contact = new Contacts();
$reminder = new Reminder();
if(isset($_POST["addNewContactForm"]))
{

if(isset($_POST["firstName"]))
$contact->first_name = $_POST["firstName"];

if(isset($_POST["lastName"]))
$contact->last_name = $_POST["lastName"];

if(isset($_POST["email"]))
$contact->email = $_POST["email"];

if(isset($_POST["mobile"]))
$contact->mobile = $_POST["mobile"];


if(isset($_POST["address"]))
$contact->address = $_POST["address"];

if(isset($_POST["groups"]))
$contact->group .= $_POST["groups"];

if(isset($_POST["years"]) && isset($_POST["months"]) && isset($_POST["years"]))
$contact->birthday = $_POST["years"] ."-". $_POST["months"] ."-". $_POST["days"];

$contact->insert_contact();

$next_year = date("Y")  + 1;

$reminder->rmnd_to = $contact->contact_id;
$reminder->rmnd_date = $next_year ."-". $_POST["months"] ."-". $_POST["days"];

$reminder->insert_birthdaywish_reminder();

$reminder->rmnd_date = $next_year ."-". date("m-d");
$reminder->insert_Appointment_reminder();

echo'<script>alert("Your Contact has been successfully Saved! " );</script>';
echo '<script>location.replace("../../#contactslist");</script>';
}

?>
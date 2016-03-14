<?php

require 'contacts.php';


$contact = new Contacts();
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

if(isset($_POST["birthDay"]))
$contact->birthday = $_POST["birthDay"];

if(isset($_POST["address"]))
$contact->address = $_POST["address"];

if(isset($_POST["groups"]))
$contact->group .= $_POST["groups"];

$contact->insert_contact();

echo '<script>location.replace("../../#contactslist");</script>';
}

?>
<?php

require 'contacts.php';


$contact = new Contacts();
$contact->load_contact($_POST["contact"]);

if(isset($_POST["updateContactForm"]))
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

$contact->update_contact();

echo'<script>alert("Your Contact has been successfully Updated! " );</script>';
echo '<script>location.replace("../../#contactview?contact='.$_POST["contact"].'");</script>';
}

?>
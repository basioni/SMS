<?php

require 'contacts.php';


$contact = new Contacts();
if(isset($_GET["contact"]))
{
$contact->contact_id = $_GET["contact"];
$contact->delete_contact();

echo '<script>location.replace("../../#contactslist");</script>';
}

?>
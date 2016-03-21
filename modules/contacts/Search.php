<?php

require 'contacts.php';

$contact = new Contacts();

echo $contact->get_all_contacts_JSON();

if(isset($_GET["firstName"]))
echo $_GET["firstName"] ;


?>
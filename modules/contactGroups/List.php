<?php

require 'contactGroups.php';

$contact = new ContactGroups();

echo $contact->get_all_groups_JSON();



?>
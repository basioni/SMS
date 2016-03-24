<?php

require 'SMSTemplate.php';

$Templates = new SMSTemplate();

echo $Templates->get_all_templates_JSON();



?>
<?php

require 'SMSTemplate.php';


$template = new SMSTemplate();
if(isset($_GET["id"]))
{
$template->template_id = $_GET["id"];
$template->delete_template();

echo '<script>location.replace("../../#smsTemplates");</script>';
}

?>
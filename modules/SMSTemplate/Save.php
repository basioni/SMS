<?php

require 'SMSTemplate.php';


$template = new SMSTemplate();
if(isset($_POST["addNewTemplateForm"]))
{

if(isset($_POST["templateName"]))
$template->template_name = $_POST["templateName"];

if(isset($_POST["templateMessage"]))
$template->template_message = $_POST["templateMessage"];

$template->insert_template();

echo'<script>alert("Your Template has been successfully Added! " );</script>';
echo '<script>location.replace("../../#smsTemplates");</script>';
}

?>
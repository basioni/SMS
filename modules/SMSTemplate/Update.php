<?php
require 'SMSTemplate.php';

$template = new SMSTemplate();
$template->load_template($_POST["templateID"]);


if(isset($_POST["updateTemplateForm"]))
{
if(isset($_POST["templateName"]))
$template->template_name = $_POST["templateName"];

if(isset($_POST["templateMessage"]))
$template->template_message = $_POST["templateMessage"];

$template->update_template();
echo'<script>alert("Your Template has been successfully Updated! " );</script>';
echo '<script>location.replace("../../#smsTemplates");</script>';
}

?>
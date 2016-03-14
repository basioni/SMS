<?php

require 'SMSAPI.php';


$API = new SMSAPI();
if(isset($_POST["addNewApiForm"]))
{

if(isset($_POST["referenceID"]))
$API->api_reference_id = $_POST["referenceID"];

if(isset($_POST["gateway"]))
$API->api_gateway = $_POST["gateway"];

if(isset($_POST["accountSID"]))
$API->api_account_sid = $_POST["accountSID"];

if(isset($_POST["authToken"]))
$API->api_auth_token = $_POST["authToken"];

if(isset($_POST["senderID"]))
$API->api_sender_id = $_POST["senderID"];

if(isset($_POST["apistatus"]))
$API->api_status = $_POST["apistatus"];

$API->insert_api();

echo '<script>location.replace("../../#smsApisList");</script>';
}

?>
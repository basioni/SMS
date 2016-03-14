<?php

require 'SMSAPI.php';


$API = new SMSAPI();
if(isset($_GET["id"]))
{
$API->api_id = $_GET["id"];
$API->delete_api();

echo '<script>location.replace("../../#smsApisList");</script>';
}

?>
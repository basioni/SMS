<?php

require 'SMS.php';

$sms = new SMS();
if(isset($_GET["view"]))
switch ($_GET["view"]) {
    case "allScheduled":
        echo $sms->get_all_scheduled_Count();
        break;
	case "todayScheduled":
        echo $sms->get_today_scheduled_Count();
        break;
	case "todaySMS":
        echo $sms->get_today_sent_Count();
        break;
	case "allSMS":
        echo $sms->get_all_sent_Count();
        break;
}




?>
<?php

require 'Reminder.php';

$reminder = new Reminder();
if(isset($_GET["view"]))
switch ($_GET["view"]) {
    case "allAppointments":
        echo $reminder->get_all_appointments_Count();
        break;
	case "todayAppointments":
        echo $reminder->get_today_appointments_Count();
        break;
	case "allBirthdayscount":
        echo $reminder->get_all_birthdays_Count();
        break;
	case "todayBirthdayscount":
        echo $reminder->get_today_birthdays_Count();
        break;
}




?>
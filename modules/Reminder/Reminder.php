<?php
require "Services/Twilio.php";
class Reminder {
var $rmnd_id = "";
var $rmnd_to = "";
var $rmnd_date = "";
var $rmnd_API = "";
var $rmnd_message = "";
var $rmnd_type = "";
var $rmnd_status= "";
	
/* insert next birthday wish reminder to DB
====================== */
	function insert_birthdaywish_reminder()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("INSERT INTO sms_reminders SET 
	rmnd_to ='".$this->rmnd_to."' , 
	rmnd_date ='".$this->rmnd_date."' , 
	rmnd_type='BirthdayWish' , rmnd_status='Planned' 	;");

	$conn->close();
	}	

	
/* Get Birthday Wishes List
===========================*/ 		

	function get_all_birthdays()
	{	
	$Brithdays = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$today = date("Y-m-d");
	$result = $conn->query("SELECT * FROM sms_reminders JOIN contacts on 	rmnd_to = sub_id WHERE rmnd_type='BirthdayWish' AND rmnd_status='Planned' AND rmnd_date LIKE '". $today ."' ;");

	while($row = $result->fetch_assoc())
	{
	   $Brithdays .= '<tr><td>'.$row['rmnd_id'].'</td>';
		$Brithdays .= '<td>'.$row['sub_first_name'] ." ". $row['sub_last_name'].'</td>';
		$Brithdays .= '<td>'.$row['rmnd_date'].'</td>';
		$Brithdays .= '<td>Planned</td>';
		$Brithdays .= '<td class="text-center"><a href="#birthdaysend?id='.$row['rmnd_id'].'" title="Edit & Send Birthday Wish"><i class="fa fa-paper-plane"></i></a></td></tr>';
	}

	$conn->close();
	
	return $Brithdays;
	}
	
/* Load  Birthday Wishes data
===========================*/ 		
	function load_birthday($id)
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
		
	$result = $conn->query("SELECT * FROM sms_reminders WHERE rmnd_id= ". $id ." ; ");

	while($row = $result->fetch_assoc())
	{
		$this->rmnd_id= $id;
		$this->rmnd_to= $row['rmnd_to'];
		$this->rmnd_date= $row['rmnd_date'];
	}

	$conn->close();
	
	}

	/* Update Birthdaywish
====================== */
	function update_birthday_wish()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	$result = $conn->query("UPDATE sms_reminders SET 
	rmnd_to ='". $this->rmnd_to ."' , 
	rmnd_date ='". $this->rmnd_date ."' , 
	rmnd_API='". $this->rmnd_API ."' , 
	rmnd_message ='". $this->rmnd_message ."' , 
	rmnd_status='Sent' 	
	WHERE  rmnd_id=". $this->rmnd_id ." ;");
	$conn->close();
	}	

/* insert next Appointment reminder to DB
====================== */
	function insert_Appointment_reminder()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("INSERT INTO sms_reminders SET 
	rmnd_to ='". $this->rmnd_to ."' , 
	rmnd_date ='". $this->rmnd_date ."' , 
	rmnd_type='Appointment' , rmnd_status='Planned' 	;");

	$conn->close();
	}	

/* Get Appointments Remiders List
===========================*/ 		

	function get_all_Appointments()
	{	
	$Brithdays = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
		$today = date("Y-m-d");
	$result = $conn->query("SELECT * FROM sms_reminders JOIN contacts on 	rmnd_to = sub_id WHERE rmnd_type='Appointment' AND rmnd_status='Planned'  AND rmnd_date LIKE '". $today ."' ;");

	while($row = $result->fetch_assoc())
	{
	   $Brithdays .= '<tr><td>'.$row['rmnd_id'].'</td>';
		$Brithdays .= '<td>'.$row['sub_first_name'] ." ". $row['sub_last_name'].'</td>';
		$Brithdays .= '<td>'.$row['rmnd_date'].'</td>';
		$Brithdays .= '<td>Planned</td>';
		$Brithdays .= '<td class="text-center"><a href="#appointmentsend?id='.$row['rmnd_id'].'" title="RECORD VISIT"><i class="fa fa-calendar-check-o"></i></a></td></tr>';
	}

	$conn->close();
	
	return $Brithdays;
	}
	
	/* Update Appointment
====================== */
	function update_appointment()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	$result = $conn->query("UPDATE sms_reminders SET 
	rmnd_to ='". $this->rmnd_to ."' , 
	rmnd_date ='". $this->rmnd_date ."' , 
	rmnd_API='". $this->rmnd_API ."' , 
	rmnd_message ='". $this->rmnd_message ."' , 
	rmnd_status='Sent' 	
	WHERE  rmnd_id=". $this->rmnd_id ." ;");
	$conn->close();
	}	
	
	
}

?>
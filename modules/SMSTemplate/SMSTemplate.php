<?php

class SMSTemplate {
var $template_id;
var $template_name;
var $template_message;

	///////////////////////////////////////////////////////////// insert new SMS Template to DB.
	function set_template($name, $message)
	{
	$this->template_name = $name;
	$this->template_message = $message;
	}
	///////////////////////////////////////////////////////////// insert new template to DB.
	function insert_template()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("INSERT INTO sms_templates SET template_name ='".$this->template_name."' , template_message ='".$this->template_message."' ;");
	$conn->close();
	}	
	
	///////////////////////////////////////////////////////////// Update template in DB.
	function update_template()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);

	$result = $conn->query("UPDATE sms_templates SET template_name ='".$this->template_name."' , template_message ='".$this->template_message."' WHERE template_id=".$this->template_id.";	 ");
	$conn->close();
	}	
	
	///////////////////////////////////////////////////////// Delete Template
	function delete_template()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	$conn->query("DELETE FROM sms_templates WHERE template_id=". $this->template_id ." ;");
	$conn->close();
	}
	
	///////////////////////////////////////////////////////// Load Template from DB
	function load_template($id)
	{
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	$result = $conn->query("SELECT * FROM sms_templates WHERE template_id= ". $id ." ;");

	while($row = $result->fetch_assoc())
	{
	    $this->template_id = $id;
		$this->template_name = $row['template_name'];
		$this->template_message = $row['template_message'];
	}
	$conn->close();
	}
	
	/////////////////////////////////////////////////////////Get Single Contact Group 
	function get_group()
	{
	$all_groups = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
		
	$result = $conn->query("SELECT * FROM contact_groups WHERE group_id= ". $this->group_id ." ;");
	while($row = $result->fetch_assoc())
	{
	    $all_groups .= '<tr><td>Group ID</td><td>'.$row['group_id'].'</td></tr>';
		$all_groups .= '<tr><td>Group Name</td><td>'.$row['group_name'].'</td></tr>';
	}
	$conn->close();
	return $all_groups;
	}
	
	///////////////////////////////////////////////////////// GET all groups rows
	function get_all_groups()
	{	
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM contact_groups;");

	while($row = $result->fetch_assoc())
	{
		$all_contacts .= '<tr><td>'.$row['group_id'].'</td>';
		$all_contacts .= '<td>'.$row['group_name'].'</td>';
		$all_contacts .= '<td class="text-center"><a href="#groupview?id='.$row['group_id'].'" title="VIEW"><i class="fa fa-list"></i></a> <a href="#groupedit?id='.$row['group_id'].'" title="EDIT" ><i class="fa fa-pencil"></i></a> <a href="modules/contactGroups/Delete.php?id='.$row['group_id'].'" title="DELETE"><i class="fa fa-trash"></i></a></td></tr>';
	}

	$conn->close();
	
	return $all_contacts;
	}
	
	///////////////////////////////////////////////////////// GET all groups rows
	function get_query_groups()
	{	
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM contact_groups WHERE  group_name LIKE '". $this-group_name ."' ;");

	while($row = $result->fetch_assoc())
	{
		$all_contacts .= '<tr><td>'.$row['group_id'].'</td>';
		$all_contacts .= '<td>'.$row['group_name'].'</td>';
		$all_contacts .= '<td class="text-center"><a href="#groupview?id='.$row['group_id'].'" title="VIEW"><i class="fa fa-list"></i></a> <a href="#groupedit?id='.$row['group_id'].'" title="EDIT" ><i class="fa fa-pencil"></i></a> <a href="modules/contactGroups/Delete.php?id='.$row['group_id'].'" title="DELETE"><i class="fa fa-trash"></i></a></td></tr>';
	}

	$conn->close();
	
	return $all_contacts;
	}	
	
	
	
}

?>
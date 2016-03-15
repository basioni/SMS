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
		die('Could not connect: '.$conn->connect_error);
	
	$conn->query("DELETE FROM sms_templates WHERE template_id=". $this->template_id ." ;");
	$conn->close();
	}
	
	///////////////////////////////////////////////////////// Load Template from DB
	function load_template($id)
	{
	$templates_results = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM sms_templates WHERE template_id= ". $id ." ;");

	while($row = $result->fetch_assoc())
	{
	    $this->template_id = $id;
		$this->template_name = $row['template_name'];
		$this->template_message = $row['template_message'];
	}
	$conn->close();
	}
	
	/////////////////////////////////////////////////////////Get Single template 
	function get_template()
	{
	$all_groups = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
		
	$result = $conn->query("SELECT * FROM sms_templates WHERE template_id= ". $this->template_id ." ;");
	while($row = $result->fetch_assoc())
	{
	    $all_groups .= '<tr><td>Template ID</td><td>'.$row['template_id'].'</td></tr>';
		$all_groups .= '<tr><td>Template Name</td><td>'.$row['template_name'].'</td></tr>';
		$all_groups .= '<tr><td>Template Message</td><td>'.$row['template_message'].'</td></tr>';
	}
	$conn->close();
	return $all_groups;
	}
	
	///////////////////////////////////////////////////////// GET all Templates 
	function get_all_templates()
	{	
	$templates_results = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM sms_templates;");

	while($row = $result->fetch_assoc())
	{
		$templates_results .= '<tr><td>'.$row['template_id'].'</td>';
		$templates_results .= '<td>'.$row['template_name'].'</td>';
		$templates_results .= '<td>'.$row['template_message'].'</td>';
		$templates_results .= '<td class="text-center"><a href="#templateview?id='.$row['template_id'].'" title="VIEW"><i class="fa fa-list"></i></a>  <a href="modules/SMSTemplate/Delete.php?id='.$row['template_id'].'" title="DELETE"><i class="fa fa-trash"></i></a></td></tr>';
	}

	$conn->close();
	
	return $templates_results;
	}
	
	///////////////////////////////////////////////////////// GET all templates rows
	function get_query_templates()
	{	
	$templates_results = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM sms_templates WHERE  template_name LIKE '". $this-template_name ."' ;");

	while($row = $result->fetch_assoc())
	{
		$templates_results .= '<tr><td>'.$row['template_id'].'</td>';
		$templates_results .= '<td>'.$row['template_name'].'</td>';
		$templates_results .= '<td>'.$row['template_message'].'</td>';
		$templates_results .= '<td class="text-center"><a href="#templateview?id='.$row['template_id'].'" title="VIEW"><i class="fa fa-list"></i></a><a href="modules/SMSTemplate/Delete.php?id='.$row['template_id'].'" title="DELETE"><i class="fa fa-trash"></i></a></td></tr>';
	}

	$conn->close();
	
	return $templates_results;
	}	
	
		///////////////////////////////////////////////////////// GET all Templates in select options
	function get_short_options()
	{	
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error) die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM sms_templates  ORDER BY template_id DESC;");
	while($row = $result->fetch_assoc())
		$all_contacts .= '<option value="'.$row['template_message'].'">'.$row['template_name'].'</option>';

	$conn->close();
	
	return $all_contacts;
	}
	
	
	
}

?>
<?php

class ContactGroups {
var $group_id;
var $group_name;

	///////////////////////////////////////////////////////////// insert new Group to DB.
	function set_group($query)
	{
	$this->group_name = $query;
	}
	///////////////////////////////////////////////////////////// insert new Group to DB.
	function insert_group()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("INSERT INTO contact_groups SET group_name ='".$this->group_name."' ;");
	$conn->close();
	}	
	
		///////////////////////////////////////////////////////////// Update contact in DB.
	function update_group()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);

	$result = $conn->query("UPDATE contact_groups SET group_name ='".$this->group_name."' WHERE group_id=".$this->group_id.";	 ");
	$conn->close();
	}	
	
	///////////////////////////////////////////////////////// Delete Contact Group
	function delete_group()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	$conn->query("DELETE FROM contact_groups WHERE group_id=". $this->group_id ." ;");
	$conn->close();
	}
	
	///////////////////////////////////////////////////////// Load Contact Group from DB
	function load_group($id)
	{
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	$result = $conn->query("SELECT * FROM contact_groups WHERE group_id= ". $id ." ;");

	while($row = $result->fetch_assoc())
	{
	    $this->group_id = $id;
		$this->group_name = $row['group_name'];
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
	
			///////////////////////////////////////////////////////// GET all contacts Groups in select options
	function get_short_options()
	{	
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error) die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM contact_groups;");
	while($row = $result->fetch_assoc())
		$all_contacts .= '<option value="'.$row['group_id'].'">'.$row['group_name'].' </option>';

	$conn->close();
	
	return $all_contacts;
	}
	
}

?>
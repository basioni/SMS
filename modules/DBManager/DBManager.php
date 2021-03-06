<?php

class DBManager {
var $conn;
var $server = "localhost";
var $databaseuser ="booking_sms_user";
var $databasepassword = "sms_user";
var $databasename = "booking_sms_manager";

	///////////////////////////////////////////////////////////// insert new Group to DB.
	function connect_db()
	{
	$this->conn = new mysqli($server,$databaseuser,$databasepassword,$databasename);
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	
	
	}	
	
		///////////////////////////////////////////////////////////// Update contact in DB.
	function update_contact()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	
	$result = $conn->query("UPDATE contacts SET 
	sub_first_name='".$this->first_name."' , 
	sub_last_name='".$this->last_name."' , 
	sub_email='".$this->email."' , 
	sub_mobile='".$this->mobile."' , 
	sub_address='".$this->address."' , 
	sub_birthday='".$this->birthday."' , 
	sub_last_visit_date='".$this->last_visit."' ,
	sub_status='".$this->status."' , 
	sub_group='".$this->group."' 
	 WHERE sub_id=".$this->contact_id.";");


	$conn->close();
	
	}	
	///////////////////////////////////////////////////////// Delete Contact
	function delete_contact()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	$conn->query("DELETE FROM contacts WHERE sub_id=". $this->contact_id ." ;");
	$conn->close();
	}
	
	///////////////////////////////////////////////////////// Load Contact from DB
	function load_contact($id)
	{
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	$result = $conn->query("SELECT * FROM contacts WHERE sub_id= ". $id ." ;");

	while($row = $result->fetch_assoc())
	{
	    $this->contact_id = $id;
		$this->first_name= $row['sub_first_name'];
		$this->last_name= $row['sub_last_name'];
		$this->mobile= $row['sub_mobile'];
		$this->email= $row['sub_email'];
		$this->address= $row['sub_address'];
		$this->birthday= $row['sub_birthday'];
		$this->last_visit= $row['sub_last_visit_date'];
		$this->group= $row['sub_group'];
	}

	$conn->close();
	
	}
		///////////////////////////////////////////////////////// Single Contact
	function get_contact()
	{
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	$result = $conn->query("SELECT * FROM contacts WHERE sub_id= ". $this->contact_id ." ;");

	while($row = $result->fetch_assoc())
	{
	   //$all_contacts .= '{"contact_id":"'.$row['sub_id'].'","user_name":"'.$row['sub_user_name'].'", "first_name":"'.$row['sub_first_name'].'", "last_name":"'.$row['sub_last_name'].'", "email":"'.$row['sub_email'].'", "mobile":"'.$row['sub_mobile'].'", "address":"'.$row['sub_address'].'", "birthday":"'.$row['sub_birthday'].'", "status":"'.$row['sub_status'].'", "group":"'.$row['sub_group'].'"},' ;
		$all_contacts .= '<tr><td>Contact ID</td><td>'.$row['sub_id'].'</td></tr>';
		$all_contacts .= '<tr><td>First Name</td><td>'.$row['sub_first_name'].'</td></tr>';
		$all_contacts .= '<tr><td>Last Name</td><td>'.$row['sub_last_name'].'</td></tr>';
		$all_contacts .= '<tr><td>Mobile</td><td>'.$row['sub_mobile'].'</td></tr>';
		$all_contacts .= '<tr><td>Address</td><td>'.$row['sub_address'].'</td></tr>';
		$all_contacts .= '<tr><td>Date Of Birth</td><td>'.$row['sub_birthday'].'</td></tr>';
		$all_contacts .= '<tr><td>Last Visit Date</td><td>'.$row['sub_last_visit_date'].'</td></tr>';
	}

	$conn->close();
	
	return $all_contacts;
	}
	
	///////////////////////////////////////////////////////// GET all contacts rows
	function get_all_contacts()
	{	
	$all_contacts = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
	{
		die('Could not connect: '.$conn->connect_error);
	}
	
	$result = $conn->query("SELECT * FROM contacts;");

	while($row = $result->fetch_assoc())
	{
	   //$all_contacts .= '{"contact_id":"'.$row['sub_id'].'","user_name":"'.$row['sub_user_name'].'", "first_name":"'.$row['sub_first_name'].'", "last_name":"'.$row['sub_last_name'].'", "email":"'.$row['sub_email'].'", "mobile":"'.$row['sub_mobile'].'", "address":"'.$row['sub_address'].'", "birthday":"'.$row['sub_birthday'].'", "status":"'.$row['sub_status'].'", "group":"'.$row['sub_group'].'"},' ;
		$all_contacts .= '<tr><td>'.$row['sub_id'].'</td>';
		$all_contacts .= '<td>'.$row['sub_first_name'].'</td>';
		$all_contacts .= '<td>'.$row['sub_last_name'].'</td>';
		$all_contacts .= '<td>'.$row['sub_mobile'].'</td>';
		$all_contacts .= '<td>'.$row['sub_address'].'</td>';
		$all_contacts .= '<td>'.$row['sub_birthday'].'</td>';
		$all_contacts .= '<td>'.$row['sub_last_visit_date'].'</td>';
		$all_contacts .= '<td class="text-center"><a href="#contactview?contact='.$row['sub_id'].'" title="VIEW"><i class="fa fa-list"></i></a> <a href="#contactedit?contact='.$row['sub_id'].'" title="EDIT" ><i class="fa fa-pencil"></i></a> <a href="modules/contacts/Delete.php?contact='.$row['sub_id'].'" title="DELETE"><i class="fa fa-trash"></i></a></td></tr>';
	}

	$conn->close();
	
	return $all_contacts;
	}
	
	
	
	
	
}

?>
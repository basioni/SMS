<?php

class SMSAPI {
var $api_id;
var $api_reference_id;
var $api_gateway;
var $api_account_sid;
var $api_auth_token;
var $api_sender_id;
var $api_status;


	///////////////////////////////////////////////////////////// insert new api to DB.
	function insert_api()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("INSERT INTO SMS_apis SET 
	api_reference_id= '".$this->api_reference_id."' , 
	api_gateway= '".$this->api_gateway."' , 
	api_account_sid='".$this->api_account_sid."' , 
	api_auth_token='".$this->api_auth_token."' , 
	api_sender_id='".$this->api_sender_id."' , 
	api_status='".$this->api_status."'
	;");
	$conn->close();
	}	
	
		///////////////////////////////////////////////////////////// Update API in DB.
	function update_api()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
		
	$result = $conn->query("UPDATE SMS_apis SET 
	api_reference_id= '".$this->api_reference_id."' , 
	api_gateway= '".$this->api_gateway."' , 
	api_account_sid='".$this->api_account_sid."' , 
	api_auth_token='".$this->api_auth_token."' , 
	api_sender_id='".$this->api_sender_id."' , 
	api_status='".$this->api_status."'
	 WHERE api_id=".$this->api_id.";");
	$conn->close();
	}	
	
	///////////////////////////////////////////////////////// Delete API
	function delete_api()
	{
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$conn->query("DELETE FROM SMS_apis WHERE api_id=". $this->api_id ." ;");
	$conn->close();
	}
	
	///////////////////////////////////////////////////////// Load API from DB
	function load_api($id)
	{
	$APIS = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM SMS_apis WHERE api_id= ". $id ." ;");

	while($row = $result->fetch_assoc())
	{
	    $this->api_id = $id;
		$this->api_reference_id= $row['api_reference_id'];
		$this->api_gateway= $row['api_gateway'];
		$this->api_account_sid= $row['api_account_sid'];
		$this->api_auth_token= $row['api_auth_token'];
		$this->api_sender_id= $row['api_sender_id'];
		$this->api_status= $row['api_status'];
	}

	$conn->close();
	}
	
	///////////////////////////////////////////////////////// Return Single API
	function get_api()
	{
	$APIS = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	$result = $conn->query("SELECT * FROM SMS_apis WHERE api_id= ". $this->api_id ." ;");

	while($row = $result->fetch_assoc())
	{
	    $APIS .= '<tr><td>API ID</td><td>'.$row['api_id'].'</td></tr>';
		$APIS .= '<tr><td>Reference ID</td><td>'.$row['api_reference_id'].'</td></tr>';
		$APIS .= '<tr><td>Gateway</td><td>'.$row['api_gateway'].'</td></tr>';
		$APIS .= '<tr><td>Account SID</td><td>'.$row['api_account_sid'].'</td></tr>';
		$APIS .= '<tr><td>Auth Token</td><td>'.$row['api_auth_token'].'</td></tr>';
		$APIS .= '<tr><td>Sender ID</td><td>'.$row['api_sender_id'].'</td></tr>';
		$APIS .= '<tr><td>Status</td><td>'.$row['api_status'].'</td></tr>';
	}

	$conn->close();
	
	return $APIS;
	}
	
	///////////////////////////////////////////////////////// GET all APIs rows
	function get_all_apis()
	{	
	$APIS = '';
	$conn = new mysqli("localhost","booking_sms_user","sms_user","booking_sms_manager");
	
	if ($conn->connect_error)
		die('Could not connect: '.$conn->connect_error);
	
	
	$result = $conn->query("SELECT * FROM SMS_apis;");

	while($row = $result->fetch_assoc())
	{
		$APIS .= '<tr><td>'.$row['api_id'].'</td>';
		$APIS .= '<td>'.$row['api_reference_id'].'</td>';
		$APIS .= '<td>'.$row['api_gateway'].'</td>';
		$APIS .= '<td>'.$row['api_account_sid'].'</td>';
		$APIS .= '<td>'.$row['api_auth_token'].'</td>';
		$APIS .= '<td>'.$row['api_sender_id'].'</td>';
		$APIS .= '<td>'.$row['api_status'].'</td>';
		$APIS .= '<td class="text-center"> <a href="modules/SMSAPI/Delete.php?id='.$row['api_id'].'" title="DELETE"><i class="fa fa-trash"></i></a></td></tr>';
	}

	$conn->close();
	
	return $APIS;
	}
	
	
	
	
	
}

?>
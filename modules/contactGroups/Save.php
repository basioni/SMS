<?php

require 'contactGroups.php';


$group = new ContactGroups();
if(isset($_POST["addNewGroupForm"]))
{

if(isset($_POST["groupName"]))
$group->group_name = $_POST["groupName"];

$group->insert_group();

echo'<script>alert("Your Group has been successfully Added! " );</script>';
echo '<script>location.replace("../../#contactgroups");</script>';
}

?>
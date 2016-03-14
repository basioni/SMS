<?php

require 'contactGroups.php';


$group = new contactGroups();
$group->load_group($_POST["group"]);

if(isset($_POST["updateGroupsForm"]))
{
if(isset($_POST["groupName"]))
$group->group_name = $_POST["groupName"];

$group->update_group();

echo '<script>location.replace("../../#groupview?id='.$_POST["group"].'");</script>';
}

?>
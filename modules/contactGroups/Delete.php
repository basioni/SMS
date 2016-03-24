<?php

require 'contactGroups.php';


$group = new ContactGroups();
if(isset($_GET["group"]))
{
$group->group_id = $_GET["group"];
$group->delete_group();

echo '<script>location.replace("../../#contactgroups");</script>';
}

?>
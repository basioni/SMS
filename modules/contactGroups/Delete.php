<?php

require 'contactGroups.php';


$group = new contactGroups();
if(isset($_GET["id"]))
{
$group->group_id = $_GET["id"];
$group->delete_group();

echo '<script>location.replace("../../#contactgroups");</script>';
}

?>
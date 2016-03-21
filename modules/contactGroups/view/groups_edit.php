<?php
require '../contactGroups.php';

$group = new contactGroups();
$group->load_group($_GET["id"]);
?>

<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Update groups Group</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/contactGroups/Update.php" >
					<div class="form-group">
					<label>Update groups Group information: </label>
					</div>
					<input type="hidden" name="group" value="<?echo $_GET["id"];?> " />
					<div class="form-group">
						<label for="usrfirstname">Group Name*:</label>
						 <input type="text" class="form-control" name="groupName" value="<? echo $group->group_name;?>" required/>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="updateGroupsForm" value="Update Group" />
					</div>
				</form>
		</div>
	</div>
</section>


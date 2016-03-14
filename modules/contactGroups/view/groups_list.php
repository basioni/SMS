<?php
require '../contactGroups.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>Contact Groups</h2>
			<div class="main-area">
			<div>
				<a class="btn btn-default" href="#groupsadd"><i class="fa fa-plus-circle"></i> Add New</a>
			</div>
			<div>
				<form class="form-inline" role="form" method="POST" action="#contactgroups">
				  <div class="form-group">
					<input type="text" class="form-control" id="groupName" placeholder="Group Name" value="" />
					<button type="submit" class="btn btn-primary" id="searchgroups">SEARCH</button>
				  </div>
				  
				</form>
			</div>
			<?php
$groups_table = new ContactGroups();
if (isset($_POST["groupName"]))
{
echo $_POST["groupName"];
$groups_table->set_group($_POST["groupName"]);
$Tablerows = $groups_table->get_query_groups();
}
else
$Tablerows = $groups_table->get_all_groups();
echo 	'<div > 
				<table class="table table-bordered">
				  	<thead>
					  <tr class="info">
						<th>Group ID</th>
					    <th>Group name</th>
						<th>Actions</th>
					  </tr>
					</thead>
					<tbody>
					'.$Tablerows.'
					<tbody>
				</table>
		</div>
';			
?>
			</div>
		</div>
	</div>
</section>


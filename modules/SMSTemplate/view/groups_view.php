<?php
require '../contactGroups.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>Contacts Group Details</h2>
			<div class="main-area">
			<a class="btn btn-default" href="#contactgroups">Back to Groups</a>
<?php
$group_table = new ContactGroups();
$group_table->group_id = $_GET["id"];
$Tablerows = $group_table->get_group();
echo 	'		<table class="table table-bordered">
					<tbody>
					'.$Tablerows.'
					<tbody>
				</table>
		';			
?>
			</div>
		</div>
	</div>
</section>


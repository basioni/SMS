<?php
require '../contactGroups.php';


?>

<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Add New Group</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/contactGroups/Save.php" >
					<div class="form-group">
					<label>Enter a new Contacts Group details: </label>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="groupName" placeholder="Group Name*" value="" required/>
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="addNewGroupForm" value="Add Contacts Group" />
					</div>
				</form>
		</div>
	</div>
</section>


<?php
require '../SMSTemplate.php';


?>

<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Add New Template</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/SMSTemplate/Save.php" >
					<div class="form-group">
					<label>Enter SMS Template details: </label>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="templateName" placeholder="Template Name" value=""/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="templateMessage" placeholder="Template Message" value=""/>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="addNewTemplateForm" value="Add SMS Template" />
					</div>
				</form>
		</div>
	</div>
</section>


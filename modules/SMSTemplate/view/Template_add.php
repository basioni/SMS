<?php
require '../SMSTemplate.php';


?>

<section class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mainsection">

			<h2>Add New Template</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/SMSTemplate/Save.php" >
					<div class="form-group">
					<label>Enter SMS Template details: </label>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="templateName" placeholder="Template Name*" value="" required/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="templateMessage" placeholder="Template Message*" value="" required/>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="addNewTemplateForm" value="Add SMS Template" />
					</div>
				</form>
		</div>
	</div>
</section>


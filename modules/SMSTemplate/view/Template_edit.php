<?php
require '../SMSTemplate.php';
$template = new SMSTemplate();
if(isset($_GET["id"]))
$template->load_template($_GET["id"]);

?>

<section class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mainsection">

			<h2>Edit SMS Template</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/SMSTemplate/Update.php" >
					<div class="form-group">
					<label>Modify Template details: </label>
					<input type="hidden" name="templateID" value="<?echo $_GET["id"];?> " />
					</div>
					<div class="form-group">
					<label>Template Name*: </label>
						 <input type="text" class="form-control" name="templateName" value="<? echo $template->template_name; ?>" required/>
					</div>
					<div class="form-group">
					<label>Template Message*: </label>
						 <input type="text" class="form-control" name="templateMessage" value="<? echo $template->template_message ; ?>" required/>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="updateTemplateForm" value="Update template" />
					</div>
				</form>
		</div>
	</div>
</section>


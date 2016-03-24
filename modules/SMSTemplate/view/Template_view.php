<?php
require '../SMSTemplate.php';
?>
<section class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mainsection">
		
			<h2>SMS Template Details</h2>
			<div class="main-area">
			<a class="btn btn-default" href="#smsTemplates">Back to Templates</a>
<?php
$templates_table = new SMSTemplate();
$templates_table->template_id = $_GET["id"];
$Tablerows = $templates_table->get_template();
echo 	'		<table class="table table-hover">
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


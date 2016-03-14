<?php
require '../SMSTemplate.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>SMS Template Details</h2>
			<div class="main-area">
			<a class="btn btn-default" href="#smsTemplates">Back to Templates</a>
<?php
$templates_table = new SMSTemplate();
$templates_table->template_id = $_GET["id"];
$Tablerows = $templates_table->get_template();
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


<?php
require '../SMSTemplate.php';
?>
<section class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mainsection">
		
			<h2>SMS Templates</h2>
			<div class="main-area">
			<div>
				<a class="btn btn-primary" href="#TemplateAdd"><i class="fa fa-plus-circle"></i> Add New</a>
			</div>
			<?php
$templates_table = new SMSTemplate();
$Tablerows = $templates_table->get_all_templates();
echo 	'<div > 
					<table class="table table-striped">
				  	<thead>
					  <tr >
						<th>ID</th>
					    <th>Template Name</th>
					    <th>Template Message</th>
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


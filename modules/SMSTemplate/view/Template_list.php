<?php
require '../SMSTemplate.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>SMS Templates</h2>
			<div class="main-area">
			<div>
				<a class="btn btn-default" href="#TemplateAdd"><i class="fa fa-plus-circle"></i> Add New</a>
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
$templates_table = new SMSTemplate();
$Tablerows = $templates_table->get_all_templates();
echo 	'<div > 
				<table class="table table-bordered">
				  	<thead>
					  <tr class="info">
						<th>Template ID</th>
					    <th>Template name</th>
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


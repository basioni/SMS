<?php
require '../SMSAPI.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>SMS APIs</h2>
			<div class="main-area">
			<div>
				<a class="btn btn-default" href="#apiadd"><i class="fa fa-plus-circle"></i> Add New</a>
			</div>
			<?php
$APIS_table = new SMSAPI();
$Tablerows = $APIS_table->get_all_apis();
echo 	'<div > 
				<table class="table table-bordered">
				  	<thead>
					  <tr class="info">
					    <th>ID</th>
					    <th>Reference ID</th>
						<th>Gateway</th>
						<th>Account ID</th>
						<th>auth_token</th>
						<th>Sender ID</th>
						<th>Status</th>
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


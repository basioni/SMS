<?php
require '../SMS.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>Scheduled SMS</h2>
			<div class="main-area">
			<?php
$SMS_table = new SMS();
$Tablerows = $SMS_table->get_sms_scheduled();
echo 	'<div > 
				<table class="table table-bordered">
				  	<thead>
					  <tr class="info">
					    <th>ID</th>
					    <th>Recipient</th>
						<th>Date</th>
						<th>Message</th>
						<th>Status</th>
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


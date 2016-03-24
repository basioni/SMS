<?php
require '../SMS.php';
?>
<section class="container-fluid">
	<div class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mainsection">		
		
			<h2>SMS Sending History</h2>
			<div class="main-area">
			<?php
$SMS_table = new SMS();
$Tablerows = $SMS_table->get_sms_history();
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


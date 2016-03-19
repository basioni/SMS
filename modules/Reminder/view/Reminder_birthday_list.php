<?php
require '../Reminder.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>Birthday Wishes</h2>
			<div class="main-area">
			<?php
$Reminder_table = new Reminder();
$Tablerows = $Reminder_table->get_all_birthdays();
echo 	'<div > 
				<table class="table table-bordered">
				  	<thead>
					  <tr class="info">
					    <th>ID</th>
					    <th>Contact</th>
						<th>Date</th>
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


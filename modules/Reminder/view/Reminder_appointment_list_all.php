<?php
require '../Reminder.php';
?>
<section class="container-fluid">
	<div class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mainsection">		
			<h2>Upcoming Appointments Reminders</h2>
			<div class="main-area">
			<?php
$Reminder_table = new Reminder();
$Tablerows = $Reminder_table->get_all_appointments();
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


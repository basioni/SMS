<?php
require '../contacts.php';
require '../../contactGroups/contactGroups.php';
require '../../DatePick/DatePick.php';

$Calender = new DatePick();
$Calender->Get_birthday_Calender();

?>

<section class="container-fluid">
	<div class="row" >
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="mainsection">

			<h2>Add New Contact</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/contacts/Save.php" >
					<div class="form-group">
					<label>Enter a new contact details: </label>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="firstName" placeholder="First Name *" value="" required/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="lastName" placeholder="Last Name" />
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="mobile" placeholder="mobile *" required/>
					</div>
					<div class="form-group">
						 <input type="email" class="form-control" name="email" placeholder="Email *" required/>
					</div>
					<div class="form-group">
						 <textarea class="form-control" rows="5" name="address" placeholder="Address"></textarea>
					</div>
					<div class="form-group">
						 <label >Date Of Birth:</label>
							<?php	echo $Calender->years_selects ." ". $Calender->month_selects . " " . $Calender->day_selects; ?>
					</div>
					
					<div class="form-group">
						 <label >Add To Group:</label>
						  <select  class="form-control" name="groups">
							<option value="" >None</option>
							<?php echo contactgroups::get_short_options(); ?>
						  </select>
					</div>
					
					
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="addNewContactForm" value="Add Contact" />
					</div>
				</form>
		</div>
	</div>
</section>


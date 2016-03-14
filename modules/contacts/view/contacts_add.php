<?php
require '../contacts.php';


?>

<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Add New Contact</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/contacts/Save.php" >
					<div class="form-group">
					<label>Enter a new contact details: </label>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="firstName" placeholder="First Name" value=""/>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="lastName" placeholder="Last Name" />
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="mobile" placeholder="mobile" />
					</div>
					<div class="form-group">
						 <input type="email" class="form-control" name="email" placeholder="Email" />
					</div>
					<div class="form-group">
						 <textarea class="form-control" rows="5" name="address" placeholder="Address"></textarea>
					</div>
					<div class="form-group">
						 <input type="text" class="form-control" name="birthDay" placeholder="Date Of Birth" />
					</div>
					
					<div class="form-group">
						 <label >Add To Group:</label>
						  <select  class="form-control" name="groups">
							<option value="av" >a</option>
							<option value="bv" >b</option>
							<option value="cv">c</option>
							<option value="dv">d</option>
						  </select>
					</div>
					
					
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="addNewContactForm" value="Add Contact" />
					</div>
				</form>
		</div>
	</div>
</section>


<?php
require '../contacts.php';
require '../../contactGroups/contactGroups.php';
$contact = new Contacts();
$contact->load_contact($_GET["contact"]);
?>

<section class="container-fluid">
	<div class="row" >
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" id="mainsection">

			<h2>Update Contact</h2>
			<div class="main-area">

				<form class="form" role="form" method="POST" action="modules/contacts/Update.php" >
					<div class="form-group">
					<label>Update Contact information and update contact when you are done: </label>
					</div>
					<input type="hidden" name="contact" value="<?echo $_GET["contact"];?> " />
					<div class="form-group">
						<label for="usrfirstname">First Name*:</label>
						 <input type="text" class="form-control" name="firstName" value="<? echo $contact->first_name;?>" required/>
					</div>
					<div class="form-group">
						<label for="usrlastname">Last Name:</label>
						 <input type="text" class="form-control" name="lastName" value="<? echo $contact->last_name;?>"  />
					</div>
					<div class="form-group">
						<label for="usrmobile">Mobile*:</label>
						 <input type="text" class="form-control" name="mobile" value="<? echo $contact->mobile;?>" required/>
					</div>
					<div class="form-group">
						<label for="usremail">Email*:</label>
						<input type="email" class="form-control" name="email" value="<? echo $contact->email;?>" required/>
					</div>
					<div class="form-group">
						<label for="usraddress">Address:</label>
						 <textarea class="form-control" rows="5" name="address" ><? echo $contact->address;?></textarea>
					</div>
					<div class="form-group">
						<label for="usrbirthday">Date Of Birth*:</label>
						 <input type="text" class="form-control" name="birthDay" value="<? echo $contact->birthday;?>" />
					</div>
					
					<div class="form-group">
						 <label for="usergroups">Groups:</label>
						  <select class="form-control" name="groups">
						<option value="" selected>Contact Group</option>
							<?php echo contactGroups::get_short_options(); ?>
						  </select>
					</div>
					
					
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="updateContactForm" value="Update Contact" />
					</div>
				</form>
		</div>
	</div>
</section>


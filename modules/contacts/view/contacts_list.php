<?php
require '../contacts.php';
?>
<section class="container-fluid">
	<div class="row" style="min-height: 647px;">
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">
		
			<h2>Contacts</h2>
			<div class="main-area">
			<div>
				<a class="btn btn-default" href="#contactsadd"><i class="fa fa-plus-circle"></i> Add New</a>
				<button type="button" class="btn btn-warning btn-right"><i class="fa fa-upload"></i> Import</button>
				<button type="button" class="btn btn-info btn-right"><i class="fa fa-download"></i> Export</button>
			</div>
			<div>
				<form class="form-inline" role="form">
				  <div class="form-group">
					<input type="text" class="form-control" id="firstname" placeholder="First Name">
					<input type="text" class="form-control" id="lastname" placeholder="Last Name">
					<input type="text" class="form-control" id="mobile" placeholder="Mobile No.">
					<input type="email" class="form-control" id="email" placeholder="Email">
					<input type="text" class="form-control" id="birthdate" placeholder="Birth Date">
					<select class="form-control" id="contactgroup">
						<option selected>Contact Group</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				  <button type="submit" class="btn btn-primary">SEARCH</button>
				  </div>
				  
				</form>
			</div>
			<?php
$contacts_table = new Contacts();
$Tablerows = $contacts_table->get_all_contacts();
//echo $contacts_table->get_all_contacts();
echo 	'<div > 
				<table class="table table-bordered">
				  	<thead>
					  <tr class="info">
					    <th>&nbsp;</th>
					    <th>Firstname</th>
						<th>Lastname</th>
						<th>Mobile No.</th>
						<th>Email</th>
						<th>Birthdate</th>
						<th>Last Visit</th>
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


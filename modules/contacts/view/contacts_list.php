<?php
require '../contacts.php';
require '../../contactGroups/contactGroups.php';
?>
<section class="container-fluid">
	<div class="row" >
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" id="mainsection">

			<h2>Contacts</h2>
			<div>
				<a class="btn btn-default" href="#contactsadd"><i class="fa fa-plus-circle"></i> Add New</a>
				<button type="button" class="btn btn-warning btn-right"><i class="fa fa-upload"></i> Import</button>
				<button type="button" class="btn btn-info btn-right"><i class="fa fa-download"></i> Export</button>
			</div>
			<div class="main-area">
				<form class="form-inline search" role="form">
				  <div class="form-group">
				  	<label >Search Contacts: </label>
					<input class="form-control" ng-model="firstnamef" placeholder="First Name">
					<input class="form-control" ng-model="lastnamef" placeholder="Last Name">
					<input type="text" class="form-control"  ng-model="mobilef" placeholder="Mobile No.">
					<input type="email" class="form-control"  ng-model="emailf" placeholder="Email">
					<input type="text" class="form-control"  ng-model="birthdatef" placeholder="Birth Date">
				  </div>
				</form>
				
				<!--   Contacts List View !--> 
				<div>
					<table class="table table-striped">
							<thead>
							  <tr class="info">
								<th>Name</th>
								<th>Mobile No.</th>
								<th>Email</th>
								<th>Birthdate</th>
								<th>Last Visit</th>
								<th>Actions</th>
							  </tr>
							</thead>
							<tbody>
							  <tr ng-repeat="x in contactslist | filter : firstnamef | filter : lastnamef | filter : mobilef | filter : emailf | filter : birthdatef">
								<td>{{ x.first_name  + "  " + x.last_name}}</td>
								<td>{{ x.mobile }}</td>
								<td>{{ x.email }}</td>
								<td>{{ x.birthday }}</td>
								<td>{{ x.last_visit }}</td>
								<td><a href="#contactview?contact={{ x.contact_id }}" title="VIEW" ><i class="fa fa-list" data-dismiss="modal"></i></a> <a href="#contactedit?contact={{ x.contact_id }}" title="EDIT" data-dismiss="modal"><i class="fa fa-pencil"></i></a> <a href="modules/contacts/Delete.php?contact={{ x.contact_id }}" title="DELETE" data-dismiss="modal"><i class="fa fa-trash"></i></a></td>
							  </tr>
							  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


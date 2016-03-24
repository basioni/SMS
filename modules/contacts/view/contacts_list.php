<?php
require '../contacts.php';
require '../../contactGroups/contactGroups.php';
require '../../DatePick/DatePick.php';

$Calender = new DatePick();
$Calender->Get_birthday_Calender();
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	Contacts
	<small>view of contacts list</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li><a href="#">Contacts</a></li>
  </ol>
</section>

<section class="content">
	
<div class="row">
	<div class="col-xs-12">
	  <div class="box">
		<div class="box-header">
		  <button class="btn btn-primary" data-toggle="modal" data-target="#contactAddPane" ><i class="fa fa-plus-circle"></i> Add New</button>
		  <div class="box-tools">
		  <form class="form-inline search" role="form">
			  <div class="form-group">
				<input class="form-control" ng-model="firstnamef" placeholder="First Name">
				<input class="form-control" ng-model="lastnamef" placeholder="Last Name">
				<input type="text" class="form-control"  ng-model="mobilef" placeholder="Mobile No.">
				<input type="email" class="form-control"  ng-model="emailf" placeholder="Email">
				<input type="text" class="form-control"  ng-model="birthdatef" placeholder="Birth Date">
				<label><i class="fa fa-search"></i></label>
			  </div>
			</form>
		  </div>
		</div><!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
		  <table class="table table-hover">
		  <thead>
			<tr>
			<th>Name</th>
			<th>Mobile No.</th>
			<th>Email</th>
			<th>Birthdate</th>
			<th>Contact Group</th>
			<th>Last Visit</th>
			<th>Actions</th>
			</tr>
			</thead>
			<tbody>
		  <tr ng-repeat="x in contactslist | orderBy : 'first_name' | filter : firstnamef | filter : lastnamef | filter : mobilef | filter : emailf | filter : birthdatef" >
			<td>{{ x.first_name  + "  " + x.last_name}}</td>
			<td>{{ x.mobile }}</td>
			<td>{{ x.email }}</td>
			<td>{{ x.birthday }}</td>
			<td>{{ x.group }}</td>
			<td>{{ x.last_visit }}</td>
	<!--		<td><a data-toggle="modal" data-target="#contentViewPane" href="#contactview?contact={{ x.contact_id }}" title="VIEW" ><i class="fa fa-list" ></i></a> <a href="#contactedit?contact={{ x.contact_id }}" title="EDIT" ><i class="fa fa-pencil"></i></a> <a href="modules/contacts/Delete.php?contact={{ x.contact_id }}" title="DELETE" ><i class="fa fa-trash"></i></a></td> -->
			<td><label data-toggle="modal" data-target="#contentViewPane" href="" ng-click="viewContact(x)" title="VIEW" ><i class="fa fa-list" ></i></label> 	<label data-toggle="modal" data-target="#contactEditPane" ng-click="viewContact(x)"  title="EDIT" ><i class="fa fa-pencil"></i></label>  <label href="modules/contacts/Delete.php?contact={{ x.contact_id }}" title="DELETE" ><i class="fa fa-trash"></i></label></td> 
		  
		  </tr>
		  </tbody>
		  </table>
		</div><!-- /.box-body -->
		<div class="box-footer clearfix">
					
		<button type="button" class="btn btn-warning btn-right"><i class="fa fa-upload"></i> Import</button>
		<a href="modules/contacts/export.php" class="btn btn-info btn-right"><i class="fa fa-download"></i> Export</a>
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
        </div>
	  </div><!-- /.box -->
	</div>
</div>
</section>

<!-- Single Contact view -->
<div id="contentViewPane" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Single Contact View content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Details</h4>
      </div>
      <div class="modal-body">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
			  <img class="profile-user-img img-responsive img-circle" src="dist/img/avatar5.png" alt="User profile picture">
			  <h3 class="profile-username text-center">{{ v_first_name  + "  " + v_last_name}}</h3>
			  <p class="text-muted text-center">Contact Details</p>

			  <ul class="list-group list-group-unbordered">
				<li class="list-group-item">
				  <b>Contact ID</b> <a class="pull-right">{{ v_contact_id }}</a>
				</li>
				<li class="list-group-item">
				  <b>Mobile No.</b> <a class="pull-right">{{ v_mobile}}</a>
				</li>
				<li class="list-group-item">
				  <b>Email</b> <a class="pull-right">{{ v_email}}</a>
				</li>
				<li class="list-group-item">
				  <b>Date Of Birth</b> <a class="pull-right">{{ v_birthday}}</a>
				</li>
				<li class="list-group-item">
				  <b>Last Visited Date</b> <a class="pull-right">{{ v_last_visit }}</a>
				</li>
				<li class="list-group-item">
				  <b>Address</b> <a class="pull-right">{{ v_address }}</a>
				</li>
				<li class="list-group-item">
				  <b>Contact Group</b> <a class="pull-right">{{ v_group }}</a>
				</li>
			  </ul>
			 <label class="btn btn-warning" label data-toggle="modal" data-target="#contactEditPane" title="EDIT" ><i class="fa fa-pencil"></i> Edit</label> 
			 <a class="btn btn-danger" href="modules/contacts/Delete.php?contact={{ v_contact_id }}" title="DELETE" ><i class="fa fa-trash"></i> Delete</a>	
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
      </div>
    </div>

  </div>
</div>

<!-- Contact Edit -->
<div id="contactEditPane" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Contact Edit-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Contact Details</h4>
      </div>
      <div class="modal-body">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<form class="form" role="form" method="POST" action="modules/contacts/Update.php" >
					<div class="form-group">
					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<label for="contact" class="label label-primary">Contact ID</label> {{ v_contact_id }}<input type="hidden" name="contact" value="{{ v_contact_id }}" />
						</li>
						<li class="list-group-item">
							<label for="firstName" class="label label-primary">First Name *</label><input type="text"  class="form-control" name="firstName" value="{{ v_first_name }}" required/>
							<label for="lastName" class="label label-primary">Last Name *</label> <input type="text"  class="form-control" name="lastName" value="{{ v_last_name}}" required/>
							<label for="mobile" class="label label-primary">Mobile No. *</label> <input type="text" class="form-control" name="mobile" value="{{ v_mobile}}" required/>
							<label for="email" class="label label-primary">Email *</label><input type="email" class="form-control" name="email" value="{{ v_email}}" required/>
							<label for="birthDay" class="label label-primary">Date Of Birth *</label><input type="text" class="form-control" name="birthDay" value="{{ v_birthday}}" required/>
							<label for="address" class="label label-primary">Address</label><input type="text" class="form-control" name="address" value="{{ v_address }}" />
							 <label for="groups" class="label label-primary">Contacts Group</label>
							 <select class="form-control" name="groups">
								<option value="" selected>None</option>
								<?php echo contactGroups::get_short_options(); ?>
							  </select>
						</li>
					  </ul>
					</div>
			 <input type="submit" class="btn btn-primary" name="updateContactForm" value="Update Contact" />
			 <label  class="btn btn-default"  data-toggle="modal" data-target="#contentViewPane" ng-click="viewContact(x)" title="VIEW" ><i class="fa fa-close" ></i> Cancel</label> 
			</form>
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
      </div>
    </div>

  </div>
</div>

<!-- Contact Add New 
============================================ !-->
<div id="contactAddPane" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Contact Add New-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Contact</h4>
      </div>
      <div class="modal-body">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<form class="form" role="form" method="POST" action="modules/contacts/Save.php" >
					<div class="form-group">
					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							
							<label for="firstName" class="label label-primary">First Name *</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-user"></i>
							  </div>
							  <input type="text"  class="form-control" name="firstName" value="" required/>
							</div><!-- /.input group -->
							<label for="lastName" class="label label-primary">Last Name</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-user"></i>
							  </div>
							   <input type="text"  class="form-control" name="lastName" value="" />
							</div><!-- /.input group -->
							<label for="mobile" class="label label-primary">Mobile No. *</label> 
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-mobile"></i>
							  </div>
							   <input type="text" class="form-control" name="mobile" value="" required/>
							</div><!-- /.input group -->
							<label for="email" class="label label-primary">Email *</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-envelope-o"></i>
							  </div>
							   <input type="email" class="form-control" name="email" value="" required/>
							</div><!-- /.input group -->
							<label for="birthDay" class="label label-primary" >Date Of Birth *</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" class="form-control pull-right" id="reservation"  name="birthDay" required />
							</div><!-- /.input group -->																					
							<label for="address" class="label label-primary">Address</label>
							 <div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-map-marker"></i>
							  </div>
							   <input type="text" class="form-control" name="address" value="" />
							</div><!-- /.input group -->
							 <label for="groups" class="label label-primary">Contacts Group</label>
							 <div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-users"></i>
							  </div>
							   <select class="form-control" name="groups">
								<option value="" selected>None</option>
								<?php echo contactGroups::get_short_options(); ?>
							  </select>
							</div><!-- /.input group -->
							 
						</li>
					  </ul>
					</div>
			 <input type="submit" class="btn btn-primary" name="addNewContactForm" value="Add Contact" />
			 <label  class="btn btn-default" data-dismiss="modal" title="Close" ><i class="fa fa-close" ></i> Cancel</label> 
			</form>
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
      </div>
    </div>

  </div>
</div>
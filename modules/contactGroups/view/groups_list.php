<?php
require '../contactGroups.php';
?>


<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	Contact Groups
	<small>view of contacts Groups list</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li><a href="#">Contact Groups</a></li>
  </ol>
</section>

<section class="content">
	
<div class="row">
	<div class="col-xs-12">
	  <div class="box">
		<div class="box-header">
		  <button class="btn btn-primary" data-toggle="modal" data-target="#groupAddPane" ><i class="fa fa-plus-circle"></i> Add New</button>
		  <div class="box-tools">
		  <form class="form-inline search" role="form">
			  <div class="form-group">
				<input class="form-control" ng-model="groupidf" placeholder="Group ID">
				<input class="form-control" ng-model="groupnamef" placeholder="Group Name">
				<label><i class="fa fa-search"></i></label>
			  </div>
			</form>
		  </div>
		</div><!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
		  <table class="table table-hover">
		  <thead>
			<tr>
			<th>Group ID</th>
			<th>Group Name</th>
			<th>Actions</th>
			</tr>
			</thead>
			<tbody>
		  <tr ng-repeat="x in groupslist | orderBy : 'group_name' | filter : groupnamef | filter : groupidf" >
			<td>{{ x.group_id }}</td>
			<td>{{ x.group_name }}</td>
	<td><label data-toggle="modal" data-target="#groupViewPane" href="" ng-click="viewGroup(x)" title="VIEW" ><i class="fa fa-list" ></i></label> 	<label data-toggle="modal" data-target="#groupEditPane" ng-click="viewGroup(x)"  title="EDIT" ><i class="fa fa-pencil"></i></label>  <a href="modules/contactGroups/Delete.php?group={{ x.group_id }}" title="DELETE" ><i class="fa fa-trash"></i></a></td> 
		  
		  </tr>
		  </tbody>
		  </table>
		</div><!-- /.box-body -->
	  </div><!-- /.box -->
	</div>
</div>
</section>

<!-- Single Contact view 
=========================================== !-->
<div id="groupViewPane" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Single Group View content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Group Details</h4>
      </div>
      <div class="modal-body">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
			  <h3 class="profile-username text-center">{{ v_group_name }}</h3>
			  <p class="text-muted text-center">Contact Group Details</p>

			  <ul class="list-group list-group-unbordered">
				<li class="list-group-item">
				  <b>Group ID</b> <a class="pull-right"> {{ v_group_id }}</a>
				</li>
				<li class="list-group-item">
				  <b>Group Name</b> <a class="pull-right"> {{ v_group_name }}</a>
				</li>
			  </ul>
			 <label class="btn btn-warning" label data-toggle="modal" data-target="#groupEditPane" title="EDIT" ><i class="fa fa-pencil"></i> Edit</label> 
			 <a class="btn btn-danger" href="modules/contactGroups/Delete.php?group={{ v_group_id }}" title="DELETE" ><i class="fa fa-trash"></i> Delete</a>	
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
      </div>
    </div>

  </div>
</div>

<!-- Group Edit View
===================== !-->
<div id="groupEditPane" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Group Edit-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Group Details</h4>
      </div>
      <div class="modal-body">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<form class="form" role="form" method="POST" action="modules/contactGroups/Update.php" >
					<div class="form-group">
					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							<label for="contact" class="label label-primary">Group ID</label> {{ v_group_id }}<input type="hidden" name="group" value="{{ v_group_id }}" />
						</li>
						<li class="list-group-item">
							<label for="firstName" class="label label-primary">Group Name *</label><input type="text"  class="form-control" name="groupName" value="{{ v_group_name }}" required/>
						</li>
					  </ul>
					</div>
			 <input type="submit" class="btn btn-primary" name="updateGroupsForm" value="Update Group" />
			 <label  class="btn btn-default"  data-toggle="modal" data-target="#groupViewPane" ng-click="viewGroup(x)" title="VIEW" ><i class="fa fa-close" ></i> Cancel</label> 
			</form>
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
      </div>
    </div>

  </div>
</div>

<!-- Group Add New 
============================================ !-->
<div id="groupAddPane" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Contact Add New-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Group</h4>
      </div>
      <div class="modal-body">
		<!-- Profile Image -->
		<div class="box box-primary">
			<div class="box-body box-profile">
				<form class="form" role="form" method="POST" action="modules/contactGroups/Save.php" >
					<div class="form-group">
					  <ul class="list-group list-group-unbordered">
						<li class="list-group-item">
							
							<label for="groupName" class="label label-primary">Group Name *</label>
							<div class="input-group">
							  <div class="input-group-addon">
								<i class="fa fa-user"></i>
							  </div>
							  <input type="text"  class="form-control" name="groupName" placeholder="Group Name" value="" required/>
						</li>
					  </ul>
					</div>
			 <input type="submit" class="btn btn-primary" name="addNewGroupForm" value="Add Group" />
			 <label  class="btn btn-default" data-dismiss="modal" title="Close" ><i class="fa fa-close" ></i> Cancel</label> 
			</form>
			</div><!-- /.box-body -->
		  </div><!-- /.box -->
      </div>
    </div>

  </div>
</div>
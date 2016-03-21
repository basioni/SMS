
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SMS Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Load Modules Routers!-->
  <script src="assets/js/routers.js"></script>

  <!-- Load Module Validations !-->
  <script src="assets/js/SMS.js"></script>

  <!-- Load Modules Controllers!-->
  <script src="modules/contacts/controllers/contactsController.js"></script>
  
  </head>
<body ng-app="MenuCntrlsApp">
<div  > 
<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #3c8dbc;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#dashboard">SMS MANAGER</a>
    </div>
  </div>
</nav>

<section class="container-fluid" style="padding-top: 50px;margin: 0 auto;  width: 100%; height:100%;" >
	<div class="row" >
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 menu-dark" >
			<h2><i class="fa fa-tachometer"></i> Admin Dashboard</h2>
			<div class="panel-group" id="menuaccordion">
				<div class="panel panel-dark">
					<div class="panel-heading"><label class="panel-title" data-toggle="collapse" data-parent="#menuaccordion" data-target="#collapse1"><i class="fa fa-user-plus"></i> My Phonebook <i class="fa fa-sort-down"></i></label></div>
					<div id="collapse1" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item" ><a href="#contactslist"><i class="fa fa-user"></i> Contacts</a></li>
							<li class="list-group-item"><a href="#contactgroups"><i class="fa fa-users"></i> Contact Groups</a></li>
						</ul>
					</div>
				</div>

				<div class="panel panel-dark">
					<div class="panel-heading"><label class="panel-title" data-toggle="collapse" data-parent="#menuaccordion" data-target="#collapse2"><i class="fa fa-envelope-o"></i> My SMS <i class="fa fa-sort-down"></i></label></div>
					<div id="collapse2" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item" ><a href="#smsTemplates"><i class="fa fa-paper-plane"></i> SMS Templates</a></li>
							<li class="list-group-item" ><a href="#sendingsms"><i class="fa fa-paper-plane"></i> Send SMS</a></li>
							<li class="list-group-item"><a href="#scheduledsms"><i class="fa fa-hourglass-half"></i> Scheduled SMS</a></li>
							<li class="list-group-item"><a href="#smshistory"><i class="fa fa-history"></i> SMS History</a></li>
						</ul>
					</div>
				</div>
				<div class="panel panel-dark">
					<div class="panel-heading"><label class="panel-title" data-toggle="collapse" data-parent="#menuaccordion" data-target="#collapse3"><i class="fa fa-bell"></i> My Appointments <i class="fa fa-sort-down"></i></label></div>
					<div id="collapse3" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item"><a href="#birthdaywishes"><i class="fa fa-birthday-cake"></i> Birthday Wishes Reminders</a></li>
							<li class="list-group-item" ><a href="#appointmentslist"><i class="fa fa-bell"></i> Appointments Reminders</a></li>
						</ul>
					</div>
				</div>
				<!-- !-->
				<div class="panel panel-dark">
					<div class="panel-heading"><h4 class="panel-title"><label data-toggle="collapse" data-parent="#menuaccordion" data-target="#MenuStngsList"><i class="fa fa-gears"></i> Settings <i class="fa fa-sort-down"></i></label></h4></div>
					<div id="MenuStngsList" class="panel-collapse collapse">
						<ul class="list-group">
							<li class="list-group-item"><a href="#smsApisList"><i class="fa fa-cogs"></i> SMS API</a></li>
						</ul>
					</div>
				</div>
			</div> 
		</div>
		
		<div ng-view></div>


	</div>
</section>

	</div>
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMS Manager | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
	<!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
	<!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Load Modules Routers!-->
  <script src="assets/js/routers.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  <!-- Load Module Validations !-->
  <script src="assets/js/SMS.js"></script>
	
  <!-- Load Application Controllers
  ================================!-->

  

<?php
require_once 'modules/contactGroups/contactGroups.php';
require_once 'modules/contacts/contacts.php';
require_once 'modules/SMSTemplate/SMSTemplate.php';


?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini" ng-app="MenuCntrlsApp">
  
    <script src="modules/contacts/controllers/contactsController.js"></script>
  <script src="modules/contactGroups/controllers/groupsController.js"></script>
  <script src="modules/SMSTemplate/controllers/templatesController.js"></script>
  <script src="assets/js/CountController.js"></script>
  
    <div class="wrapper" ng-controller="TopMenuCounters">
	
      <header class="main-header" >
        <!-- Logo -->
        <a href="#dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SMS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SMS</b> Manager</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
			<!-- All Scheduled SMS: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-hourglass-half"></i>
                  <span class="label label-warning">{{ allScheduledCount }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{ allScheduledCount }} Scheduled SMS Messages</li>
                  <li class="footer"><a href="#scheduledsms">See All Scheduled SMS Messages</a></li>
                </ul>
              </li>
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-birthday-cake"></i>
                  <span class="label label-warning">{{ todaybirthdayCount }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{ todaybirthdayCount }} Pending Birthday Wishes</li>
                  <li class="footer"><a href="#">See All Pending Birthday Wishes</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-paper-plane"></i>
                  <span class="label label-success">{{ todaySmsCount }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{ todaySmsCount }} Sent SMS Today</li>
                  <li class="footer"><a href="#smshistory">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">{{ todayAppointCount }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have {{ todayAppointCount }} Appointments Reminders</li>
                  <li class="footer">
                    <a href="#">View all Reminders</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrator</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      Kartikey Tanna
                      <small>Administrator</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">CONTROL PANEL</li>
            <li class="active treeview">
              <a href="#dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
            </li>
			
            <li class="treeview">
              <a href="">
                <i class="fa fa-files-o"></i>
                <span>My Phone Book</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#contactslist"><i class="fa fa-user"></i> Contacts</a></li>
                <li><a href="#contactgroups"><i class="fa fa-users"></i> Contact Groups</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="">
                <i class="fa fa-envelope-o"></i>
                <span>My SMS</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#smsTemplates"><i class="fa fa-th"></i> SMS Templates </a></li>
                <li><a href="#sendingsms"><i class="fa fa-paper-plane"></i> Send SMS</a></li>
                <li><a href="#scheduledsms"><i class="fa fa-hourglass-half"></i> Scheduled SMS <span class="label label-warning pull-right">{{ allScheduledCount }}</span></a></li>
                <li><a href="#smshistory"><i class="fa fa-history"></i> SMS History <span class="label label-success pull-right">{{ todaySmsCount }}</span></a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="">
                <i class="fa fa-bell"></i>
                <span> My Birthday Wishes</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#birthdaywishes"><i class="fa fa-birthday-cake"></i>Today's Birthday Wishes <span class="label label-warning pull-right">{{ todaybirthdayCount }}</span></a></li>
                <li><a href="#birthdayallwishes"><i class="fa fa-birthday-cake"></i>All Birthday Wishes <span class="label label-warning pull-right">{{ allbirthdayCount }}</span></a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="">
                <i class="fa fa-bell"></i>
                <span> My Appointments Reminders</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#appointmentslist"><i class="fa fa-paper-plane"></i>Today's Appointments <span class="label label-warning pull-right">{{ todayAppointCount }}</span></a></li>
                <li><a href="#appointmentsalllist"><i class="fa fa-paper-plane"></i>All Appointments <span class="label label-warning pull-right">{{ allAppointCount }}</span></a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

	  
	  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" ng-view>
  
      </div>
	  
	  
	  
	  
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>SMS Manager</strong> .
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#smsApisList"><i class="fa fa-cogs"></i> SMS API Settings</a></li>
        </ul>

      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>

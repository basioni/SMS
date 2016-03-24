<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	Dashboard
	<small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
	<li><a href="#dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-yellow">
		<div class="inner">
		  <h3>{{ allScheduledCount }}</h3>
		  <p>Scheduled SMS</p>
		</div>
		<div class="icon">
		  <i class="fa fa-hourglass-half"></i>
		</div>
		<a href="#scheduledsms" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-aqua">
		<div class="inner">
		  <h3>{{ todaybirthdayCount }}</h3>
		  <p> Birthday Wishes</p>
		</div>
		<div class="icon">
		  <i class="fa fa-birthday-cake"></i>
		</div>
		<a href="#birthdaywishes" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-green">
		<div class="inner">
		  <h3>{{ todaySmsCount }}</h3>
		  <p>Sent SMS</p>
		</div>
		<div class="icon">
		  <i class="fa fa-paper-plane"></i>
		</div>
		<a href="#smshistory" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div><!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-red">
		<div class="inner">
		  <h3>{{ todayAppointCount }}</h3>
		  <p> Appointments</p>
		</div>
		<div class="icon">
		  <i class="fa fa-bell"></i>
		</div>
		<a href="#appointmentslist" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div><!-- ./col -->
  </div><!-- /.row -->
  <!-- Main row -->
  <div class="row">
	<!-- Left col -->
	<section class="col-lg-8 connectedSortable">

	  <!-- Schdduled SMS List -->
	  <div class="box box-warning">
		<div class="box-header">
		  <i class="ion ion-clipboard"></i>
		  <h3 class="box-title">Today's Scheduled SMS</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		  <ul class="todo-list">
			<li>
			  <span class="text">Scheduled SMS 1</span>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			
		  </ul>
		</div><!-- /.box-body -->
		<div class="box-footer clearfix no-border">
		  <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> View All</button>
		</div>
	  </div><!-- /.box -->

	<!-- Birthday Wishes List -->
	  <div class="box box-info">
		<div class="box-header">
		  <i class="ion ion-clipboard"></i>
		  <h3 class="box-title">Today's Birthday Wishes Reminder</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		  <ul class="todo-list">
			<li>
			  <span class="text">Scheduled SMS 1</span>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			
		  </ul>
		</div><!-- /.box-body -->
		<div class="box-footer clearfix no-border">
		  <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> View All</button>
		</div>
	  </div><!-- /.box -->

	<!-- Birthday Wishes List -->
	  <div class="box box-info">
		<div class="box-header">
		  <i class="ion ion-clipboard"></i>
		  <h3 class="box-title">Today's Appointments Reminder</h3>
		</div><!-- /.box-header -->
		<div class="box-body">
		  <ul class="todo-list">
			<li>
			  <span class="text">Appointments Reminder 1</span>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			
		  </ul>
		</div><!-- /.box-body -->
		<div class="box-footer clearfix no-border">
		  <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> View All</button>
		</div>
	  </div><!-- /.box -->


	</section><!-- /.Left col -->
	<!-- right col (We are only adding the ID to make the widgets sortable)-->
	<section class="col-lg-4 connectedSortable">
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-paper-plane"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Sent</span>
                  <span class="info-box-number">{{ allSmsCount }} SMS</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                    {{ todaySmsCount }} Today
                  </span>
					</div><!-- /.info-box-content -->
				</div><!-- /.info-box -->
				
              <div class="info-box bg-blue">
                <span class="info-box-icon"><i class="fa fa-hourglass-half"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Birthday Wishes</span>
                  <span class="info-box-number">{{ allbirthdayCount }} Reminders</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                     {{ todaybirthdayCount }} Today
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
			  
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-hourglass-half"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Reminders</span>
                  <span class="info-box-number">{{ allAppointCount }} Reminders</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                     {{ todayAppointCount }} Today
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
			  
			   <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-hourglass-half"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Scheduled</span>
                  <span class="info-box-number">{{ allScheduledCount }} SMSs</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                     {{ todayScheduledCount }} Today
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
	</section><!-- right col -->
  </div><!-- /.row (main row) -->

</section><!-- /.content -->
<!-- /.content-wrapper -->
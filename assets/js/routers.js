var MenuApp = angular.module('MenuCntrlsApp', ['ngRoute']);
	MenuApp.config(function($routeProvider) {
		$routeProvider
		
			.when('/dashboard', {
				templateUrl : 'modules/dashboard/dashboard.php',
				controller  : 'mainController'
			})

			// routes for the contact Module
			.when('/contactslist', {
				templateUrl : 'modules/contacts/view/contacts_list.php',
				controller  : 'contactController'
				
			})			
			
			.when('/contactsadd', {
				templateUrl : 'modules/contacts/view/contacts_add.php',
				controller  : 'contactController'
			})	
			
			.when('/contactview', {
				templateUrl : function(params) {return 'modules/contacts/view/contacts_view.php?contact='+ params.contact;},
				controller  : 'contactController'
			})	
			
			.when('/contactedit', {
				templateUrl : function(contacteditparams) {return 'modules/contacts/view/contacts_edit.php?contact='+ contacteditparams.contact;},
				controller  : 'contactController'
			})
			
			// route for the contact Groups Views
			.when('/contactgroups', {
				templateUrl : function(GroupsParams) {return 'modules/contactGroups/view/groups_list.php?'+ GroupsParams.groupName;},
				controller  : 'groupsController'
			})
			
			.when('/groupsadd', {
				templateUrl : 'modules/contactGroups/view/groups_add.php',
				controller  : 'groupsController'
			})	
			
			.when('/groupview', {
				templateUrl : function(GroupsParams) {return 'modules/contactGroups/view/groups_view.php?id='+ GroupsParams.id;},
				controller  : 'groupsController'
			})	
			
			.when('/groupedit', {
				templateUrl : function(GroupsEditParams) {return 'modules/contactGroups/view/groups_edit.php?id='+ GroupsEditParams.id;},
				controller  : 'groupsController'
			})		
			
			// route for the SMS Templates View
			.when('/smsTemplates', {
				templateUrl : function(SMSParams) {return 'modules/SMSTemplate/view/Template_list.php?'+ SMSParams;},
				controller  : 'SMSTemplateController'
			})
			
			.when('/TemplateAdd', {
				templateUrl : 'modules/SMSTemplate/view/Template_add.php',
				controller  : 'SMSTemplateController'
			})	
			
			.when('/templateview', {
				templateUrl : function(GroupsParams) {return 'modules/SMSTemplate/view/Template_view.php?id='+ GroupsParams.id;},
				controller  : 'groupsController'
			})	
			
			// route for the Sending SMS View
			.when('/sendingsms', {
				templateUrl : 'modules/SMS/view/SMS_add.php',
				controller  : 'sendingSMSController'
			})
			
			// route for the SMS History
			.when('/smshistory', {
				templateUrl : 'modules/SMS/view/SMS_history.php',
				controller  : 'SMSHistoryController'
			})
			
			// route for the SMS History
			.when('/scheduledsms', {
				templateUrl : 'modules/SMS/view/SMS_scheduled.php',
				controller  : 'SMSHistoryController'
			})
			
			// route for the birthdaywishes SMS VIEW
			
			.when('/birthdaywishes', {
				templateUrl : 'modules/Reminder/view/Reminder_birthday_list.php',
				controller  : 'birthdayWishesController'
			})	
			
			.when('/birthdaysend', {
				templateUrl : function(BirthdayParams) {return 'modules/Reminder/view/Reminder_birthday_send.php?id='+ BirthdayParams.id;},
				controller  : 'birthdayWishesController'
			})	
			
			// route for the Appointments Reminders VIEW
			.when('/appointmentslist', {
				templateUrl : 'modules/Reminder/view/Reminder_appointment_list.php',
				controller  : 'AppointmentsController'
			})	
			
			.when('/appointmentsend', {
				templateUrl : function(AppointmentsParams) {return 'modules/Reminder/view/Reminder_appointment_send.php?id='+ AppointmentsParams.id;},
				controller  : 'AppointmentsController'
			})				
			
			// route for the SMS APIS VIEW
			.when('/smsApisList', {
				templateUrl : 'modules/SMSAPI/view/APIs_list.php',
				controller  : 'smshistoryController'
			})	
			
			.when('/apiadd', {
				templateUrl : 'modules/SMSAPI/view/APIs_add.php',
				controller  : 'smshistoryController'
			})				
			;
	});


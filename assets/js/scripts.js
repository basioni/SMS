var MenuApp = angular.module('MenuCntrlsApp', ['ngRoute']);
	MenuApp.config(function($routeProvider) {
		$routeProvider
		
			.when('/dashboard', {
				templateUrl : 'pages/dashboard.html',
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
			// route for the Sending SMS View
			.when('/sendingsms', {
				templateUrl : 'pages/sending_sms.html',
				controller  : 'sendingSMSController'
			})
			
			// route for the scheduled SMS VIEW
			.when('/scheduledsms', {
				templateUrl : 'pages/scheduled_sms.html',
				controller  : 'scheduledController'
			})		
			
			// route for the birthdaywishes SMS VIEW
			.when('/birthdaywishes', {
				templateUrl : 'pages/birthday_wishes.html',
				controller  : 'birthdayWishesController'
			})	
			
			// route for the SMS History VIEW
			.when('/smshistory', {
				templateUrl : 'pages/sms_history.html',
				controller  : 'smshistoryController'
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


MenuApp.controller('TopMenuCounters', function($scope , $http) {
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/SMS/Count.php?view=allScheduled")
    .then(function (response) {
	$scope.allScheduledCount = response.data;
	});
		$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/SMS/Count.php?view=todayScheduled")
    .then(function (response) {
	$scope.todayScheduledCount = response.data;
	});
	
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/SMS/Count.php?view=todaySMS")
    .then(function (response) {
	$scope.todaySmsCount = response.data;
	});
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/SMS/Count.php?view=allSMS")
    .then(function (response) {
	$scope.allSmsCount = response.data;
	});
	
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/Reminder/Count.php?view=todayAppointments")
    .then(function (response) {
	$scope.todayAppointCount = response.data;
	});
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/Reminder/Count.php?view=allAppointments")
    .then(function (response) {
	$scope.allAppointCount = response.data;
	});
	
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/Reminder/Count.php?view=todayBirthdayscount")
    .then(function (response) {
	$scope.todaybirthdayCount = response.data;
	});
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/Reminder/Count.php?view=allBirthdayscount")
    .then(function (response) {
	$scope.allbirthdayCount = response.data;
	});
});
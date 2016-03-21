MenuApp.controller('contactsController', function($scope , $http) {
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/contacts/Search.php")
    .then(function (response) {
	$scope.contactslist = response.data.contacts;
	});
	 
});

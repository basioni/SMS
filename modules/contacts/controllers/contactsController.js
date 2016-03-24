MenuApp.controller('contactsController', function($scope , $http) {
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/contacts/Search.php")
    .then(function (response) {
	$scope.contactslist = response.data.contacts;
	});
	
	$scope.viewContact = function(x) {
		  $scope.v_contact_id = x.contact_id;
		  $scope.v_first_name = x.first_name;
		  $scope.v_last_name = x.last_name;
		  $scope.v_mobile = x.mobile;
		  $scope.v_email = x.email;
		  $scope.v_birthday = x.birthday;
		  $scope.v_last_visit = x.last_visit;
		  $scope.v_address = x.address;
		  $scope.v_group = x.group;
		};
});
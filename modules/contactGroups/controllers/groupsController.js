MenuApp.controller('groupsController', function($scope , $http) {
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/contactGroups/List.php")
    .then(function (response) {
	$scope.groupslist = response.data.groups;
	});
	
	$scope.viewGroup = function(x) {
		  $scope.v_group_id = x.group_id;
		  $scope.v_group_name = x.group_name;
		};
});
MenuApp.controller('SMStemplatesController', function($scope , $http) {
	$http.get("http://www.egyptbooking.org/SMS_Notifications_Manager/modules/SMSTemplate/List.php")
    .then(function (response) {
	$scope.templateslist = response.data.templateslists;
	});
	
	$scope.viewTemplate = function(x) {
		  $scope.v_template_id = x.template_id;
		  $scope.v_template_name = x.template_name;
		  $scope.v_template_message = x.template_message;
		};
});
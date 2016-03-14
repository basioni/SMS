app.controller('API_table_controller', function($scope, $http) {
    $http.get("http://www.egyptbooking.com/modules/SMSAPI/all_records.php")
    .then(function (response) {$scope.names = response.data.records;});
});

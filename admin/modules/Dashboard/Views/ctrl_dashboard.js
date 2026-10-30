//blank line is required
app.controller('ctrl_dashboard', function($scope, $http)
{
	$http.get('login/check_valid_session').success(function(data) {
		if (data != 1) {
			window.location.assign('<?=site_url("admin/login")?>');
		}
	});

	$http.get("dashboard/fetch_cards_data").success(function(data)
	{
		$scope.logs = $scope.log = data['logs'] || 0;
		$scope.blog = data['blog'] || 0;
		$scope.bookings = $scope.booking = data['bookings'] || 0;
		$scope.contact = $scope.contacts = data['contact'] || 0;
		$scope.reviews = data['reviews'] || 0;
		$scope.gallery = data['gallery'] || 0;
		$scope.videogallery = data['videogallery'] || 0;
		$scope.shipments = data['shipments'] || 0;
		$scope.tracking = data['tracking'] || 0;
		$scope.recent_bookings = data['recent_bookings'] || [];
		$scope.recent_contacts = data['recent_contacts'] || [];
	});
});

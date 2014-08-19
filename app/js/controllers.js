var portfolioApp = angular.module('portfolioApp', []);

portfolioApp.controller('VenueCtrlList', function ($scope, $http) {
    $http.get('https://api.foursquare.com/v2/venues/trending?ll=40.7,-74&client_id=WTOCBAXWSLCPNIR4RIEPMGSKAGOF2YFWPE5W2GBLWKO5NRNJ&client_secret=K3S4LHTYSIR1YWWSGRFZ0A5DIST5H1C3XM55IVXBLEVTDR0O&v=20140816').success(function(data) {
        $scope.venues = data.response.venues;
        console.log($scope.venues);
    });
    $scope.orderProp = '-hereNow.count';
});

// portfolioApp.controller('VenueCtrlList', ['$scope', '$routeParams',
//   function($scope, $routeParams) {
//     $scope.venueID = $routeParams.venueID;
//   }]);
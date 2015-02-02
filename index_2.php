<!DOCTYPE html>
<html ng-app="spicyApp1">
<head>
<title>Hello World, AngularJS - ViralPatel.net</title>
<script type="text/javascript" 
	src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
</head>
<body>
<div ng-controller="SpicyController">
 <button ng-click="chiliSpicy()">Chili</button>
 <button ng-click="jalapenoSpicy()">rajmohan</button>
 <p>The food is {{spice}} spicy!</p>
</div>

<div ng-controller="SpicyController123">
 <button ng-click="chiliSpicy123()">Chili</button>
 <button ng-click="jalapenoSpicy123()">rajmohansss</button>
 <p>The food is {{spice123}} spicy!</p>
</div>


<script type="text/javascript">
	var myApp = angular.module('spicyApp1', []);
	
	//var myApp123 = angular.module('spicyApp123', []);
	
    myApp.controller('SpicyController', ['$scope', function($scope) {
    $scope.spice = 'very';

    $scope.chiliSpicy = function() {
        $scope.spice = 'chili';
    };

    $scope.jalapenoSpicy = function() {
        $scope.spice = 'rajmohan';
    };
}]);

   myApp.controller('SpicyController123', ['$scope', function($scope) {
    $scope.spice = 'very';

    $scope.chiliSpicy123 = function() {
        $scope.spice123 = 'chili';
    };

    $scope.jalapenoSpicy123 = function() {
        $scope.spice123 = 'rajmohansss';
    };
}]);
</script>
</body>
</html>
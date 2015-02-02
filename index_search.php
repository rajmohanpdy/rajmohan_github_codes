<!DOCTYPE html>
<html ng-app>
<head>
<title>Search form with AngualrJS</title>
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /> -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="angular.min.js"></script>
	<script src="sear
	ch.js"></script>
</head>

<body>

	<div ng-controller="SearchCtrl">
	<form class="well form-search">
		<label>Search:</label>
		<input type="text" ng-model="keywords" class="input-medium search-query" placeholder="Keywords...">
		<button type="submit" class="btn" ng-click="search()">Search</button>
		<p class="help-block">Try for example: "php" or "angularjs" or "asdfg"</p>		
    </form>
<pre ng-model="result">
{{result}}
</pre>
   </div>
</body>

</html> 
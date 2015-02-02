var firstcontroller = function ($scope) {
  $scope.todos = [
    {text:'learn angular', done:true},
    {text:'build an angular app', done:false}];
 
  $scope.addTodo = function() {
    $scope.todos.push({text:$scope.todoText, done:false});
    $scope.todoText = '';
  };
 
  $scope.remaining = function() {
    var count = 0;
    angular.forEach($scope.todos, function(todo) {
      count += todo.done ? 0 : 1;
    });
    return count;
  };
 
  $scope.archive = function() {
    var oldTodos = $scope.todos;
    $scope.todos = [];
    angular.forEach(oldTodos, function(todo) {
      if (!todo.done) $scope.todos.push(todo);
    });
  };
}

var secondcontroller = function ($scope) {

 /*$scope.remainingTest = function() {
   $scope.todoText123 = '';
    var count = 5;
    return count;
  };*/
  
   $scope.addTodoTest = function() {
    //$scope.todos.push({text:$scope.todoText, done:false});
    $scope.todoText123 = 'rrrr';
  };
  }

var thirdcontroller = function ($scope) {

 $scope.driversList = [
      {
          Driver: {
              givenName: 'Sebastian',
              familyName: 'Vettel'
          },
          points: 322,
          nationality: "German",
          Constructors: [
              {name: "Red Bull"}
          ]
      },
      {
          Driver: {
          givenName: 'Fernando',
              familyName: 'Alonso'
          },
          points: 207,
          nationality: "Spanish",
          Constructors: [
              {name: "Ferrari"}
          ]
      },
	  {
          Driver: {
          givenName: 'raj',
              familyName: 'mohan'
          },
          points: 600,
          nationality: "Indian",
          Constructors: [
              {name: "Honda"}
          ]
      },
	  {
          Driver: {
          givenName: 'Fernando',
              familyName: 'Alonso'
          },
          points: 300,
          nationality: "Pakistan",
          Constructors: [
              {name: "TVS"}
          ]
      }
    ];
  }
  
  
 var fourthcontroller = function ($scope) {

 $scope.countryList = [
      {
          Country: {
              countryId: 1,
              countryName: 'Srilanka'
          },
          points: 322,
          nationality: "German",
          Constructors: [
              {name: "Red Bull"}
          ]
      },
	    {
          Country: {
              countryId: 2,
              countryName: 'pakiatani'
          },
          points: 322,
          nationality: "German",
          Constructors: [
              {name: "Red Bull"}
          ]
      }
	    ];
  }
  
   var fifthcontroller = function ($scope, $http) {

  $http.get('http://rest-service.guides.spring.io/greeting').
        success(function(data) {
            $scope.greeting = data;
        });
  }
<!doctype html>
<html ng-app>
  <head>
  
    <script src="angular.min.js"></script>
	 <script src="todo.js"></script>
	 <link rel="stylesheet" href="todo.css">
  </head>
<body>
    <h2>Todo</h2>
    <div ng-controller="firstcontroller">
      <span stylle="">{{remaining()}} of {{todos.length}} remaining</span>
      [ <a href="" ng-click="archive()">archive</a> ]
      <ul class="unstyled">
        <li ng-repeat="todo in todos">
          <input type="checkbox" ng-model="todo.done">
          <span class="done-{{todo.done}}">{{todo.text}}</span>
        </li>
      </ul>
      <form ng-submit="addTodo()">
        <input type="text" ng-model="todoText"  size="30"
               placeholder="add new todo here">
        <input class="btn-primary" type="submit" value="add">
      </form>
    </div>
	<div ng-controller="secondcontroller">
	<input type="text" ng-model="todoText123"  size="30">
	<input class="btn-primary" type="button" value="insert" ng-click="addTodoTest()">
	{{remainingTest()}}
	</div>
	
	<div ng-controller="thirdcontroller">
	<table>
    <thead>
      <tr><th colspan="4">Drivers Championship Standings</th></tr>
    </thead>
    <tbody>
      <tr ng-repeat="driver in driversList">
        <td>{{$index + 1}}</td>
        <td>
          {{driver.nationality}}
          {{driver.Driver.givenName}}&nbsp;{{driver.Driver.familyName}}
        </td>
        <td>{{driver.Constructors[0].name}}</td>
        <td>{{driver.points}}</td>
      </tr>
    </tbody>
  </table>
</div>	

	<div ng-controller="fourthcontroller">
<select>
  <option ng-repeat="country in countryList" value="{{country.Country.countryId}}">{{country.Country.countryName}}</option>
 </select>
    </div>

    <div ng-controller="fifthcontroller">
      <p>The ID is {{greeting.id}}</p>
      <p>The content is {{greeting.content}}</p>
    </div>	
	
  </body>
</html>
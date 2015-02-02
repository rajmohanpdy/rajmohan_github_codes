<!DOCTYPE html>
<html ng-app="invoice1">
<head>
<title>Hello World, AngularJS - ViralPatel.net</title>
<script type="text/javascript" src="angular.min.js"></script>
</head>
<body>
<div  ng-controller="InvoiceController as invoice">
  <b>Invoice:</b>
  <div>
    Quantity: <input type="number" ng-model="invoice.qty" required >
  </div>
  <div>
    Costs: <input type="number" ng-model="invoice.cost" required >
    <select ng-model="invoice.inCurr">
      <option ng-repeat="c in invoice.currencies">{{c}}</option>        
    </select>
  </div>
  <div>
    <b>Total:</b>
    <span ng-repeat="c in invoice.currencies">
      {{invoice.total(c) | currency:c}}
    </span>
    <button class="btn" ng-click="invoice.pay()">Pay</button>
  </div>
</div>

<div ng-controller="InvoiceController2 as invoice2">
  <div>
    Quantity: <input type="number" ng-model="invoice2.qty" required >
  </div>
  </div>


<script type="text/javascript">
	var myApp = angular.module('invoice1', []);
	myApp.controller('InvoiceController', ['$scope', function($scope) {
    this.qty = 1;
    this.cost = 2;
    this.inCurr = 'EUR';
    this.currencies = ['USD', 'EUR', 'CNY'];
    this.usdToForeignRates = {
    USD: 1,
    EUR: 0.74,
    CNY: 6.09
    };

    this.total = function total(outCurr) {   
    
    return this.convertCurrency(this.qty * this.cost, this.inCurr, outCurr);
    };

    this.convertCurrency = function convertCurrency(amount, inCurr, outCurr) {
      return amount * this.usdToForeignRates[outCurr] / this.usdToForeignRates[inCurr];
    };
    this.pay = function pay() {
      window.alert("Thanks!");
    };
 }]);

    //var myApp = angular.module('invoicetest', []);
    myApp.controller('InvoiceController2', ['$scope', function($scope) {
    this.qty = 1234858
    
}]);

</script>
</body>
</html>
var app = angular.module('app', ['ngSanitize']);
app.config(['$compileProvider', function ($compileProvider) {
	$compileProvider.debugInfoEnabled(false);
}]);


var app =  angular.module('main-App',['ngRoute','angularUtils.directives.dirPagination']);

app.config(['$routeProvider',

   function($routeProvider) {

       $routeProvider.

           when('/', {

               templateUrl: 'templates/home.html',

               controller: 'AdminController'

           }).

           when('/category', {

               templateUrl: 'templates/category.html',

               controller: 'CategoryController'

           });

}]);
'use strict';

/**
 * @ngdoc overview
 * @name apiClientApp
 * @description
 * # apiClientApp
 *
 * Main module of the application.
 */
angular
  .module('apiClientApp', [
    'ngAnimate',
    'ngAria',
    'ngCookies',
    'ngMessages',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch',
    'satellizer',
    'authService',
    'toastr'
  ])
  .config(function ($routeProvider, $authProvider) {
    $authProvider.loginUrl = 'http://localhost:8000/api/auth/login'
    $routeProvider
      .when('/', {
        templateUrl: 'client/app/views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/login', {
        templateUrl: 'client/app/views/login.html',
        controller: 'LoginCtrl',
        controllerAs: 'login'
      })
      .otherwise({
        redirectTo: '/'
      });
  })
  .run(function($rootScope, $location, authUser, toastr){
    var rutasPrivadas = ['/'];
    $rootScope.$on('$routeChangeStart', function(){
      if(($.inArray($location.path(), rutasPrivadas) !== -1) && !authUser.isLoggedIn()){
        toastr.error('Debe iniciar sesión para continuar.', 'Permiso denegado');
        $location.path('/login');
      }
    })
  });

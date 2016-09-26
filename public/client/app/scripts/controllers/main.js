'use strict';

/**
 * @ngdoc function
 * @name apiClientApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the apiClientApp
 */
angular.module('apiClientApp')
  .controller('MainCtrl', function (authUser, $location, $scope, sessionControl, $http, $auth) {
    var vm = this;
    vm.user = {
      email: sessionControl.get('email'),
      name: sessionControl.get('username')
    }
    vm.logout = function(){
      authUser.logout();
      //$location.path('/login');
    };
    /*
      Ajax API
     */
    $http.get("http://localhost:8000/api/video/?token="+$auth.getToken())
      .then(
        function(response){
          console.log(response.data);
          console.log("http://localhost:8000/api/video/?token="+$auth.getToken());
          $scope.videos = response.data.data;
        },
        function(error){
          console.log(error);
        });

  });

'use strict'

angular.module('apiClientApp')
  .controller('LoginCtrl', function(authUser){
    var vm = this;
    vm.login = function () {
      authUser.loginApi(vm.loginForm);
    }
  });

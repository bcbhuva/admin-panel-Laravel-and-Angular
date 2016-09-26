'use strict'

angular.module('authService', [])
  .factory('sessionControl', function(){
    return {
      get: function (key){
        return sessionStorage.getItem(key);
      },
      set: function(key, val){
        return sessionStorage.setItem(key, val);
      },
      unset: function(key){
        return sessionStorage.removeItem(key);
      }
    }
  })
  .factory('authUser', function($auth, $location, sessionControl, toastr){
    var cacheSession = function(email, username){
      sessionControl.set('userIsLogin', true);
      sessionControl.set('email', email);
      sessionControl.set('username', username);
    };
    var unCacheSession = function(){
      sessionControl.unset('userIsLogin');
      sessionControl.unset('email');
      sessionControl.unset('username');
    };
    var login = function(loginForm){
      $auth.login(loginForm).then(
        function (response) {
          cacheSession(response.data.user.email, response.data.user.name);
          $location.path('/');
          toastr.success('Sesión iniciada con éxito', 'Bienvenido');
          console.log(response);
        },
        function(error) {
          unCacheSession();
          toastr.error('Las credenciales son inválidas', 'Error');
          console.log(error);
        }
      );
    };
    return {
      loginApi : function(loginForm) {
        login(loginForm);
      },
      logout : function(){
        $auth.logout();
        unCacheSession();
        toastr.success('Sesión cerrada con éxito', '¡Hasta la vista!');
      },
      isLoggedIn : function(){
        return sessionControl.get('userIsLogin') !== null;
      }
    }
  });

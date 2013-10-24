'use strict';

/* Controllers */

KMCModule.controller('LoginCtrl',
	['$scope', 'apiService', '$location','localStorageService',
		function ( $scope, apiService , $location , localStorageService) {
			$scope.login = function () {
				apiService.doRequest( {
					'service' : 'user',
					'action' : 'loginbyloginid',
					'loginId' : $scope.email,
					'password': $scope.pwd
				}).then( function( data ) {
						// To add to local storage
						if ( localStorageService.isSupported() ) {
							localStorageService.add('ks',data);
						}
						apiService.setKs( data );
						$location.path( "/list" );
					}, function( errorMsg ) {
						alert ( errorMsg );
					});
			};
		}]);
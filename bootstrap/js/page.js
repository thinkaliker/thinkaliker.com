var app = angular.module('homepage', ['ngRoute', 'viewhead']);

app.controller('mainController', function($scope) {

});

app.config(function($routeProvider, $locationProvider) {
    $routeProvider.when(
        '/',
        {
            templateUrl: '/home.php'
        }
    );
    $routeProvider.when(
        '/projects',
        {
            templateUrl: '/projects.php'
        }
    );
    $routeProvider.when(
        '/about',
        {
            templateUrl: '/about.php'
        }
    );
    $routeProvider.when(
        '/links',
        {
            templateUrl: '/links.php'
        }
    );
    $routeProvider.otherwise(
        {
            redirectTo: '/home.php'
        }
    );
    $locationProvider.html5Mode(true);
});

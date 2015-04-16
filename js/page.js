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
    $routeProvider.when(
        '/400',
        {
            templateUrl: '/400.php'
        }
    );
    $routeProvider.when(
        '/401',
        {
            templateUrl: '/401.php'
        }
    );
    $routeProvider.when(
        '/403',
        {
            templateUrl: '/403.php'
        }
    );
    $routeProvider.when(
        '/404',
        {
            templateUrl: '/404.php'
        }
    );
    $routeProvider.when(
        '/412',
        {
            templateUrl: '/412.php'
        }
    );
    $routeProvider.when(
        '/500',
        {
            templateUrl: '/500.php'
        }
    );
    $routeProvider.when(
        '/501',
        {
            templateUrl: '/501.php'
        }
    );
    $routeProvider.when(
        '/502',
        {
            templateUrl: '/502.php'
        }
    );
    $routeProvider.otherwise(
        {
            redirectTo: '/404'
        }
    );
    $locationProvider.html5Mode(true);
});

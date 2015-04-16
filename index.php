<!DOCTYPE html>
<html lang="en" ng-app="homepage">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="thinkaliker (Adam Chao)" />
    <meta name="wot-verification" content="16fa5970de0f373efdee" />
    <meta property="twitter:account_id" content="89368548" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="//cdn.thinkaliker.com/cautionstripes_favicon.ico" rel="shortcut icon" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.thinkaliker.com/css/cover.css" rel="stylesheet">
    <link href="//cdn.thinkaliker.com/css/stylesheet.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto" rel='stylesheet' type='text/css'>

    <script data-cfasync="true" src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
    <script data-cfasync="true" src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-route.min.js"></script>

    <title ng-bind="viewTitle ? 'thinkaliker | ' + viewTitle : 'thinkaliker | Home'">thinkaliker</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <base href="/">
</head>

<body class="homepage" ng-controller="mainController">
    <div class="site-wrapper" id="main">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <?php include( "header.php");?>
                    </div>
                </div>

                <div id="main" ng-view></div>

                <div class="mastfoot">
                    <div class="inner">
                        <?php include( "footer.php");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script data-cfasync="true" src="/js/page.js"></script>
<script data-cfasync="true" src="//cdn.thinkaliker.com/js/angularjs-viewhead.js"></script>
<script data-cfasync="true" src="//cdn.thinkaliker.com/js/extras.js"></script>

</html>

<!DOCTYPE html>
<html lang="en" ng-app="homepage">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="thinkaliker (Adam Chao)" />
    <meta name="wot-verification" content="16fa5970de0f373efdee" />
    <meta property="twitter:account_id" content="89368548" />
    <link href="/cautionstripes_favicon.ico" rel="shortcut icon" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/cover.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto" rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular-route.min.js"></script>
    <script src="/js/angularjs-viewhead.js"></script>
    <script src="/js/page.js"></script>

    <script type="text/javascript">
          WebFontConfig = {
            google: { families: [ 'Roboto::latin' ] }
          };
          (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
              '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
          })();
    </script>

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
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-37558861-4', 'auto');
    ga('send', 'pageview');
</script>

</html>

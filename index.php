<!DOCTYPE html>
<html lang="en" ng-app="homepage">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="thinkaliker (Adam Chao)" />
  <meta name="wot-verification" content="16fa5970de0f373efdee" />
  <meta property="twitter:account_id" content="89368548" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="//cdn.thinkaliker.com/cautionstripes_favicon.ico" rel="shortcut icon" />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.blue_grey-blue.min.css" />
  <link rel="stylesheet" href="css/mdl_custom.css" />
  <link href="//fonts.googleapis.com/css?family=Roboto" rel='stylesheet' type='text/css'>

  <script data-cfasync="true" src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
  <script data-cfasync="true" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular-route.min.js"></script>
  <script data-cfasync="true" src="/js/page.js"></script>
  <script data-cfasync="true" src="//cdn.thinkaliker.com/js/angularjs-viewhead.js"></script>
  <script data-cfasync="true" src="//cdn.thinkaliker.com/js/extras.js"></script>

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

    <div class="mdl-layout__container mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">
            <a class="mdl-navigation__link" href="/">
              <img src="//cdn.thinkaliker.com/cautionstripes_small.png" width="25" height="25" alt="Caution Stripes" /> thinkaliker</a>
          </span>

          <div class="mdl-layout-spacer"></div>

          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a href="/" class="mdl-navigation__link" ng-class="{active:isActive('/')}">Home</a>
            <a href="/blog" class="mdl-navigation__link" target="_blank">Blog</a>
            <a href="projects" class="mdl-navigation__link" ng-class="{active:isActive('/projects')}">Projects</a>
            <a href="about" class="mdl-navigation__link" ng-class="{active:isActive('/about')}">About</a>
            <a href="links" class="mdl-navigation__link" ng-class="{active:isActive('/links')}">Links</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title"><a class="mdl-navigation__link" href="/"><img src="//cdn.thinkaliker.com/cautionstripes_small.png" width="30" height="30" alt="Caution Stripes" /> thinkaliker</a></span>
        <nav class="mdl-navigation">
          <a href="/" class="mdl-navigation__link" ng-class="{active:isActive('/')}">Home</a>
          <a href="/blog" class="mdl-navigation__link" target="_blank">Blog</a>
          <a href="projects" class="mdl-navigation__link" ng-class="{active:isActive('/projects')}">Projects</a>
          <a href="about" class="mdl-navigation__link" ng-class="{active:isActive('/about')}">About</a>
          <a href="links" class="mdl-navigation__link" ng-class="{active:isActive('/links')}">Links</a>
        </nav>
      </div>

      <main class="">
        <br />
        <div class="mdl-grid">
          <div class="mdl-layout-spacer"></div>
          <div class="section--center mdl-shadow--4dp mdl-cell--6-col">
            <div id="main" class="content" ng-view>
              <div class="mdl-grid">
                <div class="mdl-layout-spacer"></div>
                <div id="p2" class="section--center mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                <div class="mdl-layout-spacer"></div>
              </div>

            </div>
          </div>
          <div class="mdl-layout-spacer"></div>
        </div>

        <div id="footer">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">&copy; thinkaliker (Adam Chao) 2015</button>
        </div>

      </main>
    </div>
  </div>
</body>

</html>

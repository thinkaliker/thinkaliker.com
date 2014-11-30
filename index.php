<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="thinkaliker (Adam Chao)" />
	<meta name="wot-verification" content="16fa5970de0f373efdee"/>
    <meta property="twitter:account_id" content="89368548" />
	<link href="cautionstripes_favicon.ico" rel="shortcut icon" />
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="cover.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
      a { cursor: pointer; cursor: hand; }
    </style>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<?php
		$page = 'home';
		
		if(isset($_GET['p']))
			$page = $_GET['p'];
    ?>
    <script src="https://apis.google.com/js/plusone.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <style>
		.ig-b- { display: inline-block; }
		.ig-b- img { visibility: hidden; }
		.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
		.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
		@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
		.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }
	</style>
    <script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
    <script type="text/javascript">
		$(document).ready(function(){
		
		$("#home").hide();
		$("#about").hide();
		$("#links").hide();
		$("#projects").hide();
		
		$(<?php echo '"#'.$page.'"'; ?>).show().addClass("active");
		$(<?php echo '"#'.$page.'-button"'; ?>).addClass("active");
		
		$("#home-button").click(function(){
			$("#home-button").addClass("active");
			$("#home").show();
			$("#about, #links, #projects").hide();
			$("#about-button, #links-button, #projects-button").removeClass("active");
			window.history.pushState("object or string", "Title", "?p=home");
		});
		$("#about-button").click(function(){
			$("#about-button").addClass("active");
			$("#about").show();
			$("#home, #links, #projects").removeClass("active").hide();
			$("#home-button, #links-button, #projects-button").removeClass("active");
			window.history.pushState("object or string", "Title", "?p=about");
		});
		$("#links-button").click(function(){
			$("#links-button").addClass("active");
			$("#links").show();
			$("#home, #about, #projects").removeClass("active").hide();
			$("#home-button, #about-button, #projects-button").removeClass("active");
			window.history.pushState("object or string", "Title", "?p=links");
		});
		$("#projects-button").click(function(){
			$("#projects-button").addClass("active");
			$("#projects").show();
			$("#home, #about, #links").removeClass("active").hide();
			$("#home-button, #about-button, #links-button").removeClass("active");
			window.history.pushState("object or string", "Title", "?p=projects");
		});
		});

    </script>
    
    <title>thinkaliker | <?php if($page == "home") echo 'Home'; if($page == "projects") echo 'Projects'; if($page == "about") echo 'About';  if($page == "links") echo 'Links';?></title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="homepage">

    <div class="site-wrapper" id="main">

      <div class="site-wrapper-inner">

        <div class="cover-container">
       
          <div class="masthead clearfix">
            <div class="inner">
                <h3 class="masthead-brand"><a class="headerlink" href="/index.php"><img src="cautionstripes_small.png" width="30" height="30" alt="Caution Stripes" /> thinkaliker</a></h3>
              <ul class="nav masthead-nav">
                <li id="home-button"><a>Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li id="projects-button"><a>Projects</a></li>
                <li id="about-button"><a>About</a></li>
                <li id="links-button"><a>Links</a></li>
              </ul>
            </div>
          </div>
          
          <div id="main">
          
			<?php include 'home.php'; ?>
            <?php include 'projects.php'; ?>
            <?php include 'about.php'; ?>
            <?php include 'links.php'; ?>
            
            <script type="text/javascript">
				$("#home").hide();
				$("#projects").hide();
				$("#about").hide();
				$("#links").hide();
				
            </script>
		  </div>
          <div class="mastfoot">
            <div class="inner">
              <?php include("footer.php");?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37558861-4', 'auto');
  ga('send', 'pageview');

</script>
</html>

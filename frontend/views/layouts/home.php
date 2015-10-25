<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="<?= Yii::$app->language ?>>
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>JANGO - shared on GFXFree.Net -  - Home Version 4</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
<!--<link href="plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>-->
<link href="plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
<!-- start paging -->
<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!-- end paging -->
<link href="plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN: BASE PLUGINS  -->
<link href="plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<!-- start slider -->
<link href="plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
<!-- end slider -->
<link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
<link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
<!-- start slider -->
<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- end slider -->
<!-- END: BASE PLUGINS -->
<!-- BEGIN THEME STYLES -->
<link href="css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
<link href="css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="c-layout-header-fixed c-layout-header-6-topbar">
<?php $this->beginBody() ?>
<!-- BEGIN: LAYOUT/HEADERS/HEADER-2 -->
<!-- BEGIN: HEADER 2 -->
<header class="c-layout-header c-layout-header-6 ">
<div class="c-topbar">
	<div class="container">
		<nav class="c-top-menu">
		<ul class="c-links c-theme-ul">
			<li>
				<a href="#" class="c-font-uppercase c-font-bold">Help</a>
			</li>
			<li>
				<a href="#" class="c-font-uppercase c-font-bold">Contact</a>
			</li>
			<li class="c-divider">
			</li>
			<li>
				<a href="#" class="c-font-uppercase c-font-bold c-font-dark">Support</a>
			</li>
			<li>
				<a href="javascript:;" data-toggle="modal" data-target="#login-form" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Sign In</a>
			</li>
		</ul>
		<ul class="c-ext hide c-theme-ul">
			<li class="c-lang dropdown c-last">
				<a href="#">en</a>
				<ul class="dropdown-menu pull-right" role="menu">
					<li class="active">
						<a href="#">English</a>
					</li>
					<li>
						<a href="#">German</a>
					</li>
					<li>
						<a href="#">Espaniol</a>
					</li>
					<li>
						<a href="#">Portugise</a>
					</li>
				</ul>
			</li>
			<li class="c-search hide">
				<!-- BEGIN: QUICK SEARCH -->
				<form action="#">
					<input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
					<i class="fa fa-search"></i>
				</form>
				<!-- END: QUICK SEARCH -->
			</li>
		</ul>
		</nav>
		<div class="c-brand">
			<a href="index.html" class="c-logo">
			<img src="img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo">
			<img src="img/layout/logos/logo-1.png" alt="JANGO" class="c-desktop-logo-inverse">
			<img src="img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo">
			</a>
			<ul class="c-icons c-theme-ul">
				<li>
					<a href="#"><i class="icon-social-twitter"></i></a>
				</li>
				<li>
					<a href="#"><i class="icon-social-facebook"></i></a>
				</li>
				<li>
					<a href="#"><i class="icon-social-dribbble"></i></a>
				</li>
			</ul>
			<button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
			<span class="c-line"></span>
			<span class="c-line"></span>
			<span class="c-line"></span>
			</button>
			<button class="c-search-toggler" type="button">
			<i class="fa fa-search"></i>
			</button>
		</div>
	</div>
</div>
<div class="c-navbar">
	<div class="container">
		<!-- BEGIN: BRAND -->
		<div class="c-navbar-wrapper clearfix">
			<!-- END: BRAND -->
			<!-- BEGIN: QUICK SEARCH -->
			<form class="c-quick-search" action="#">
				<input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
				<span class="c-theme-link">&times;</span>
			</form>
			<!-- END: QUICK SEARCH -->
			<!-- BEGIN: HOR NAV -->
			<!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
			<!-- BEGIN: MEGA MENU -->
			<nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
			<!-- BEGIN: MEGA MENU -->
			<ul class="nav navbar-nav c-theme-nav">
				<li class="c-active c-menu-type-classic">
					<a href="index.php?r=home" class="c-link">Home</a>
				</li>
				<li class="c-menu-type-classic">
					<a href="index.php?r=about" class="c-link">About</a>
				</li>
				<li>
					<a href="index.php?r=article" class="c-link dropdown-toggle">PHP Thuần</a>
					<ul class="dropdown-menu c-menu-type-classic c-pull-left">
						<li>
							<a href="index.php?r=article">PHP CƠ BẢN</a>
						</li>
						<li>
							<a href="index.php?r=article">PHP NÂNG CAO</a>
						</li>
						
					</ul>
				</li>
				<li class="c-menu-type-classic">
					<a href="index.php?r=article" class="c-link dropdown-toggle">PHP FRAMEWORK</a>
					<ul class="dropdown-menu c-menu-type-classic c-pull-left">
						<li>
							<a href="index.php?r=article">LARAVEL</a>
						</li>
						<li>
							<a href="index.php?r=article">YII</a>
						</li>
						<li>
							<a href="index.php?r=article">CODEIGNITER</a>
						</li>
						
					</ul>
				</li>
                                <li class="c-menu-type-classic">
					<a href="index.php?r=article" class="c-link dropdown-toggle">WEB DESIGN</a>
					<ul class="dropdown-menu c-menu-type-classic c-pull-left">
						<li>
							<a href="index.php?r=article">LARAVEL</a>
						</li>
						<li>
							<a href="index.php?r=article">YII</a>
						</li>
						<li>
							<a href="index.php?r=article">CODEIGNITER</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="index.php?r=contact" class="c-link">CONTACT</a>
				</li>
				<li class="c-search-toggler-wrapper">
					<a href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
				</li>
				<li class="c-quick-sidebar-toggler-wrapper">
					<a href="#" class="c-quick-sidebar-toggler">
					<span class="c-line"></span>
					<span class="c-line"></span>
					<span class="c-line"></span>
					</a>
				</li>
			</ul>
			<!-- END MEGA MENU -->
			</nav>
			<!-- END: MEGA MENU -->
			<!-- END: LAYOUT/HEADERS/MEGA-MENU -->
			<!-- END: HOR NAV -->
		</div>
	</div>
</div>
</header>
<!-- END: HEADER 2 -->
<!-- END: LAYOUT/HEADERS/HEADER-2 -->
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content c-square">
			<div class="modal-header c-no-border">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
				<p>
					To recover your password please fill in your email address
				</p>
				<form>
					<div class="form-group">
						<label for="forget-email" class="hide">Email</label>
						<input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email">
					</div>
					<div class="form-group">
						<button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
						<a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
					</div>
				</form>
			</div>
			<div class="modal-footer c-no-border">
				<span class="c-text-account">Don't Have An Account Yet ?</span>
				<a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
			</div>
		</div>
	</div>
</div>
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content c-square">
			<div class="modal-header c-no-border">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3 class="c-font-24 c-font-sbold">Create An Account</h3>
				<p>
					Please fill in below form to create an account with us
				</p>
				<form>
					<div class="form-group">
						<label for="signup-email" class="hide">Email</label>
						<input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="signup-username" class="hide">Username</label>
						<input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="signup-fullname" class="hide">Fullname</label>
						<input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname">
					</div>
					<div class="form-group">
						<label for="signup-country" class="hide">Country</label>
						<select class="form-control input-lg c-square" id="signup-country">
							<option value="1">Country</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
						<a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END: CONTENT/USER/SIGNUP-FORM -->
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content c-square">
			<div class="modal-header c-no-border">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
				<p>
					Let's make today a great day!
				</p>
				<form>
					<div class="form-group">
						<label for="login-email" class="hide">Email</label>
						<input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="login-password" class="hide">Password</label>
						<input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="c-checkbox">
							<input type="checkbox" id="login-rememberme" class="c-check">
							<label for="login-rememberme" class="c-font-thin c-font-17">
							<span></span>
							<span class="check"></span>
							<span class="box"></span>
							Remember Me </label>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
						<a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
					</div>
					<div class="clearfix">
						<div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
							<span style="width: 110px">or signup with</span>
						</div>
						<ul class="c-content-list-adjusted">
							<li>
								<a class="btn btn-block c-btn-square btn-social btn-twitter">
								<i class="fa fa-twitter"></i>
								Twitter </a>
							</li>
							<li>
								<a class="btn btn-block c-btn-square btn-social btn-facebook">
								<i class="fa fa-facebook"></i>
								Facebook </a>
							</li>
							<li>
								<a class="btn btn-block c-btn-square btn-social btn-google">
								<i class="fa fa-google"></i>
								Google </a>
							</li>
						</ul>
					</div>
				</form>
			</div>
			<div class="modal-footer c-no-border">
				<span class="c-text-account">Don't Have An Account Yet ?</span>
				<a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
			</div>
		</div>
	</div>
</div>
<!-- END: CONTENT/USER/LOGIN-FORM -->
<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<nav class="c-layout-quick-sidebar">
<div class="c-header">
	<button type="button" class="c-link c-close">
	<i class="icon-login"></i>
	</button>
</div>
<div class="c-content">
	<div class="c-section">
		<h3>Theme Colors</h3>
		<div class="c-settings">
			<span class="c-color c-default c-active" data-color="default"></span>
			<span class="c-color c-green1" data-color="green1"></span>
			<span class="c-color c-green2" data-color="green2"></span>
			<span class="c-color c-green3" data-color="green3"></span>
			<span class="c-color c-yellow1" data-color="yellow1"></span>
			<span class="c-color c-yellow2" data-color="yellow2"></span>
			<span class="c-color c-yellow3" data-color="yellow3"></span>
			<span class="c-color c-red1" data-color="red1"></span>
			<span class="c-color c-red2" data-color="red2"></span>
			<span class="c-color c-red3" data-color="red3"></span>
			<span class="c-color c-purple1" data-color="purple1"></span>
			<span class="c-color c-purple2" data-color="purple2"></span>
			<span class="c-color c-purple3" data-color="purple3"></span>
			<span class="c-color c-blue1" data-color="blue1"></span>
			<span class="c-color c-blue2" data-color="blue2"></span>
			<span class="c-color c-blue3" data-color="blue3"></span>
			<span class="c-color c-brown1" data-color="brown1"></span>
			<span class="c-color c-brown2" data-color="brown2"></span>
			<span class="c-color c-brown3" data-color="brown3"></span>
			<span class="c-color c-dark1" data-color="dark1"></span>
			<span class="c-color c-dark2" data-color="dark2"></span>
			<span class="c-color c-dark3" data-color="dark3"></span>
		</div>
	</div>
	<div class="c-section">
		<h3>Header Type</h3>
		<div class="c-settings">
			<input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="boxed" value="boxed"/>
			<input type="button" class="c-setting_header-type btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="fluid" value="fluid"/>
		</div>
	</div>
	<div class="c-section">
		<h3>Header Mode</h3>
		<div class="c-settings">
			<input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="fixed" value="fixed"/>
			<input type="button" class="c-setting_header-mode btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="static" value="static"/>
		</div>
	</div>
	<div class="c-section">
		<h3>Mega Menu Style</h3>
		<div class="c-settings">
			<input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="dark" value="dark"/>
			<input type="button" class="c-setting_megamenu-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
		</div>
	</div>
	<div class="c-section">
		<h3>Font Style</h3>
		<div class="c-settings">
			<input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase active" data-value="default" value="default"/>
			<input type="button" class="c-setting_font-style btn btn-sm c-btn-square c-btn-border-1x c-btn-white c-btn-sbold c-btn-uppercase" data-value="light" value="light"/>
		</div>
	</div>
</div>
</nav>
<!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<!-- BEGIN: 
-->
<div class="c-layout-page">
	<!-- BEGIN: PAGE CONTENT -->
        <?= $content ?>
	<!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-5 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-1">
<div class="c-postfooter">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<p class="c-copyright c-font-oswald c-font-14">
					 Copyright &copy; JANGO Inc.
				</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<ul class="c-socials">
					<li>
						<a href="#"><i class="icon-social-twitter"></i></a>
					</li>
					<li>
						<a href="#"><i class="icon-social-facebook"></i></a>
					</li>
					<li>
						<a href="#"><i class="icon-social-youtube"></i></a>
					</li>
					<li>
						<a href="#"><i class="icon-social-dribbble"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</footer>a
<!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="../global/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="plugins/jquery.min.js" type="text/javascript"></script>
<script src="plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<!-- start slider -->
<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<!-- end slider -->
<script src="plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<!-- start slider -->
<script src="plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<!-- end slider -->
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="js/components.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {    
		App.init(); // init core    

		// init main slider
		var slider = $('.c-layout-revo-slider .tp-banner');
	    var cont = $('.c-layout-revo-slider .tp-banner-container');
	    var api = slider.show().revolution({
	        delay: 15000,    
	        startwidth:1170,
	        startheight: 900,
	        navigationType: "hide",
	        navigationArrows: "solo",
	        touchenabled: "on",
	        onHoverStop: "on",
	        keyboardNavigation: "off",
	        navigationType:"bullet",
	        navigationArrows:"",
	        navigationStyle:"round c-tparrows-hide c-theme",
	        navigationHAlign: "right",
	        navigationVAlign: "bottom", 
	        navigationHOffset:60,
	        navigationVOffset:60,
	        spinner: "spinner2",
	        fullScreen: 'on',   
	        fullScreenAlignForce: 'on', 
	        fullScreenOffsetContainer: '.c-layout-header',
	        shadow: 0,
	        fullWidth: "off",
	        forceFullWidth: "off",
	        hideTimerBar:"on",
	        hideThumbsOnMobile: "on",
	        hideNavDelayOnMobile: 1500,
	        hideBulletsOnMobile: "on",
	        hideArrowsOnMobile: "on",
	        hideThumbsUnderResolution: 0
	    });
	});
	</script>
<!-- END: THEME SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>
<?php $this->endPage() ?>

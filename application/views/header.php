<!doctype html>
<!--[if gt IE 8]>
	<!-->
	<html class="no-js">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<title>
			I Inbox Marketing Tool
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/weather-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.10.1.min.js">
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js">
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/toastr.js?v=1">
		</script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-modalmanager.js">
		</script>        
		<script type="text/javascript">
			var baseUrl = '<?php echo base_url(); ?>';
		</script>
	</head>
	<body data-ng-app="app" id="app" data-custom-background data-off-canvas-nav>
		<div data-ng-controller="AppCtrl">
			<div data-ng-hide="isSpecificPage()" data-ng-cloak>
				<section id="header" class="top-header">
					<header class="clearfix">
						<div class="logo">
							<a href="#">
                            I INBOX
							</a>
						</div>
						<div class="menu-button" toggle-off-canvas>
							<span class="icon-bar">
							</span>
							<span class="icon-bar">
							</span>
							<span class="icon-bar">
							</span>
						</div>
						<div class="top-nav">
							<ul class="nav-right pull-right list-unstyled">
								<li class="dropdown langs text-normal" data-ng-controller="LangCtrl">
									<a href="javascript:" class="dropdown-toggle"> <!--data-toggle="dropdown"-->
									Trung  Ðoàn        </a>
									<ul class="dropdown-menu with-arrow pull-right list-langs" role="menu">
										<li data-ng-show="lang !== 'English' ">
											<a href="javascript:;" data-ng-click="setLang('English')">
											<div class="flag flags-american"></div>
											English</a>
										</li>
									</ul>
								</li>
								<li class="dropdown text-normal">
									<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-bars"></i>
									</a>
									<ul class="dropdown-menu with-arrow pull-right">
										<li>
											<a href="/settings">
											<i class="fa fa-user"></i>
											<span data-i18n="Change Password">Cài đặt</span>
											</a>
										</li>
										<li>
											<a href="/user/signout">
											<i class="fa fa-sign-out"></i>
											<span data-i18n="Log Out">Thoát</span>
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</header>
				</section>
				<aside id="nav-container">
					<div id="nav-wrapper" class="panel-group">
						<ul id="nav">
							<li id="nav_my_page" class="panel active">
								<a data-parent="#nav" href="#">
								<i class="fa fa-table" title="Collapse"><span class="icon-bg bg-violet"></span></i><span
								data-i18n="Hộp thư">Hộp thư</span> </a>
								<ul>
									<li id="nav_page_106957926013851">
										<a href="#">
										<i class="fa fa-caret-right"></i>
										<span>Bình luận</span></a>
									</li>
									<li id="nav_page_138841156165916">
										<a href="#">
										<i class="fa fa-caret-right"></i>
										<span>Tin nhắn</span></a>
									</li>
								</ul>
							</li>
							<li id="nav_add_competitor" class="panel">
								<a href="#" data-toggle="modal">
								<i class="fa fa-archive" title="Lưu trữ"><span class="icon-bg bg-violet"></span></i><span
								data-i18n="">Lưu trữ</span> </a>
							</li>
							<li id="nav_sponsor" class="">
								<a data-parent="#nav" href="#"><i class="fa fa-user" title="Khách hàng"><span
								class="icon-bg bg-success"></span></i>
								<span>Khách hàng</span>
								</a>
							</li>
							<li id="nav_make_money" class="">
								<a data-parent="#nav" href="#"><i class="fa fa-usd" title="Thanh toán"><span
								class="icon-bg bg-violet"></span></i>
								<span>Thanh toán</span>
								</a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
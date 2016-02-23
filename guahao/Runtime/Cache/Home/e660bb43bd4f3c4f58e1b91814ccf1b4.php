<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title><?php echo session('webtitle') ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="/Public/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/Public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/Public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/Public/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/Public/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME STYLES -->
<link href="/Public/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<!--<link href="/Public/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>-->
<link href="/Public/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="/Public/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/Public/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<script language="javascript" type="text/javascript" src="/Public/My97DatePicker/WdatePicker.js"></script>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
		<!--	<a href="index.html">
			<img src="/Public/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>-->
       <?php echo session('webtitle') ?>
		</div>

		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">

				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="/Public/assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					<?php echo session('nick') ?></span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> 我的资料 </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i>我的日历</a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> 我的收件箱<span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> 我的任务 <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> 锁定屏幕 </a>
						</li>
						<li>
							<a href="/Home/Index/out">
							<i class="icon-key"></i> 登出 </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="/Home/Index/out" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>


				<li class="start active open">
					<a href="/Home/main/main/">
					<i class="icon-home"></i>
					<span class="title">首页</span></a>

				</li>

                                  				<li>
					<a href="javascript:;">
					<i class="icon-magnet"></i>
					<span class="title">报备管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="/Home/Yuyue/add/">
							报备登记</a>
						</li>
						<li>
							<a href="/Home/Yuyue/lists/">
							<span class="badge badge-roundless badge-danger">new</span>报备列表</a>
						</li>
                                                <?php if($_SESSION['group'] == 1): ?><li>
							<a href="/Home/Yuyue/into/">
							<span class="badge badge-roundless badge-danger">new</span>导入</a>
						</li>
						<li>
							<a href="/Home/Yuyue/import/">
							<span class="badge badge-roundless badge-danger">new</span>导出</a>
						</li><?php endif; ?>
					</ul>
                                  </li>
                                 <?php if($_SESSION['group'] == 1): ?><li>
					<a href="javascript:;">
					<i class="glyphicon glyphicon-list"></i>
					<span class="title">科室管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="/Home/keshi/add/">
							<span class="badge badge-roundless badge-danger">new</span>添加科室</a>
						</li>
						<li>
							<a href="/Home/keshi/lists/">
							<span class="badge badge-roundless badge-danger">new</span>科室管理</a>
						</li>

					</ul>
				</li><?php endif; ?>
                                      								<li>
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">用户管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="/Home/User/passwd">
							<span class="badge badge-roundless badge-danger">new</span>修改密码</a>
						</li>
                                                 <?php if($_SESSION['group'] == 1): ?><li>
							<a href="/Home/User/add">
							增加用户</a>
						</li>
                                               
						<li>
							<a href="/Home/User/lists">
							<span class="badge badge-roundless badge-danger">new</span>用户列表</a>
						</li>
						<li>
							<a href="/Home/User/group/">
							<span class="badge badge-roundless badge-danger">new</span>用户组管理</a>
						</li><?php endif; ?>

      					</ul>
	 			</li>
                            


                                         <?php if($_SESSION['group'] == 1): ?><li>
                                        <a href="javascript:;">
                                        <i class="glyphicon glyphicon-stats"></i>
                                        <span class="title">数据统计</span>
                                        <span class="arrow "></span>
                                        </a>
                                        <ul class="sub-menu">
                                           <li>
                                                        <a href="/Home/Yuyue/stat/">
                                                        数据查询</a>
                                                </li>



                                                 </ul>
                                           </li>
                              				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">系统设置</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="/Home/User/setting">系统基本参数</a>
						</li>
						<li>
							<a href="/Home/main/main/">
							<span class="badge badge-roundless badge-danger">NEW</span>关于软件</a>
						</li>


					</ul>
				</li><?php endif; ?>
                       
                                       <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="AngularJS version demo">
					<a href="/Home/Index/out">
					<i class="icon-logout"></i>
					<span class="title">
					退出登录 </span>
					</a>
				</li>

			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->

	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">

			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			系统设置
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">系统设置</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">系统基本参数设置</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>系统及本参数设置
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form  method="post" class="form-horizontal">
                                            
								<div class="form-body">
	      								<div class="form-group has-warning">
										<label class="control-label col-md-3" for="inputWarning">网站名称</label>
										<div class="col-md-4">
                                                                                     <input type="text" name="sitename" value="<?php echo ($list["site"]); ?>" class="form-control" id="inputError">

										</div>
									</div>
									
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">保存</button>
										
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/Public/assets/global/plugins/respond.min.js"></script>
<script src="/Public/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/Public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/Public/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="/Public/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->


<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/Public/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/assets/admin/pages/scripts/index.js" type="text/javascript"></script>
<script src="/Public/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->




<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   Index.init();
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
   ChartsAmcharts.init(); // init demo charts
});
$('#datetimepicker').datetimepicker();
</script>
<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>
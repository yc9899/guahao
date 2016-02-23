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
<title>烟台市中小学生近视监控平台 </title>
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
       <?php echo ($list["site"]); ?>
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
					<?php echo ($nick); ?></span>
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
					<a href="javascript:;" class="dropdown-toggle">
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
						<li>
							<a href="/Home/Yuyue/into/">
							<span class="badge badge-roundless badge-danger">new</span>导入</a>
						</li>
						<li>
							<a href="/Home/Yuyue/import/">
							<span class="badge badge-roundless badge-danger">new</span>导出</a>
						</li>

					</ul>
                                  </li>
				<li>
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
				</li>
                                      								<li>
					<a href="javascript:;">
					<i class="icon-user"></i>
					<span class="title">用户管理</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
                                             
						<li>
							<a href="/Home/User/add">
							增加用户</a>
						</li>
                                               
						<li>
							<a href="/Home/User/passwd">
							<span class="badge badge-roundless badge-danger">new</span>修改密码</a>
						</li>
						<li>
							<a href="/Home/User/lists">
							<span class="badge badge-roundless badge-danger">new</span>用户列表</a>
						</li>
						<li>
							<a href="/Home/User/group/">
							<span class="badge badge-roundless badge-danger">new</span>用户组管理</a>
						</li>

      					</ul>
	 			</li>
                            



                                                                             <li>
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
				</li>
                       
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
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			数据查询 <small>School management</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">数据统计</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">数据查询</a>
					</li>
				</ul>
                          </div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>数据查询
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
						<div class="portlet-body">
							<div class="table-toolbar">




								<div class="row">
                                                                     <div class="col-md-10">
                                                                          <form class="form-inline" action="/Home/Yuyue/stat" method="get">
                                                                          开始时间：<input type="text" class="form-control" name="start" class="Wdate" onClick="WdatePicker()">
                                                                          结束时间：  <input type="text" class="form-control" name="end" class="Wdate" onClick="WdatePicker()">
                                                                          分类：<select name="status" class="form-control" ><option value="全部">全部</option>
                                                                                <option value="已预约">已预约</option>
                                                                                <option value="已到院">已到院</option>

                                                                          </select>
                                                                                 <button type="submit" class="btn btn-default">搜索</button>
                                                                                 <a href="/Home/Yuyue/statout/" class="btn btn-primary">导出报表</a>
                                                                          </form>
                                                                  </div>
						           </div>


							</div>
                                                <div class="table-responsive" style="text-align:center;">
							<table class="table table-bordered">
								<thead>
								<tr>
									<th>
										 ID
									</th>
									<th>
										 部门：
									</th>
									<th>
										姓名：
									</th>
									<th>
										 性别：
									</th>
									<th>
										科室：
									</th>
                                                                            <th>录入时间：</th>
                                                                          <th>预约时间：</th>
                                                                          <td>联系方式：</th>
                                                                          <th>是否到院:</th>
                                                                          <th>是否手术:</th>
									<th>
										 操作
									</th>
								</tr>
								</thead>
								<tbody>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td>
<td><?php echo ($vo["source"]); ?>-<?php echo ($vo["uname"]); ?></td>
<td><?php echo ($vo["name"]); ?></td>
<td><?php echo ($vo["gender"]); ?></td>
<td><?php echo ($vo["department"]); ?></td>
<td><?php echo ($vo["date"]); ?></td>
<td><?php echo ($vo["yydate"]); ?></td>
<td><?php echo ($vo["telephone"]); ?></td>
    <?php if($vo["yuyue"] == 已到院): ?><td><span class="label label-danger">已到院</span></td>
    
    <?php else: ?>
 	<td><a  href="/Home/Yuyue/yy/id/<?php echo ($vo["id"]); ?>"><span class="label label-success"><?php echo ($vo["yuyue"]); ?></span></a></button></td><?php endif; ?>
  <?php if($vo["surgery"] == 否): ?><td><a href="/Home/Yuyue/sur/id/<?php echo ($vo["id"]); ?>" class="btn btn-primary btn-xs" role="button"><?php echo ($vo["surgery"]); ?></a></td>
  <?php else: ?>
    <td><a href="javascript:void()" class="btn btn-danger btn-xs" role="button"><?php echo ($vo["surgery"]); ?></a></td><?php endif; ?>
   
<td><a href="/Home/Yuyue/more/id/<?php echo ($vo["id"]); ?>">查看</a>|
<a href="/Home/Yuyue/uplist/id/<?php echo ($vo["id"]); ?>">修改</a>|
<a href="/Home/Yuyue/del/id/<?php echo ($vo["id"]); ?>">删除</a>
</td>

</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
							</table>
                                                       </div>
<div class="row">


<div class="col-md-7 col-sm-7">
<div class="dataTables_paginate paging_simple_numbers" id="sample_editable_1_paginate">

<?php echo ($page); ?>

   </div>
       </div>
            </div>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
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



<!-- BEGIN PAGE LEVEL PLUGINS amcharts-->
<script src="/Public/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="/Public/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS amcharts -->

<script src="/Public/assets/admin/pages/scripts/charts-amcharts.js"></script>

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
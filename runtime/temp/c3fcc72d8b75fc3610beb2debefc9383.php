<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/index/index.html";i:1508395350;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/header.html";i:1507736765;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/footer.html";i:1508229501;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>后台管理</title>

    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/static/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/css/animate.min.css" rel="stylesheet">
    <link href="/static/css/style.min.css?v=4.0.0" rel="stylesheet">
</head> 
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="/static/img/profile_small.jpg" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">admin</strong></span>
                                <span class="text-muted text-xs block">超级管理员<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li class="divider"></li>
                                <li><a href="<?php echo url('login/logout'); ?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                        </div>
                    </li>
                      
                    <li>
                        <li><a class="J_menuItem" href="javascript:void(0);" data-url="/index/index">首页</a></li>
                    </li>
                    <li>
                        <a class="J_menuItem nav_notice_icon" href="javascript:void(0);">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">员工管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/staff/index">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">会员列表</span>
                                </a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/staff/add">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">会员添加</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem nav_notice_icon" href="javascript:void(0);">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">会员管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/member/index">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">会员列表</span>
                                </a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/member/add">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">会员添加</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem nav_notice_icon" href="javascript:void(0);">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">角色管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/role/index">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">角色列表</span>
                                </a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/role/add">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">角色添加</span>
                                </a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/role/nodeList">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">节点列表</span>
                                </a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="javascript:void(0);" data-url="/role/addNode">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="nav-label">节点添加</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        
                    </div>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="login.html" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="/admin/index/index2" frameborder="0" data-id="index/index2" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2014-2015 <a href="http://www.zi-han.net/" target="_blank">zihan's blog</a>
                </div>
            </div>
        </div>
    </div>
</body>
	<script src="/static/js/jquery.min.js?v=2.1.4"></script>
	<script src="/static/js/bootstrap.min.js?v=3.3.5"></script>
	<script src="/static/js/plugins/jeditable/jquery.jeditable.js"></script>
	<script src="/static/js/plugins/dataTables/jquery.dataTables.js"></script>
	<script src="/static/js/plugins/dataTables/dataTables.bootstrap.js"></script>
	<script src="/static/js/content.min.js?v=1.0.0"></script>
	<script src="/static/js/plugins/layer/layer.js"></script>
	<script src="/static/me/javascript.js"></script>

	<script src="/static/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="/static/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/static/js/hplus.min.js?v=4.0.0"></script>
	<script src="/static/js/contabs.min.js"></script>
	<script src="/static/js/plugins/pace/pace.min.js"></script>
</body>
</html>
 
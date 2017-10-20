<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/staff/index.html";i:1508468566;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/header.html";i:1507736765;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/footer.html";i:1508229501;}*/ ?>
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

<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>员工列表</h5>
            </div>
            <div class="ibox-content">
                <form method="get" action="">
                    <div class="row">
                        <div class="col-sm-5 m-b-xs">
                            <a href="/staff/add" class="btn btn-primary btn-sm">新增</a>
                            <a href="javascript:void(0);" class="btn btn-warning btn-sm reload">刷新</a>
                        </div>
                        <div class="col-sm-4 m-b-xs">
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" name="key" value="<?php echo $key; ?>" placeholder="搜索用户(按会员ID、手机号、姓名)" class="input-sm form-control">
                                <span class="input-group-btn">
                                        <button type="submit" class="btn btn-sm btn-primary"> 搜索</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>工号</th>
                            <th>姓名</th>
                            <th>手机号</th>
                            <th>QQ</th>
                            <th>微信</th>
                            <th>出生日期</th>
                            <th>身份</th>
                            <th>所属诊所</th>
                            <th>添加时间</th>
                            <th width="100px">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td><?php echo $vo['job_number']; ?></td>
                            <td><?php echo $vo['realname']; ?></td>
                            <td><?php echo $vo['mobile']; ?></td>
                            <td><?php echo $vo['qq']; ?></td>
                            <td><?php echo $vo['weixin']; ?></td>
                            <td><?php echo $vo['birthday']; ?></td>
                            <td><?php echo getUser($vo['auth_code']); ?></td>
                            <td><?php echo $vo['sclinic_list']; ?></td>
                            <td><?php echo date("Y-m-d H:i",$vo['reg_time']); ?></td>
                            <td>
                                <a href="/admin/banner/banneredit?id=<?php echo $vo['admin_id']; ?>"><i class="btn btn-success btn-xs">编辑</i> </a>
                               <!--  <a class="alert-do" data-url="/admin/banner/bannerdel?id=<?php echo $vo['admin_id']; ?>" data-title="删除"><i class="btn btn-danger btn-xs">删除</i></a> -->
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php echo $page; ?>
            </div>
        </div>
    </div>
</div>
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

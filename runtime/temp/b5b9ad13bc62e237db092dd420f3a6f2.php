<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/member/add.html";i:1508318514;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/header.html";i:1507736765;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/footer.html";i:1508229501;}*/ ?>
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
                <h5>新增员工</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-5 m-b-xs">
                        <a href="javascript:window.history.go(-1);" class="btn btn-success btn-sm">返回</a>
                        <a href="javascript:void(0);" class="btn btn-warning btn-sm reload">刷新</a>
                    </div>
                    <div class="col-sm-4 m-b-xs">
                    </div>
                    <div class="col-sm-3 m-b-xs">
                    </div>
                </div>
                <form class="form-horizontal m-t form-post-submit add-submit-form" action="/member/add" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">姓名：</label>
                        <div class="col-sm-4">
                            <input name="user_name" type="text" value="" class="form-control" required autofocus="autofocus">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">昵称：</label>
                        <div class="col-sm-4">
                            <input name="alias" type="text" value="" class="form-control" required autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">性别：</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="sex" id="forsex0" value="2" checked>
                                </div>
                                <label class="form-control" for="forsex0">女</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="sex" id="forsex1" value="1">
                                </div>
                                <label class="form-control" for="forsex1">男</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">密码：</label>
                        <div class="col-sm-4">
                            <input name="password" type="password" value="" class="form-control" required autofocus="autofocus">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">手机号码：</label>
                        <div class="col-sm-4">
                            <input name="mobile" type="text" value="" class="form-control" required autofocus="autofocus">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">推荐人：</label>
                        <div class="col-sm-6">
                        <select name="parent_id" class="form-control">
                            <option value="0" selected>推荐人</option>
                            <option value="1">推荐人1</option>
                            <option value="2">推荐人2</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">状态：</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="is_validated" id="forstate0" value="2" checked>
                                </div>
                                <label class="form-control" for="forstate0">正常</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="sex" id="forstate1" value="1">
                                </div>
                                <label class="form-control" for="forstate1">禁用</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-3">
                            <button class="btn btn-primary add-submit-buttom" type="submit">添加会员</button>
                        </div>
                    </div>
                </form>
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

<script type="text/javascript">
    $(function(){
       $('.add-submit-buttom').click(function(e){
            e.preventDefault();
            var f = $(".add-submit-form"), url = f.attr('action'), d = f.serialize();
            $.post(url, d, function(r){
                if(r.code == 200){
                    top.window.location.href='/member/index';
                }else{
                    layer.alert(r.msg);
                }
            }, 'json');
        }) 
    })
</script>


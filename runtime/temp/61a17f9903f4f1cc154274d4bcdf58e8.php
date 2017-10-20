<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/role/edit.html";i:1508466844;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/header.html";i:1507736765;s:73:"/Users/zhujunjie/www/guochen/public/../apps/admin/view/public/footer.html";i:1508229501;}*/ ?>
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
                <h5>节点角色</h5>
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
                <form class="form-horizontal m-t form-post-submit add-submit-form" action="/role/edit" method="post">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">角色名称 ：</label>
                        <div class="col-sm-4">
                            <input type="hidden" name="auth_code" value="<?php echo $data['auth_code']; ?>">
                            <input name="auth_name" type="text" value="<?php echo $data['auth_name']; ?>" class="form-control" required autofocus="autofocus">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">后台权限设置 ：</label>
                        <div class="col-sm-9">
                            <?php if(is_array($node) || $node instanceof \think\Collection): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                             <label><input type="checkbox" <?php if(in_array(($v['id']), is_array($data['admin_code'])?$data['admin_code']:explode(',',$data['admin_code']))): ?>checked<?php endif; ?> name="admin_code[]" value="<?php echo $v['id']; ?>">&nbsp;<?php echo $v['remark']; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">收银台权限 ：</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="action_code" id="action_code0" value="2" <?php if($data['action_code'] == '2'): ?>checked<?php endif; ?>>
                                </div>
                                <label class="form-control" for="action_code0">无</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="action_code" id="action_code1" value="1" <?php if($data['action_code'] == '1'): ?>checked<?php endif; ?>>
                                </div>
                                <label class="form-control" for="action_code1">有</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">销售系统权限 ：</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="sell_code" id="sell_code0" value="2" <?php if($data['sell_code'] == '2'): ?>checked<?php endif; ?>>
                                </div>
                                <label class="form-control" for="sell_code0">无</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <input type="radio" name="sell_code" id="sell_code1" value="1" <?php if($data['sell_code'] == '1'): ?>checked<?php endif; ?>>
                                </div>
                                <label class="form-control" for="sell_code1">有</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-3">
                            <button class="btn btn-primary add-submit-buttom" type="submit">确认保存</button>
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
                    window.location.href='/role/index';
                }else{
                    layer.alert(r.msg);
                }
            }, 'json');
        }) 
    })
</script>


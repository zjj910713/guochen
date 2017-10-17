<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/Users/zhujunjie/www/game/public/../apps/index/view/index/conlist.html";i:1495642106;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title><?php echo $username; ?>的充值记录</title>
    <meta name="keywords" content="">
    <meta name="">

    <link href="/static/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/static/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/static/css/animate.min.css" rel="stylesheet">
    <link href="/static/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">    
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            日期
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover " id="editable">
                            <thead>
                                <tr>
                                    <th>用户名</th>
                                    <th>分值</th>
                                    <th>金额</th>
                                    <th>类型</th>
                                    <th>时间</th>
                                    <th>游戏</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                    <tr class="gradeX">
                                        <td><?php echo $v['user']; ?></td>
                                        <td><?php echo number_format($v['cgamebi']); ?></td>
                                        <td><?php echo $v['money']; ?></td>
                                        <td><?php echo setState($v['state']); ?></td>
                                        <td><?php echo date('Y-m-d H:i' ,$v['addtime']); ?></td>
                                        <td><?php echo $v['name']; ?></td>
                                        <td><a  class="btn btn-primary beback" kid="<?php echo $v['id']; ?>">撤销</a></td>
                                    </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8"> <?php echo $page; ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <script type="text/javascript">
        $(function(){
            $(".beback").click(function(){
               var id=$(this).attr('kid');  
               parent.layer.open({
                type: 1,
                title:'确定撤销？',
                skin: 'layui-layer-rim', //加上边框
                area: ['180px', '100px'], //宽高
                content: '&nbsp;&nbsp;&nbsp;<a id="issure" kid="'+id+'" class="btn btn-primary ">确定</a>&nbsp;&nbsp;&nbsp;<a id="cancle" class="btn btn-primary ">取消</a>'
                }); 
            });
            $("body").on("click", "#issure", function () { 
                var kid=$(this).attr('kid');
                $.post("<?php echo url('Index/beback'); ?>",{id:kid},function(data){
                    alert(data.msg);
                    $(".layui-layer-close").click();
                    window.location.reload();
                })
            });
        })
    </script>
</body>

</html>
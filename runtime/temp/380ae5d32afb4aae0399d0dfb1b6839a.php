<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"/Users/zhujunjie/www/game/public/../apps/index/view/index/index.html";i:1507565018;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>积分福利系统</title>
    <meta name="keywords" content="">
    <meta name="">

    <link rel="/static/shortcut icon" href="favicon.ico">
    <link href="/static/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/static/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link href="/static/css/animate.min.css" rel="stylesheet">
    <link href="/static/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg" onKeyDown="keyCheck();">
    <div class="wrapper wrapper-content animated fadeInRight">    
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" placeholder="输入用户名" id="keyword" value="<?php echo \think\Session::get('keyword'); ?>" class="input-sm form-control"> <span class="input-group-btn">
                                        <button id="seach" class="btn btn-sm btn-primary"> 搜索</button> </span>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <a id="addUser" class="btn btn-primary ">添加会员</a>
                                <a id="addGame" class="btn btn-primary ">添加游戏</a>
                                <a id="addList" href="<?php echo url('Index/conList'); ?>" class="btn btn-primary ">充值记录</a>
                                <a id="setSystem" class="btn btn-primary ">系统设置</a>
                                <a id="towork" class="btn btn-primary towork">上班</a>
                                <a id="offwork" href="<?php echo url('Index/offwork'); ?>" class="btn btn-primary ">下班</a>
                                <a class="btn" style="color:red">最新用户为:<span style="font-size: 18px;"><?php echo $user; ?></span></a>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover " id="editable">
                            <thead>
                                <tr>
                                    <th>操作</th>
                                    <th>会员名</th>
                                    <th>游戏</th>
                                    <th>客积分</th>
                                    <th>客差价</th>
                                    <th>介绍人反积分</th>
                                    <th>介绍人反差价</th>
                                    <th>客（兑换）</th>
                                    <th>介绍人（兑换)</th>
                                    <th>推荐人</th>
                                    <th>最后一次购买</th>
                                    <th>总购买</th>
                                    <th>总回收</th>
                                    <th>总金额</th>
                                    <th>全额积分</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                    <tr class="gradeX" id="td<?php echo $key+1; ?>" uid="<?php echo $v['id']; ?>" gid="<?php echo $v['gid']; ?>">
                                        <td class="textwidth2">
                                        <a class="exchange ">兑换积分</a>
                                        <a href="<?php echo url('Index/conList',['gid'=>$v['gid'],'uid'=>$v['id']]); ?>" >充值记录</a>  <a  class="delUser" uid="<?php echo $v['id']; ?>">删除用户</a><a  class="delUsergame" uid="<?php echo $v['id']; ?>" gid="<?php echo $v['gid']; ?>">删除游戏</a><a class="upUser" uid="<?php echo $v['id']; ?>" gid="<?php echo $v['gid']; ?>">修改资料</a></td>
                                        <td class="userme"><?php echo $v['user']; ?></td>
                                        <td class="ganame"><?php echo $v['name']; ?></td>
                                        <td class="integral"><?php echo number_format($v['integral']); ?></td>
                                        <td class="mistake"><?php echo number_format($v['mistake']); ?></td>
                                        <td><?php echo number_format($v['pintegral']); ?></td>
                                        <td><?php echo number_format($v['pmistake']); ?></td>
                                        <td><?php echo number_format($v['exchange']); ?></td>
                                        <td><?php echo number_format($v['mistexhange']); ?></td>
                                        <td><?php echo $v['tui']; ?></td>
                                        <td class="addtime"><?php echo date('Y-m-d H:i',$v['addtime']); ?></td>
                                        <td><?php echo number_format($v['buytotal']); ?></td>
                                        <td class="recovery"><?php echo number_format($v['recovery']); ?></td>
                                        <td class="total"><?php echo number_format($v['total']); ?></td>
                                        <td class="allit"><?php echo number_format($v['allit']); ?></td>
                                    </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <tr>
                                        <td colspan="15">
                                            <div class="dataTables_paginate paging_simple_numbers" style="float: left;" id="DataTables_Table_0_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button previous <?php if($page == '1'): ?>disabled<?php endif; ?>" aria-controls="DataTables_Table_0" tabindex="0"><a href="/?page=<?php echo $page-1; ?>" target="_self">上一页</a></li>
                                                    <?php $__FOR_START_279706770__=1;$__FOR_END_279706770__=$pages+1;for($i=$__FOR_START_279706770__;$i < $__FOR_END_279706770__;$i+=1){ ?>
                                                    <li class="paginate_button <?php if($page == $i): ?>active<?php endif; ?>" aria-controls="DataTables_Table_0" tabindex="0"><a href="/?page=<?php echo $i; ?>" target="_self"><?php echo $i; ?></a></li>
                                                    <?php } ?>
                                                    <li class="paginate_button next <?php if($page == $pages): ?>disabled<?php endif; ?>" aria-controls="DataTables_Table_0" tabindex="0" ><a href="/?page=<?php echo $page+1; ?>" target="_self">下一页</a></li>
                                                </ul> 
                                            </div>
                                        </td>
                                    </tr>
                            </tbody>
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
    <style type="text/css">
        .textwidth{width: 120px;}
        .textwidth2{width: 80px;}
        .textwidth3{width: 120px;font-size: 16px;}
        #gamelist{list-style: none;borde:1px solid #ccc;}
        #gamelist li{cursor: pointer;}
        .yanshi{color:red;background:#ccc; margin-left: 5px;padding: 2px 5px;}
        a{color: #000;}
    </style>
    <script type="text/javascript">
    $(function(){
        // var se=1;
        // $('#keyword').click(function(){
        //     se=2;
        // })
        $("#seach").click(function(){
            var key=$.trim($("#keyword").val());
            var str={keyword:key};
            if(!key){
                str={keyword:key,type:2}
            }
            $.post("<?php echo url('Index/index'); ?>",str,function(d){
                window.location.reload();
                 
            })
        })
        $("#addUser").click(function(){
           parent.layer.open({
            type: 1,
            title:'添加会员',
            skin: 'layui-layer-rim', //加上边框
            area: ['420px', '280px'], //宽高
            content: '<table class="table"><tr><td>会员名</td><td><input class="textwidth" type="text" id="username"/></td><td>备注</td><td><input type="text" class="textwidth" id="remarks"/></td></tr><tr><td>会员返点</td><td><input class="textwidth" type="text" id="meback"/></td><td>下级返点</td><td><input type="text" class="textwidth" id="nextback"/></td></tr><tr><td>所在游戏</td><td><select name="gid" id="gname"><?php if(is_array($gamelist) || $gamelist instanceof \think\Collection): $i = 0; $__LIST__ = $gamelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td><td>推荐人</td><td><input class="textwidth type="text" id="tui"/></td></tr><tr><td>上返</td><td><input class="textwidth" type="text" id="misback"/></td><td>下返</td><td><input type="text" class="textwidth" id="misnextback"/></td></tr><tr><td><input type="submit" id="postMsg" value="提交"></td><td></td><td><input type="submit" value="删除"/></td><td></td></tr></table>'
            });
            $("#username").focus(); 
        });
        $(".upUser").click(function(){
            var uid=$(this).attr('uid'); 
            var gid=$(this).attr('gid'); 
            parent.layer.open({
            type: 1,
            title:'修改会员',
            skin: 'layui-layer-rim', //加上边框
            area: ['420px', '420px'], //宽高
            content: '<table class="table"><tr><td>会员名</td><td><input class="textwidth" uid='+uid+' gid='+gid+' type="text" id="username"/></td><td>备注</td><td><input type="text" class="textwidth" id="remarks"/></td></tr><tr><td>会员返点</td><td><input class="textwidth" type="text" id="meback"/></td><td>下级返点</td><td><input type="text" class="textwidth" id="nextback"/></td></tr><tr><td>所在游戏</td><td><select name="gid" id="gname"></option>{/volist}</select></td><td>推荐人</td><td><input class="textwidth type="text" id="tui"/></td></tr><tr><td>上返</td><td><input class="textwidth" type="text" id="misback"/></td><td>下返</td><td><input type="text" class="textwidth" id="misnextback"/></td></tr><tr><td colspan="4"><div id="ulist" style="width:380px;height:100px;"><div></td></tr><tr><td><input type="submit" id="upMsg" value="提交"></td><td></td><td><input type="submit" value="删除"/></td><td></td></tr></table>'
            });
            $("#username").focus(); 
            $.post("<?php echo url('Index/upUser'); ?>",{uid:uid,gid:gid},function(data){
            $("#username").val(data.data[0].user);
            $("#remarks").val(data.data[0].remark);
            $("#meback").val(data.data[0].meback);
            $("#nextback").val(data.data[0].nextback);
            $("#tui").val(data.data[0].puser);
            $("#misback").val(data.data[0].misback);
            $("#misnextback").val(data.data[0].misnextback);
            $("#ulist").text(data.tuidata);
            $("#gname").html(data.gstr);
            })

        });
        //会员添加
        $("body").on("click", "#upMsg", function () {
            var uid=$("#username").attr('uid'); 
            var ogid=$("#username").attr('gid');  
            var username=$("#username").val();
            var remarks=$("#remarks").val();
            var meback=$("#meback").val();
            var nextback=$("#nextback").val();
            var gid=$("#gname").val();
            var pid=$("#tui").val();
            var misback=$("#misback").val();
            var misnextback=$("#misnextback").val();
            $.post("<?php echo url('Index/updateU'); ?>",{uid:uid,ogid:ogid,username:username,remarks:remarks,gid:gid,meback:meback,nextback:nextback,pid:pid,misback:misback,misnextback:misnextback},function(data){
                alert(data.msg);
                window.location.reload();
            })
        });
        $(".delUser").click(function(){
           var uid=$(this).attr('uid');
           var gid=$(this).attr('gid');  
           parent.layer.open({
            type: 1,
            title:'确定删除？',
            skin: 'layui-layer-rim', //加上边框
            area: ['180px', '100px'], //宽高
            content: '&nbsp;&nbsp;&nbsp;<a id="issure" uid="'+uid+'" class="btn btn-primary ">确定</a>&nbsp;&nbsp;&nbsp;<a id="cancle" class="btn btn-primary ">取消</a>'
            }); 
        });
        $(".delUsergame").click(function(){
           var uid=$(this).attr('uid');
           var gid=$(this).attr('gid');  
           parent.layer.open({
            type: 1,
            title:'确定删除？',
            skin: 'layui-layer-rim', //加上边框
            area: ['180px', '100px'], //宽高
            content: '&nbsp;&nbsp;&nbsp;<a id="issureg" uid="'+uid+'" gid="'+gid+'" class="btn btn-primary ">确定</a>&nbsp;&nbsp;&nbsp;<a id="cancle" class="btn btn-primary ">取消</a>'
            }); 
        });
         //del
        $("body").on("click", "#issure", function () { 
            var uid=$(this).attr('uid');
            var gid=$(this).attr('gid'); 
            $.post("<?php echo url('Index/delUser'); ?>",{uid:uid,gid:gid},function(data){
                alert(data.msg);
                window.location.reload();
            })
        });
        $("body").on("click", "#issureg", function () { 
            var uid=$(this).attr('uid');
            var gid=$(this).attr('gid'); 
            $.post("<?php echo url('Index/delUsergame'); ?>",{uid:uid,gid:gid},function(data){
                alert(data.msg);
                window.location.reload();
            })
        });
        $("body").on("click", "#cancle", function () { 
            $(".layui-layer-close").click();
        });
        $("#addGame").click(function(){
           parent.layer.open({
            type: 1,
            title:'返点游戏设定',
            skin: 'layui-layer-rim', //加上边框
            area: ['350px', '320px'], //宽高
            content: '<table class="table"><tr><td id="gid" gid="">游戏名</td><td><input class="textwidth" type="text" id="gamename" value=""/></td></tr><tr><td>游戏返点</td><td><input class="textwidth" type="text" id="gameback"/></td></tr><tr><td>兑换单位</td><td><input class="textwidth" type="text" id="unit"/></td></tr><tr><td>游戏列表<ul id="gamelist"><?php if(is_array($gamelist) || $gamelist instanceof \think\Collection): $i = 0; $__LIST__ = $gamelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li class="getGid" atr="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></td><td></td></tr><tr><td><input type="submit" id="setGame" value="保存"></td><td><input type="submit" value="删除" id="delGame"/></tr></table>'
            }); 
           $("#gamename").focus();  
        });
        
        $("#setSystem").click(function(){
           parent.layer.open({
            type: 1,
            title:'系统设置',
            skin: 'layui-layer-rim', //加上边框
            area: ['500px', '200px'], //宽高
            content: '<table class="table"><tr><td class="textwidth">返点下限</td><td><input class="textwidth2" type="text" id="fdxx" value="<?php echo $config['fdxx']; ?>"/></td><td>卖</td><td><input class="textwidth2" type="text" value="<?php echo $config['sell']; ?>" id="sell"/></td><td>买</td><td><input class="textwidth2" type="text" value="<?php echo $config['buy']; ?>" id="buy"/></td></tr><tr><td><input type="submit" id="setConfig" value="设置"></td><td></td></tr></table>'
            });
            $("#fdxx").focus();  
        });
        //兑换积分

        $(".exchange").click(function(){

           parent.layer.open({
            type: 1,
            title:'兑换积分',
            skin: 'layui-layer-rim', //加上边框
            area: ['380px', '310px'], //宽高
            content: '<table class="table"><tr><td class="textwidth3">客积分兑换</td><td><input  type="text" id="jfdh" name="jfdh"/></td></tr><tr><td class="textwidth3">介绍人积分兑换</td><td><input  type="text" id="kjfdh" name="jfdh"/></td></tr><tr><td class="textwidth3">客差价兑换</td><td><input  type="text" id="cjdh"/></td></tr><tr><td class="textwidth3">介绍人差价兑换</td><td><input  type="text" id="kcjdh" name="jfdh"/></td></tr><tr><td><input type="submit" id="subjf" gid="" uid="" value="确认"></td><td></td></tr></table>'
            });
           $("#jfdh").focus(); 
            var uid=$(this).parents('tr').attr('uid');
            var gid=$(this).parents('tr').attr('gid');
            $("#subjf").attr('gid',gid);
            $("#subjf").attr('uid',uid);  
        });
        //积分兑换事件
        $("body").on("click", "#subjf", function () { 
            var uid=$(this).attr('uid');
            var gid=$(this).attr('gid');
            var jfdh=$("#jfdh").val();
            var kjfdh=$("#kjfdh").val();
            var cjdh=$("#cjdh").val();
            var kcjdh=$("#kcjdh").val();

            var arr = {};
            if(jfdh==null && cjdh==null && kjfdh==null && kcjdh==null){
                alert('请输入兑换分值');
                return false;
            }
            arr['uid'] = uid;
            arr['gid'] = gid;
            if(jfdh){
                arr['jfdh'] = jfdh;
            }
            if(cjdh){
                arr['cjdh'] = cjdh;
            }
            if(kjfdh){
                arr['kjfdh'] = kjfdh;
            }
            if(kcjdh){
                arr['kcjdh'] = kcjdh;
            }
            $.post("<?php echo url('Index/exchange'); ?>",arr,function(data){
                alert(data.msg);
                window.location.reload();
                $(".layui-layer-close").click();
            })
        });
        //会员添加
        $("body").on("click", "#postMsg", function () { 
            var username=$("#username").val();
            var remarks=$("#remarks").val();
            var meback=$("#meback").val();
            var nextback=$("#nextback").val();
            var gid=$("#gname").val();
            var pid=$("#tui").val();
            var misback=$("#misback").val();
            var misnextback=$("#misnextback").val();
            $.post("<?php echo url('Index/addUser'); ?>",{username:username,remarks:remarks,gid:gid,meback:meback,nextback:nextback,pid:pid,misback:misback,misnextback:misnextback},function(data){
                alert(data.msg);
                window.location.reload();
            })
        });
        //系统设置
        $("body").on("click", "#setConfig", function () { 
            var fdxx=$("#fdxx").val();
            var sell=$("#sell").val();
            var buy=$("#buy").val();
            $.post("<?php echo url('Index/setSystem'); ?>",{fdxx:fdxx,sell:sell,buy:buy},function(data){
                if(data.state==1){
                    alert("更新成功");
                }else{
                    alert("更新失败！")
                }
            })
        });
        //添加游戏
        $("body").on("click", "#setGame", function () { 
            var gid=$("#gid").attr("gid");
            var name=$("#gamename").val();
            var gameback=$("#gameback").val();
            var unit=$("#unit").val();
            $.post("<?php echo url('Index/setGame'); ?>",{gid:gid,name:name,gameback:gameback,unit:unit},function(data){
                if(data.state==1){
                    alert("更新成功");
                }else{
                    alert("更新失败！")
                }
            })
        });
        //点击游戏事件
        $("body").on("click", "#gamelist>li", function () {
            var gid=$(this).attr('atr');
            $.post("<?php echo url('Index/getGame'); ?>",{gid:gid},function(d){
                $("#gid").attr("gid",d.data.id);
                $("#gamename").val(d.data.name);
                $("#gameback").val(d.data.gameback);
                $("#unit").val(d.data.unit);
            });
        });
        //删除游戏
        $("body").on("click", "#delGame", function () {
            var gid=$("#gid").attr('gid');
            $.post("<?php echo url('Index/delGame'); ?>",{gid:gid},function(d){
                alert("成功");
                window.location.reload();
            })
        });
        //获取游戏兑换单位
        $("body").on("input propertychange", "#money", function () {
            var result = $(this).val();
            var gid=$("#td"+tdIndex).attr("gid");
            $.post("<?php echo url('Index/getGame'); ?>",{gid:gid},function(d){
                var unit =d.data.unit;
                var conzhi=result*unit;
                $("#cgamebi").val(conzhi);
            });
        });
        
        var isview=1;
        
        //充值
        $("body").on("click", "#recharge", function () {
            var gid=$("#td"+tdIndex).attr("gid");
            var uid=$("#td"+tdIndex).attr("uid");
            console.log($("#td"+tdIndex).children(".mistake").text());
            var money=$("#money").val();
            var cgamebi=$("#cgamebi").val();
            if(!money){alert('请输入充值金额');return false}
            $.post("<?php echo url('Index/recharge'); ?>",{uid:uid,gid:gid,money:money,cgamebi:cgamebi,state:1},function(d){
                alert(d.msg);
                $("#td"+tdIndex).children(".integral").text(d.data.integral);
                $("#td"+tdIndex).children(".mistake").text(d.data.mistake);
                $("#td"+tdIndex).children(".total").text(d.data.total);
                $("#td"+tdIndex).children(".addtime").text(d.data.addtime);
                $("#td"+tdIndex).children(".allit").text(d.data.allit);

            })
            $(".layui-layer-close").click();
            window.location.reload();

            isview=1;
        });
        //回收
        $("body").on("click", "#huishou", function () {
            var gid=$("#td"+tdIndex).attr("gid");
            var uid=$("#td"+tdIndex).attr("uid");
            var cgamebi=$("#hgamebi").val();
            if(!money){alert('请输入回收分数');return false}
            $.post("<?php echo url('Index/recovery'); ?>",{uid:uid,gid:gid,money:0,cgamebi:cgamebi,state:2},function(d){
                alert(d.msg);
                $("#td"+tdIndex).children(".recovery").text(d.data);
                window.location.reload();
            })
            $(".layui-layer-close").click();

            isview=1;
        });
        $("body").on("click","#czqxbut",function(){
            $(".layui-layer-close").click();
            isview=1;
        })
        //上班
        $("#towork").click(function(){
            $.post("<?php echo url('Index/towork'); ?>",{},function(d){
                alert('开始上班,上班时间为：'+d.time);
                $(".towork").attr('id',null);
            })
        });
        $("#offwork").click(function(){
                $(this).attr('id','towork');
        });
        $('.disabled').children('a').remove();

        document.onkeydown = function(e){
            var gid=$("#td"+tdIndex).attr("gid");
            var uid=$("#td"+tdIndex).attr("uid");
            var ganame=$("#td"+tdIndex).children('.ganame').text();
            var userme=$("#td"+tdIndex).children('.userme').text();
            if(e.keyCode==32){
                $("#seach").click();
            }
            if(e.keyCode==13) {
                if(isview==1){
                   $.post("<?php echo url('Index/getGame'); ?>",{gid:gid},function(d){
                    var unit =d.data.unit;
                        $(".yanshi").text("每元"+unit+"分");
                    });
                    parent.layer.open({
                    type: 1,
                    title:userme+'--'+ganame+'--会员充值',
                    skin: 'layui-layer-rim', //加上边框
                    area: ['450px', '220px'], //宽高
                    content: '<table class="table"><tr><td class="textwidth3">人民币金额</td><td><input  type="text" id="money" name="money"/><span class="yanshi">每元150000分</span></td></tr><tr><td class="textwidth3">充值游戏币</td><td><input  type="text" id="cgamebi"/></td></tr><tr><td class="textwidth3">回收游戏币</td><td><input  type="text" id="hgamebi"/></td></tr><tr><td><input type="submit" id="recharge" value="确认充值"></td><td><input type="submit" id="huishou" value="确认回收"><button id="czqxbut" style="margin-left:30px">取消</button</td></tr></table>'
                    });
                    $("#money").focus(); 
                    $(".layui-layer-setwin").hide();
                    isview=2;
                }else{
                    var state=1;
                    var money=$("#money").val();
                    var cgamebi=$("#cgamebi").val();
                    if(!money){alert('请输入充值金额');return false}
                    $.post("<?php echo url('Index/recharge'); ?>",{uid:uid,gid:gid,money:money,cgamebi:cgamebi,state:1},function(d){

                        $("#td"+tdIndex).children(".integral").text(d.data.integral);
                        $("#td"+tdIndex).children(".total").text(d.data.total);
                        $("#td"+tdIndex).children(".mistake").text(d.data.mistake);
                        $("#td"+tdIndex).children(".addtime").text(d.data.addtime);
                        $("#td"+tdIndex).children(".allit").text(d.data.allit);
                        alert(d.msg);

                    })
                    $(".layui-layer-close").click();
                    isview=1;

                }
                
             } 
        }
    
    })
        
    </script>
    <script type="text/javascript">
    var tdIndex = 1;
    var count=<?php echo $count; ?>;                                   
     //获取当前行的索引变量
    document.all.td1.style.backgroundColor='#abcdef';  
    //设置列1的背景色
    function keyCheck() {
        if (window.event.keyCode==38) {        
         //向上键
          for (var i=1;i<=count;i++) {
           eval("document.all.td"+i+".style.backgroundColor='#FFFFFF'");
        //更改所有的行背景色
          }
          if (tdIndex<=1) {
            document.all.td1.style.backgroundColor='#ccc';       
            //到顶端时，只第一行颜色改变
            return false;
          }else {
            tdIndex -= 1;                                            
            //行索引减小
            eval("document.all.td"+tdIndex+".style.backgroundColor='#abcdef'");
            //改变行的背景色
          }
        }
        if (window.event.keyCode==40) {             //向下键
            for (var i=1;i<=count;i++) {
                eval("document.all.td"+i+".style.backgroundColor='#FFFFFF'");
                //更改所有的行背景色
            }
            if (tdIndex>=count) {
            document.all.td<?php echo $count; ?>.style.backgroundColor='#abcdef';      
            //到顶端时，只第一行颜色改变
            return false;
        }else {
            tdIndex += 1;                                            
            //行索引增加
           eval("document.all.td"+tdIndex+".style.backgroundColor='#abcdef'");
            //改变行的背景色
        }
        }
    }
    </script>
</body>

</html>
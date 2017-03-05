<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/purchase/Public/css/sccl-buyer.css">
    <link rel="stylesheet" type="text/css" href="/purchase/Public/css/skin/qingxin/skin.css" id="layout-skin"/>
    <link rel="stylesheet" href="/purchase/Public/libs/iconfont/iconfont.css">
    <title>买家控制台</title>
</head>
<body>
    <div class="layout-admin">
        <header class="layout-header">
            <span class="header-logo">买家控制台</span> 
            <a class="header-menu-btn" href="javascript:;"><i class="icon-font">&#xe600;</i></a>
            <ul class="header-bar">
                <li class="header-bar-nav">
                    <a href="javascript:;"><?php echo ($username); ?><i class="icon-font" style="margin-left:5px;">&#xe60c;</i></a>
                    <ul class="header-dropdown-menu">
                        <li><a href="javascript:;">个人信息</a></li>
                        <li class="logout"><a href="javascript:;">退出</a></li>
                    </ul>
                </li>
                <li class="header-bar-nav"> 
                    <a href="javascript:;" title="换肤"><i class="icon-font">&#xe608;</i></a>
                    <ul class="header-dropdown-menu right dropdown-skin">
                        <li><a href="javascript:;" data-val="qingxin" title="清新">清新</a></li>
                        <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                        <li><a href="javascript:;" data-val="molv" title="墨绿">墨绿</a></li>
                        
                    </ul>
                </li>
            </ul>
        </header>
        <aside class="layout-side">
            <ul class="side-menu">
              
            </ul>
        </aside>
        
        <div class="layout-side-arrow"><div class="layout-side-arrow-icon"><i class="icon-font">&#xe60d;</i></div></div>
        
        <section class="layout-main">
            <div class="layout-main-tab">
                <button class="tab-btn btn-left"><i class="icon-font">&#xe60e;</i></button>
                <nav class="tab-nav">
                    <div class="tab-nav-content">
                        <a href="javascript:;" class="content-tab active" data-id="home.html">系统说明</a>
                    </div>
                </nav>
                <button class="tab-btn btn-right"><i class="icon-font">&#xe60f;</i></button>
            </div>
            <div class="layout-main-body">
                <iframe class="body-iframe" name="iframe0" width="100%" height="99%" src="home.html" frameborder="0" data-id="home.html" seamless></iframe>
            </div>
        </section>
    </div>
<input type="hidden" id="appPath" value="/purchase/index.php">
<input type="hidden" id="pubPath" value="/purchase/Public">
<script src="/purchase/Public/libs/jquery/jquery.min.js"></script>
<script src="/purchase/Public/libs/layer/layer.js"></script>
<script src="/purchase/Public/libs/art-template/dist/template.js"></script>
<script src="/purchase/Public/js/sccl-buyer.js"></script>
<script src="/purchase/Public/js/sccl-util.js"></script>
<script>
$(function(){
    $('.logout').click(function(){
        var appPath = $('#appPath').val();
        $.ajax({
            url: appPath+'/Buyer/User/logout',
            type: 'POST',
            dataType: 'json',
            data: {},
            success: function(data){
                console.log(data);
                if(data.code == '0'){
                    layer.msg('成功退出！');
                    setTimeout(function(){
                        window.location.href = appPath + '/Buyer/User';
                    },1500);
                }else{
                    layer.msg(data.ext);
                }
                
            },
            error: function(xhr){
                console.log(xhr);
            }
        });
    });
});

</script>
</body>
</html>
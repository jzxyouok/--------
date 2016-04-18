<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>后台首页</title>
<link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript"  src="__PUBLIC__/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 
<script charset="utf-8" src="__PUBLIC__/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor-min.js"></script>
<link href="../Public/css/index.css" rel="stylesheet">
<script type="text/javascript" src="../Public/js/index.js"></script>
</head>
<body>
       <div class="container">
       	     <div class="row">
                 <!-- 导航栏 -->
				  <nav class="navbar navbar-inverse " role="navigation">
			         <div class="navbar-header">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" 
			               data-target="#navbar-collapse">
			               <span class="sr-only">切换导航</span>
			               <span class="icon-bar"></span>
			               <span class="icon-bar"></span>
			               <span class="icon-bar"></span>
			            </button>
			            <a class="navbar-brand" href="">后台首页</a>
			         </div>
			         <div class="collapse navbar-collapse" id="navbar-collapse">
			            <ul class="nav navbar-nav navbar-right">
			               <li class="active"><a href="__APP__/Login/loginout">退出</a></li>           
			            </ul>
			         </div>
			      </nav>
       	     </div>	
             <div class="row">
                   <div class="col-sm-2 left">
                       <ul class="list-group">
                             <a class="list-group-item active">用户管理</a>
                             <a class="list-group-item" href="__APP__/User/show">查看用户</a>
                             <a class="list-group-item" href="__APP__/User/add">添加用户</a>
                       </ul>
                        <ul class="list-group">
                             <a class="list-group-item active">内容管理</a>
                             <a class="list-group-item" href="__APP__/Cartoon/show">查看内容</a>
                             <a class="list-group-item" href="__APP__/Cartoon/add">添加内容</a>
                       </ul>
                   </div>
                   <div class="col-sm-10 right">
                   	  
                          <div class="jumbotron">
                                 <h4>欢迎来到动漫乐园后台!</h4>
                                 <p>动漫乐园,致力于让大家重温童真！</p>
                                 <a class="btn btn-primary" href="__ROOT__/index.php/Index/index" target="_blank">首页</a>
                          </div>
                      
                   </div>
             </div>
       </div>
</body>
</html>
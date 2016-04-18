<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>后台登录</title>
<link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript"  src="__PUBLIC__/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
<link href="../Public/css/login.css" rel="stylesheet">
<script type="text/javascript" src="../Public/js/login.js"></script>
</head>
<body> 
      <div class="container">
            <form method="post" action="__URL__/check" class="login">  
                 <div class="input-group">
                      <span class="input-group-addon">用户名</span>
                      <input type="text" name="username" class="form-control">
                 </div>
                 <div class="input-group">
                      <span class="input-group-addon">密&nbsp;&nbsp;&nbsp;码</span>
                      <input type="password" name="password" class="form-control">
                 </div>
                 <div class="input-group">
                      <span class="input-group-addon">验证码</span>
                      <input type="text" name="vcode" class="form-control">
                      <span class="input-group-addon"><img src="__URL__/verify" class="img"></span>
                       <span class="input-group-addon cursor"><i class="glyphicon glyphicon-refresh"></i></span>
                 </div>
                 <input type="submit" class="btn btn-primary" value="登录"></input>
                 <input type="reset" class="btn btn-danger button" value="清空"></button>
            </form>
      </div>
</body>
</html>
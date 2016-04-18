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
                   	    
      <table class="table table-striped">
             <thead>
             	<tr>
             		<th id="id">ID</th>
                    <th id="title">标题</th>
                    <th id="content">内容</th>
                    <th id="editor">编辑</th>
                    <th id="time">时间</th>
                    <th id="edit">管理</th>
             	</tr>
                   
             </thead>
             <tbody>
             	   <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
		                   <td><?php echo ($row['id']); ?></td>
		                   <td><?php echo ($row['title']); ?></td>
		                   <td><?php echo ($row['content']); ?></td>
		                   <td><?php echo ($row['editor']); ?></td>
		                   <td><?php echo (date("Y-m-d H:i:s",$row['time'])); ?></td>
		                   <td><a class="update" href="javascript:;">修改</a>|<a href="__URL__/delete/id/<?php echo ($row['id']); ?>">删除</a></td>

	                   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
             </tbody>
      </table>

      <div class="panel panel-danger hidden">
            <div class="panel-heading">
                 <h4>修改</h4>
            </div>
            <form method="post" action="__URL__/update">
                 <div class="panel-body">
            	    <div class="input-group">
                    <span class="input-group-addon">&nbsp;I D&nbsp;</span>
	                        <input type="text" class="form-control" name="id" id="input_id" readonly/>
	                 </div>
	                 <div class="input-group">
	                        <span class="input-group-addon">标题</span>
	                        <input type="text" class="form-control" name="title" id="input_title"/>
	                 </div>
	                 <div class="input-group">
	                        <span class="input-group-addon">编辑</span>
	                        <input type="text" class="form-control" name="editor" id="input_editor"/>
	                 </div>
	                 <div class="input-group">
	                        <span class="input-group-addon">时间</span>
	                        <input type="text" class="form-control" name="time" id="input_time"/>
	                 </div>
	                 <div class="input-group">
	                        <span class="input-group-addon">内容</span>
	                        <input type="text" class="form-control" name="content" id="input_content"/>
	                 </div>            	
                </div>
                <div class="panel-footer">
                      <input type="submit" class="btn btn-primary pull-right" value="提交"/>
                      <input type="reset" class="btn btn-danger pull-right" value="清空"/>
                </div>
        </form>
      </div>




                   </div>
             </div>
       </div>
</body>
</html>
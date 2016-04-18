<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>首页</title>
<link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../Public/css/index.css" rel="stylesheet">
<script type="text/javascript"  src="__PUBLIC__/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 
</head>
<body>
	<div class="container">
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
            <a class="navbar-brand" href="">动漫乐园</a>
         </div>
         <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="">发布动漫</a></li>           
            </ul>
         </div>
      </nav>
     <!-- 轮播图 -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../Public/images/1.jpg" alt="...">                  
                </div>
                <div class="item">
                    <img src="../Public/images/2.jpg" alt="...">
                </div>
                 <div class="item">
                    <img src="../Public/images/3.jpg" alt="...">                  
                </div>
                 <div class="item">
                     <img src="../Public/images/4.jpg" alt="...">                  
                </div>
                 <div class="item">
                    <img src="../Public/images/5.jpg" alt="...">                  
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>

        <!-- 动漫展示区 -->
      <?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><div class="panel panel-primary">
             <div class="panel-heading">
                <h4><?php echo ($row['title']); ?></h4>
             </div>
             <div class="panel-body">
                  <?php echo ($row['content']); ?>
             </div>
             <div class="panel-footer">
                <span class="label label-danger">发布时间:</span>
                <span><?php echo (date('Y-m-d H:i:s',$row['time'])); ?></span>
                <span class="label label-success">发布者:</span>
                <span><?php echo ($row['editor']); ?></span>
             </div>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
        

        <!-- 尾部 -->
        <footer class="footer">©2016 4 17 by ChaozhongYu. All rights reserved</footer>
	</div>
</body>
</html>
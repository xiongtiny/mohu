<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>动态语言研究会智能管理系统</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="sjj">
  <script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.js"></script> <!-- jQuery -->
  <!-- Stylesheets -->
  <link href="/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/font-awesome.css"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/jquery-ui.css"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/prettyPhoto.css">  
  <!-- Star rating -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/jquery.cleditor.css"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-switch.css">
  <!-- Main stylesheet -->
  <link href="/<?php echo MODULE_PATH;?>/View/Public/style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="/<?php echo MODULE_PATH;?>/View/Public/style/widgets.css" rel="stylesheet">   
  <!--kind editor-->
  <link rel="stylesheet" href="/Public/kindeditor-4.1.7/themes/default/default.css" />
	<link rel="stylesheet" href="/Public/kindeditor-4.1.7/plugins/code/prettify.css" />
	<script charset="utf-8" src="/Public/kindeditor-4.1.7/kindeditor.js"></script>
	<script charset="utf-8" src="/Public/kindeditor-4.1.7/lang/zh_CN.js"></script>
	<script charset="utf-8" src="/Public/kindeditor-4.1.7/plugins/code/prettify.js"></script>
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/<?php echo MODULE_PATH;?>/View/Public/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="href="/<?php echo MODULE_PATH;?>/img/favicon/favicon.png">
</head>

<body>
<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="/admin.php ">动态语言研究会智能管理后台<span class="bold"></span></a></h1>
            <p class="meta">[本项目基于Thinkphp开发]</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">
			
        </div>

        <!-- Data section -->

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">导航</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
        <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 动态资讯<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					<ul>
						<li><a href="/admin.php/Article/listByCid/cid/2">管理</a></li>
						<li><a href="/admin.php/Article/addByCid/cid/2">新建</a></li>
					</ul>
				</li>
				<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 会员风采<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					<ul>
						<li><a href="/admin.php/Article/listByCid/cid/4">管理</a></li>
						<li><a href="/admin.php/Article/addByCid/cid/4">新建</a></li>
					</ul>
				</li>
				 <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 研究会议<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					<ul>
						<li><a href="/admin.php/Article/listByCid/cid/5">管理</a></li>
						<li><a href="/admin.php/Article/addByCid/cid/5">新建</a></li>
					</ul>
				</li>
				 <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 模糊语言著作<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					<ul>
						<li><a href="/admin.php/Article/listByCid/cid/6">管理</a></li>
						<li><a href="/admin.php/Article/addByCid/cid/6">新建</a></li>
					</ul>
				</li>
				 <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> 模糊语言论文<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
					<ul>
						<li><a href="/admin.php/Article/listByCid/cid/7">管理</a></li>
						<li><a href="/admin.php/Article/addByCid/cid/7">新建</a></li>
					</ul>
				</li>
  <!--        
          <li><hr /></li>
          <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Admin<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/admin.php/Admin/all">管理</a></li>
<li><a href="/admin.php/Admin/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Article<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/admin.php/Article/all">管理</a></li>
<li><a href="/admin.php/Article/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Class<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/admin.php/Class/all">管理</a></li>
<li><a href="/admin.php/Class/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Page<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/admin.php/Page/all">管理</a></li>
<li><a href="/admin.php/Page/add">新建</a></li>
</ul>
</li>
-->
        </ul>
    </div>
    <!-- Sidebar ends -->
  	<!-- Main bar -->
	<div class="mainbar">
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : '/Public/kindeditor-4.1.7/plugins/code/prettify.css',
				uploadJson : '/Public/kindeditor-4.1.7/php/upload_json.php',
				fileManagerJson : '/Public/kindeditor-4.1.7/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
<div class="container ">
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-head">
			  <div class="pull-left" height="80">
			  新建文章			  </div>
			  <div class="widget-icons pull-right">
				<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
				<a href="#" class="wclose"><i class="icon-remove"></i></a>
			  </div>  
			  <div class="clearfix"></div>
			</div>  
			<div class="widget-content" >
			<div class="padd">
				<div class="form quick-post">
							  <div class="form-horizontal">                        
								  <div class="form-group">
									<form class="form-horizontal" method="post" enctype="multipart/form-data">
									<input type="hidden" name="id" id="id" value="<?php echo ($article["id"]); ?>" />
									<input type="hidden" name="class_id" id="class_id" value="<?php echo ($article["class_id"]); ?>" />
	<div class="form-group">
		<label class="col-md-2 control-label" for="title">标题</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="标题" name="title" id="title" value="<?php echo ($article["title"]); ?>"/>
		</div>
	</div>	
	<div class="form-group">
		<label class="col-md-2 control-label" for="auther">作者</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="作者" name="auther" id="auther" value="<?php echo ($article["auther"]); ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="title">封面图</label>
		<div class="col-md-6">
			<input type="file" name="lpic" id="lpic" value="" />
			<p><img width="150" height="200" src="<?php echo ($article["lpic"]); ?>"/></p>
		</div>
		
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label" for="description">简要描述</label>
		<div class="col-md-6">
			<input type="text" class="form-control" placeholder="简要描述" value="<?php echo ($article["description"]); ?>" name="description" id="description" />
		</div>
	</div>	
	<div class="form-group">
		<label class="col-md-2 control-label" for="content">内容</label>
		<div class="col-md-10">
			<textarea name="content" id="content" style="width:700px;height:600px;visibility:hidden;" value="">
				<?php echo ($article["content"]); ?>
			</textarea>
		</div>
	</div>	
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" value="提交" class="btn btn-default" />
		</div>
	</div>
</form>								  </div>              
							  </div>
				</div><!--end  paddad-->
			</div>
		</div>	
		</div>	
	</div>
</div>
</div>
	</div>
</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

<!-- JS -->

<script src="/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->


<!-- jQuery Notification - Noty -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="/<?php echo MODULE_PATH;?>/View/Public/js/sparklines.js"></script> <!-- Sparklines -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/filter.js"></script> <!-- Filter for support page -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/custom.js"></script> <!-- Custom codes -->
<script src="/<?php echo MODULE_PATH;?>/View/Public/js/charts.js"></script> <!-- Charts & Graphs -->


</body>
</html>
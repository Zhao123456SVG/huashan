<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理系统</title>
<link rel="stylesheet" href="/qlgw/Public/css/style.css">
<link rel="stylesheet" href="/qlgw/Public/css/jquery.wysiwyg.old-school.css">

<!-- jQuery AND jQueryUI -->
<script type="text/javascript" src="/qlgw/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/qlgw/Public/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/qlgw/Public/js/min.js"></script>
<!--<script type="text/javascript" src="js/index.js"></script>-->
<script type="text/javascript" src="/qlgw/Public/js/main.js"></script>
<link rel="stylesheet" href="/qlgw/Public/css/style2.css">

</head>
<body class="modal white">


<!--     内容      -->
<div id="content" class="white" >
		<div class="bloc" style="height:400px;">
				<div class="title">新增分类<a class="toggle"></a></div>
				<div class="content">
						<form action="/qlgw/index.php/Admin/Index/one_menu_add_y" method="post">
						<div class="input" style="300px;">
								<label for="file">标题</label>
								<input type="text" name="procuct" id="input1">
						</div>
						<!-- <div class="input textarea">
								<label for="textarea1">描述</label>
								<textarea name="text" id="textarea1" rows="7" cols="4"></textarea>
						</div>
						<div class="input">
								<label for="file">促销图片</label>
								<div class="uploader" id="uniform-file">
										<input type="file" id="file" size="20" style="opacity: 0;">
										<span class="filename"></span><span class="action">请选择图片</span></div>
						</div> -->
						<div class="submit">
								<input type="submit" value="确定">
						</div>
					    </form>
				</div>
		</div>
		
</div>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>
</html>\
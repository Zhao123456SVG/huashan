<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理系统</title>
<link rel="stylesheet" href="/qlgw/Public/css/style.css">
<link rel="stylesheet" href="/qlgw/Public/css/jquery.wysiwyg.old-school.css">

<!-- jQuery AND jQueryUI -->
<script type="text/javascript" src="/qlgw/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/qlgw/Public//js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/qlgw/Public/js/min.js"></script>
<!--<script type="text/javascript" src="js/index.js"></script>-->
<script type="text/javascript" src="/qlgw/Public/js/main.js"></script>
<link rel="stylesheet" href="/qlgw/Public/css/style2.css">

</head>
<body>
<div class="submit">
			<a href="../promotionEdit.html" class="zoombox w700 h500"><input type="submit" value="确定"></a>
</div>

<!--     内容      -->
<div id="content" class="white">
		<h1><img src="/qlgw/Public/images/posts.png" alt="">修改密码</h1>
		
		
		<div class="bloc">
				<div class="title">修改密码<a class="toggle"></a></div>
				<div class="content">
						<form action="/qlgw/index.php/Admin/Index/admin_update" method="post" enctype="multipart/form-data">
						<div class="input">
								<label for="file">用户名</label>
								<input type="text" name="username" id="input1" value="<?php echo ($res["username"]); ?>">
						</div>
						<div class="input">
								<label for="file">密码</label>
								<input type="text" name="password" id="input1" value="<?php echo ($res["password"]); ?>">
						</div>

						<input type="hidden" value="<?php echo ($res["id"]); ?>" name="fid" />
						<div class="submit">
								<input type="submit" value="确定">
						</div>
					    </form>
				</div>
		</div>
</div>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>
</html>
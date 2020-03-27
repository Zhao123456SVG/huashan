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
<script type="text/javascript" src="/qlgw/Public/js/main.js"></script>
<link rel="stylesheet" href="/qlgw/Public/css/style2.css">
<!--<script type="text/javascript" src="js/index.js"></script>-->
</head>

<body>

<!--     内容      -->
<div id="content" class="white">
		<div class="bloc left">
			<div class="title"> 登陆信息 <a href="http://www.grafikart.fr/demo/coreadmin/index.php?#" class="toggle"></a></div>
				<div class="content">
						<div>
								<table class="noalt">
										<thead>
												<tr>
														<th colspan="2"><em>Stefan Salvatore</em></th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td><h6>用户角色：超级管理员</h6></td>
												</tr>
												<tr>
														<td><h6>上次登录时间：<?php echo ($menu); ?></h6></td>
												</tr>
										</tbody>
								</table>
						</div>
						<div class="cb"></div>
				</div>
		</div>

		
</div>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>
</html>
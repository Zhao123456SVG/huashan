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
<!--    顶部   -->
<div id="head">
		<div class="left"> <a class="button profile"><img src="images/huser.png" alt=""></a> Hi, <a><?php echo ($username); ?></a>&nbsp;&nbsp;&nbsp;<a href="/qlgw/index.php/Admin/Index/logout">退出</a>
		</div>
</div>

</body>
</html>
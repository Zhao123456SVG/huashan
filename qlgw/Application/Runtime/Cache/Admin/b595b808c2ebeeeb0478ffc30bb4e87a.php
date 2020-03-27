<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>钱浪官网</title>
 <meta name="keywords" content="">
<meta name="description" content="">

<link rel="stylesheet" type="text/css"  href="/qlgw/Public/css/style3.css">	

<style type="text/css">
	html,body{
		width: 100%;
		height: 100%;
	}
</style>
 </head>
<body>
	<!-- <div class="ld_header">
		<div class="ld_header_in">
			<div class="ld_logo">
				<a href="/"><img src="/qlgw/Public/images/ld_logo.png" alt="蒲城县地名公共服务网"></a>
			</div>
	    </div>
	</div> -->
	<div class="ldL_con">
		<div class="ldL_con_in">
			<div class="ld_form">
				<form id="login-form"  method="post" action="/qlgw/index.php/Admin/Index/login">
					<h3 class="form_title">管理员登录</h3>
					<p>
						<input type="text" name="username" id="userName"/>
					</p>
					<p>
						<input type="password" id="password" name="password" class="ld_pass"/>
					</p>
					
					<div class="ld_login">
						<button class="ld_login_in" id="bt-login">马上登录</button>
						<div id="login-msg"></div>
						 
					</div>
					
				</form>
			</div>
		</div>
		
	</div>

 </body>
</html>
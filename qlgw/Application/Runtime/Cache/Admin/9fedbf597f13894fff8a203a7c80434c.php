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
		<h1><img src="/qlgw/Public/images/posts.png" alt="">公司简介管理</h1>
		<div class="bloc">
				<div class="title"> 操作 <a class="toggle"></a></div>
				<div class="content dashboard">
						<div class="center" style="display: block; width: auto;"> 
						 <a href="/qlgw/index.php/Admin/Index/gsjj_add" class="shortcut zoombox w500 h380"> <img src="/qlgw/Public/images/glyph-add.png" alt="" width="48" height="48"> 添加产品分类 </a> 
								<div class="cb"></div>

				</div>
		</div>
		
		<div class="bloc">
				<div class="title"> 分类信息 <a class="toggle"></a></div>
				<div class="content">
						<table>
								<thead>
										<tr>
												<th>分类ID</th>
												<th>标题</th>		
												<th style="width:15%;">分类图片</th>
												<th>分类内容</th>			
												<th>操作</th>
										</tr>
								</thead>
								<tbody>
									<?php if(is_array($gsjj)): foreach($gsjj as $key=>$v): ?><tr>
												
												<td><?php echo ($v["id"]); ?></td>
												<td><?php echo ($v["title"]); ?></td>
												<td><img src="/qlgw/Public/<?php echo ($v["image"]); ?>" style="width:30%;height:50%;" /></td>
											
												<td><?php echo ($v["content"]); ?></td>
												<td>
												<a href="/qlgw/index.php/Admin/Index/gsjj_update?id=<?php echo ($v["id"]); ?>" title="修改">
												<img src="/qlgw/Public/images/edit.png" alt=""></a>
												<a href="/qlgw/index.php/Admin/Index/gsjj_add_del?id=<?php echo ($v["id"]); ?>" title="删除">
												<img src="/qlgw/Public/images/delete.png" alt=""></a>
												</td>
										</tr><?php endforeach; endif; ?>
								</tbody>
						</table>
						<!-- <div class="left input">
            <a class="button">新增品牌</a>
        </div>-->
						<!-- <div class="pagination"> <a href="http://www.grafikart.fr/demo/coreadmin/index.php?p=table#" class="prev">«</a> <a href="http://www.grafikart.fr/demo/coreadmin/index.php?p=table#">1</a> <a href="http://www.grafikart.fr/demo/coreadmin/index.php?p=table#" class="current">2</a> ... <a href="http://www.grafikart.fr/demo/coreadmin/index.php?p=table#">21</a> <a href="http://www.grafikart.fr/demo/coreadmin/index.php?p=table#">22</a> <a href="http://www.grafikart.fr/demo/coreadmin/index.php?p=table#" class="next">»</a> </div> -->
				</div>
		</div>
</div>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
</body>
</html>
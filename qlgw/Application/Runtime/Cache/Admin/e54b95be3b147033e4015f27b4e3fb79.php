<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理系统</title>
<link rel="stylesheet" href="/Public/css/style.css">
<link rel="stylesheet" href="/Public/css/jquery.wysiwyg.old-school.css">

<!-- jQuery AND jQueryUI -->
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public//js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/Public/js/min.js"></script>
<!--<script type="text/javascript" src="js/index.js"></script>-->
<script type="text/javascript" src="/Public/js/main.js"></script>
<link rel="stylesheet" href="/Public/css/style2.css">

</head>
<body>
<div class="submit">
			<a href="../promotionEdit.html" class="zoombox w700 h500"><input type="submit" value="确定"></a>
</div>

<!--     内容      -->
<div id="content" class="white">
		<h1><img src="/Public/images/posts.png" alt="">首页列表管理</h1>
		<div class="bloc">
				<div class="title"> 操作 <a class="toggle"></a></div>
				<div class="content dashboard">
						<div class="center" style="display: block; width: auto;"> 
						 <a href="/index.php/Admin/Index/sylb_add" class="shortcut zoombox w500 h380"> <img src="/Public/images/glyph-add.png" alt="" width="48" height="48"> 添加产品分类 </a> 
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
												<th>分类标题</th>
												<th>分类内容</th>
												<th style="width:15%;">分类图片</th>
												<th style="width:15%;">分类图片</th>
												<th style="width:15%;">分类图片</th>
												<th>操作</th>
										</tr>
								</thead>
								<tbody>
									<?php if(is_array($sylb)): foreach($sylb as $key=>$v): ?><tr>
												
												<td><?php echo ($v["id"]); ?></td>
												<td><?php echo ($v["title"]); ?></td>
												<td><?php echo ($v["content"]); ?></td>
												<td><img src="/Public/<?php echo ($v["img1"]); ?>" style="width:30%;height:50%;" /></td>
												<td><img src="/Public/<?php echo ($v["img2"]); ?>" style="width:30%;height:50%;" /></td>
												<td><img src="/Public/<?php echo ($v["img3"]); ?>" style="width:30%;height:50%;" /></td>
												<td>
												
												<a href="/index.php/Admin/Index/sylb_update?id=<?php echo ($v["id"]); ?>" title="修改">
												<img src="/Public/images/edit.png" alt=""></a>
												<a href="/index.php/Admin/Index/sylb_add_del?id=<?php echo ($v["id"]); ?>" title="删除">
												<img src="/Public/images/delete.png" alt=""></a>
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
<!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="
	../../CSS/MainPage.css">
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<div id="Head">
		<img src="../../image/MyBlog.png"  width="400">
		<div class="Set">
			<a class="A" href="#">设置
			</a>
			<ul class="Menu">
				<li><a href="#">夜间模式</a></li>
				<li><a href="http://localhost/CI/index.php/BlogCtrl/PageFour">账号设置</a></li>
				<li><a href="http://localhost/CI/index.php/BlogCtrl/Quit">退出登入</a></li>
			</ul>
		</div>
	</div><!--head logo  设置-->
	<div id="Class">
		<ul class="Class-list">
			<li><a class="MainPage" href="#">首页</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageTwo">写博客</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageThree">查看博客</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageFour">个人主页</a></li>
		</ul>

	</div><!--class 首页 写博客 查看 个人主页-->
	<div id="Content">
		<div class="Recommend">
			<h1>推荐</h1>
			<ul>
				<li>35个Java代码性能优化总结</li>
				<li>Android解析ClassLOader(一) Java中的ClassLoader</li>
				<li>深入了解WPF DisPatcher的工作原理(PushFrame部分)</li>
				<li>C#泛型入门类、泛型集合、泛型方法、泛型约束、泛型委托</li>
			</ul>
		</div><!--推荐-->
		<div class="TopLine">
			<h1>头条</h1>
			<ul>
				<li>机器学习系列直播--使用对抗神经网络(GANs)生成锚</li>
				<li>90个PHP常用接口数据过滤的方法</li>
				<li>疯狂java笔记之Java的内存与回收</li>
			</ul>
		</div><!--头条-->
		<div class="Questions">
			<h1>问答</h1>
			<ul>
				<li>python使用urllib2批量下载文件，遇到校验怎么办?</li>
				<li>服务器提供关于微信小程序接口问题</li>
				<li>apache的登入窗口如何设置文字描述?</li>
			</ul>
		</div><!--问答-->
		<div class="Forum">
			<h1>论坛</h1>
			<ul>
				<li>求一个生成1对的Oracle SQL</li>
				<li>求助.net链接SQL后如何计算库存和总价值的问题</li>
				<li>SQL触发器发短信方案</li>
				<li>同表中求字段合并SQL语句</li>
				<li>
					SSRS结构问题
				</li>
			</ul>
		</div><!--论坛-->
	</div><!--content 推荐!!!-->
	<div id="Person"><!--个人信息-->
		<div>
			<img src="../../image/user1.png" title="<?php echo $name ;?>" width="100">
		</div>
		<?php 
		echo  "<p>用户名:".$name."</p>";
		?>

	</div>
</body>
<script type="text/javascript">
	$(function()
	{


	})
</script>
</html>
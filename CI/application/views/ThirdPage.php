<!DOCTYPE html>
<html>
<head>
	<title>我的博客</title>
	<meta charset="utf-8">
</head>
<style type="text/css">
*{
	margin: 0;
	padding:0;

}
body
{
	margin: 0;
	background:url(../../image/9.jpg) no-repeat;
	background-size: 100%;
}
img
{
	border:0;
}
a{

	text-decoration: none;
}
ul
{
	list-style: none;
}
#Head
{
	width: 1300px;
	height: 100px;
	line-height: 100px;
	margin :0 auto;
	margin-bottom: 10px;

}
#Head img
{
	margin-top: 10px;
	float: left;
	
}
#Head .Set
{
	width: 100px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	float: right;
	margin-top: 10px;
}
#Head a
{
	display: block;
	width: 100px;
	height: 32px;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
	background-color: rgba(255,255,255,0.2);
	border:1px solid rgba(255,255,255,0.2);
	border-radius: 10px;

}
#Head ul
{
	display: none;
	width: 100px;
	border :1px solid rgba(255,255,255,0.2);
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	background-color: rgba(255,255,255,0.2);


}
#Head ul li
{
	height: 30px;
	line-height: 30px;
	text-align: center;
	font-family: "Comic Sans MS";
	font-size: 14px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;

}
#Head .Set .Menu li a
{
	display: inline;
	border:none;
	background-color: transparent;

}
#Head .Set a:hover,#Head .Set a:focus
{
	border-bottom-left-radius: 1px;
	border-bottom-right-radius: 1px;

}
#Head a:hover+.Menu
{
	display: block;
}
#Head a:focus+.Menu
{
	display: block;
}
#Class
{

	width: 1000px;
	height: 60px;
	margin: 0 auto;
	background-color: rgba(255,255,255,0.2);
	line-height: 60px;


}
#Class .Class-list li
{
	float:left;
	height: 60px;
	width: 150px;
	line-height: 60px;
	text-align: center;

}
#Class .Class-list li a
{

	display: block;
	width: 150px;
	height: 60;
	line-height: 60px;
	text-align: center;
	font-family: "Comic Sans MS";
	font-size: 18px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
}
#Class .Class-list li a:hover
{
	display: block;
	background-color: rgb(180,180,180);
	color: white;

}
#Class .Class-list li a:active
{
	display: block;
	background-color: white;
	color: rgb(150,150,150);
}
#Class .Class-list li .MainPage
{
	display: block;
	background-color: rgb(180,180,180);
	color: white;
}
#Person
{
	width: 200px;
	height: 200px;
	background-color: rgba(255,255,255,0.2);
	border:1px solid rgba(255,255,255,0.2);
	position: absolute;
	top: 200px;
	left: 30px;
	border-radius: 10px;
	text-align: center;

}
#Person p
{   font-family: "Comic Sans MS";
font-size: 15px;
color: rgb(150,150,150);
font-weight: normal;
font-style: normal;
margin-top:20px;
}
#Person div
{
	width: 100px;
	height: 100px;
	margin-top:20px;
	margin-left: 50px;
}

#Content
{
	background: url(../../image/chakan.png) no-repeat;
	background-position: 20px 20px;
	position: relative;
	top: 30px;
	margin-top: 10px;
	height: 800px;
	margin: 0 auto;
	background-color: rgba(255,255,255,0.2);
	width: 1000px;
	text-align: center;


}
#Content p
{
	font-family: "Comic Sans MS";
	font-size: 18px;
	color: rgb(150,150,150);
	font-weight: normal;
	font-style: normal;	
	margin-top: 20px;

}
#Content div
{
	margin-left: 200px;
	width: 600px;
	height: 70px;
	border:1px dotted #ccc;
	border-radius: 10px;
	margin-top: 10px;
	text-align: left;

}
#Content div .Text
{
	display: block;
	width: 390px;
	height: 20px;
	font-family: "Comic Sans MS";
	font-size: 18px;
	color: rgb(150,150,150);
	font-weight: normal;
	font-style: normal;	
	margin:6px;

}
#Content div .Text:hover
{

	display: block;
	width: 390px;
	height: 20px;
	font-family: "Comic Sans MS";
	font-size: 18px;
	color:white;
	font-weight: normal;
	font-style: normal;	
	margin:6px;
	text-decoration: underline;


}
#Content div .Text:active
{
	display: block;
	width: 390px;
	height: 20px;
	font-family: "Comic Sans MS";
	font-size: 18px;
	color:rgb(180,180,180);
	font-weight: normal;
	font-style: normal;	
	margin:6px;
	text-decoration: underline;

}
#Content div .InputButton
{  
	text-decoration: none;
	display: block;
	float: right;
	width: 50px;
	height: 20px;
	border:1px solid rgba(255,255,255,0.3);
	background-color: rgba(255,255,255,0.3);
	border-radius: 10px;
	margin:10px;
	text-align: center;
	line-height: 20px;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: white;
	font-weight: normal;
	font-style: normal;	

}
#Content div .InputButton:hover
{
	text-decoration: none;
	display: block;
	float: right;
	width: 50px;
	height: 20px;
	border:1px solid white;
	background-color: white;
	border-radius: 10px;
	margin:10px;
	text-align: center;
	line-height: 20px;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: normal;
	font-style: normal;	
}
#Content div .InputButton:active
{
	text-decoration: none;
	display: block;
	float: right;
	width: 50px;
	height: 20px;
	border:1px solid transparent;
	background-color: transparent;
	border-radius: 10px;
	margin:10px;
	text-align: center;
	line-height: 20px;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: white;
	font-weight: normal;
	font-style: normal;	
}
</style>
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
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageOne">首页</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageTwo">写博客</a></li>
			<li><a class="MainPage" href="#">查看博客</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageFour">个人主页</a></li>
		</ul>

	</div><!--class 首页 写博客 查看 个人主页-->
	<div id="Content">
		<p>我的博客:</p>
		<?php 
		
		$i=0;

		foreach ($title as $value) {
			echo "<div>
			<a class='Text' title='点击查看' href='http://localhost/CI/index.php/BlogCtrl/LookUp?title=".$value."&content=".$content[$i]."'>标题:".$value."</a>  

			<a class='InputButton' href='http://localhost/CI/index.php/BlogCtrl/LookUp?title=".$value."&content=".$content[$i]."'>查看</a>
			<a class='InputButton' href='http://localhost/CI/index.php/BlogCtrl/DeleteBlog?title=".$value."&content=".$content[$i]."'>删除</a>

			<a class='InputButton' href='http://localhost/CI/index.php/BlogCtrl/ChangeBlog?title=".$value."&content=".$content[$i]."'>修改</a>
			</div>";
			$i++;
		}
		?>
	</div><!--content-->

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



</script>
</html>
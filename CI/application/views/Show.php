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
#back
{
	width:100px;
	height: 50px;
	text-align: center;
	line-height: 50px;
	position: absolute;
	top: 150px;
	left: 30px;
}
#back a
{
	display: block;
	text-align: center;
	width: 100px;
	height: 32px;
	line-height: 32px;
	border-radius: 20px;
	border:1px solid rgba(255,255,255,0.4);
	background-color: rgba(255,255,255,0.4);
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
}
#back a:hover
{
	display: block;
	text-align: center;
	width: 100px;
	height: 32px;
	line-height: 32px;
	border-radius: 20px;
	border:1px solid rgba(255,255,255,0.2);
	background-color: rgba(255,255,255,0.2);
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: white;
	font-weight: bold;
	font-style: normal;
	
}
#back a:active
{
	display: block;
	text-align: center;
	width: 100px;
	height: 32px;
	line-height: 32px;
	border-radius: 20px;
	border:1px solid white;
	background-color: white;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
}
#title
{
	width:500px;
	height: 50px;
	margin:0 auto;
	border:1px solid rgba(255,255,255,0.2);
	background-color:rgba(255,255,255,0.2);
	border-radius: 10px;
	text-align: center;
	line-height: 50px;
	margin-top: 50px;





}
#title p
{
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
}
#content
{
	margin:0 auto;
	width:1000px;
	height:1000px;
	border:1px solid rgba(255,255,255,0.2);
	background-color: rgba(255,255,255,0.2);
	border-radius: 10px;
	position: relative;
	top: 40px;
}
#content p
{
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
	margin-top: 10px;
	margin-left: 10px;
	margin-right: 10px;
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
	<div id="back"><a href="http://localhost/CI/index.php/BlogCtrl/PageThree">返回</a>
	</div>
	<div id="title">
		<?php 
		echo "<p>标题:".$title."</p>";
		?>
	</div>
	<div id="content">

		<?php 
		echo "<p>".$content."</p>";
		?>
	</div>

</body>
</html>
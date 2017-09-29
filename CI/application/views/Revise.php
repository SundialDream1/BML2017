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
#Body
{
	width: 1000px;
	height: 1000px;
	border:1px solid rgba(255,255,255,0.2);
	background-color:rgba(255,255,255,0.2);
	border-radius: 20px;
	text-align: center;
	margin: 0 auto;
	position: relative;
	top: 30px;


}
#Body .Title
{
	display: block;
	width: 800px;
	height: 40px;
	line-height: 40px;
	margin-top: 40px;
	margin-left: 100px;


}
#Body .Title input
{
	outline: none;
	width: 650px;
	height: 30px;
	float: right;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
	padding-left: 10px;
	border:1px solid white;
	border-radius: 5px;
}
#Body .Title input:hover
{
	outline: none;
	width: 650px;
	height: 30px;
	float: right;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
	padding-left: 10px;
	border:1px solid rgb(150,150,150);
	border-radius: 5px;
}
#Body .Title input:focus
{
	outline: none;
	width: 650px;
	height: 30px;
	float: right;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
	padding-left: 10px;
	border:1px solid rgb(150,150,150);
	border-radius: 5px;
}
#Body .Title p
{
	float: left;
	width: 80px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
}
#Body .Content
{
	display: block;
	width: 800px;
	height: 600px;
	line-height: 40px;
	margin-top: 20px;
	margin-left: 95px;

}
#Body .Content textarea
{
	width: 800px;
	height: 500px;
	margin-top: 30px;
	outline: none;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
	padding: 5px;
}
#Body .Content p
{
	width: 800px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
}
#Body .OptionBut
{

	width: 400px;
	height: 32px;
	margin-top: 40px;
	margin-left:270px;


}
#Body .OptionBut input
{
	text-align: center;
	outline: none;
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
	margin-left: 50px;
}
#Body .OptionBut input:hover
{
	text-align: center;
	outline: none;
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
#Body .OptionBut input:active
{
	text-align: center;
	outline: none;
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
	<div id="Body">
		<form id="ReviseForm" action="#" method="post">
			<div class="Title">

				<p>标题:</p>
				<input id="TitleText" type="text" name="TitleText" value="<?php echo $title ?>"> 
			</div>
			<div class="Content">
				<p>博客内容:</p>
				<textarea id="TextArea" form="ReviseForm" name="TextArea">
					<?php echo $content ?>
				</textarea>
			</div>
			<div class="OptionBut">
				<input type="submit" name="Cancel" value="取消">
				<input type="submit" name="Submit" value="修改并发表" onclick="Submit1()">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function Submit1()
	{
		var form=document.getElementById('ReviseForm');
		var title=document.getElementById('TitleText');
		var content=document.getElementById('TextArea');
		if(title.value&&content.value)
            form.action="http://localhost/CI/index.php/BlogCtrl/UpdateBlog?title=<?php echo $title?>";
		else
		{
			if(title.value==null)
			{
				alert('未输入标题!');
			}
			else if(content.value=null)
			{
				alert('未输入内容!');
			}
		}
	}

</script>
</html>
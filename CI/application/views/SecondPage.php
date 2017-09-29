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
#Content
{
	position: relative;
	top: 30px;
	margin-top: 10px;
	height: 800px;
	margin: 0 auto;
	background-color: rgba(255,255,255,0.2);
	width: 1000px;
	text-align: center;
}
#Content .ArticleTitle
{

	width:800px;
	height: 30px;
	line-height: 40px;
	position: relative;
	top: 30px;
	margin:0 auto;




}
#Content .ArticleTitle label
{

	float:left;
	width: 100px;
	height: 30px;
	line-height: 30px;
	background-color: rgba(255,255,255,0.5);
	border:1px solid rgba(255,255,255,0.5);
	border-radius: 5px;
	font-family: "Comic Sans MS";
	font-size: 14px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;


}
#Content .ArticleTitle input
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
	border:1px solid rgb(180,180,180);
	border-radius: 5px;


} 
#Content .ArticleTitle input:hover
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
#Content .ArticleTitle input:focus
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
#Content .ArticleContent
{
	position: relative;
	top: 60px;
	width: 800px;
	height:600px;
	margin: 0 auto;


}
#Content .ArticleContent p
{
	font-family: "Comic Sans MS";
	font-size: 15px;
	color: rgb(150,150,150);
	font-weight: bold;
	font-style: normal;
	float: left;
	margin-left: -100px;


}
#Content .ArticleContent textarea
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
#Content .ButtonOption
{
	display: block;
	width: 800px;
	margin-top: 100px;
	height: 40px;
	line-height: 40px;
	margin-left:250px;

}
#Content .ButtonOption .opbut
{
	border:1px solid rgba(255,255,255,0.4);
	outline: none;
	background-color: rgba(255,255,255,0.4);
	color: rgb(180,180,180);
	font-family: "Comic Sans MS";
	font-size: 14px;
	color: rgb(150,150,150);
	font-weight:normal;
	font-style: normal;
	width: 100px;
	height: 32px;
	margin-left: 50px;
	border-radius: 20px;
	float: left;

}
#Content .ButtonOption .opbut:hover
{
	border:1px solid white;
	background-color: white;
	outline: none;
	width: 100px;
	height: 32px;
	margin-left: 50px;
	border-radius: 20px;
	color: rgb(150,150,150);
	float: left;
}
#Content .ButtonOption .opbut:active
{

	border:1px solid transparent;
	background-color: transparent;
	color:rgb(150,150,150);
	outline: none;
	width: 100px;
	height: 32px;
	margin-left: 50px;
	float: left;
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
			<li><a class="MainPage" href="#">写博客</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageThree">查看博客</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageFour">个人主页</a></li>
		</ul>

	</div><!--class 首页 写博客 查看 个人主页-->
	<div id="Content">
		<form id="BlogForm" action="#" method="post">
			<div class="ArticleTitle">
				<label>
					文章标题:
				</label>
				<input type="text" name="Title" id="Title">
			</div>
			<div class="ArticleContent">
				<p>文章内容:</p>
				<textarea form="BlogForm" name="ArticleContent" id="TextContent">

				</textarea>
			</div>
			<div class="ButtonOption">
				<input class="Cancel1 opbut" type="button" name="Cancel" value="取消" onclick="Cancel1()">
				<input class="Reset1 opbut" type="button" name="Reset" value="重写文章" onclick="Reset1()">
				<input class="Submit1 opbut" type="submit" name="Submit"  value="保存并发表" onclick="Submit1()">

			</div><!--button-->
		</form>
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
	function Cancel1()
	{

		var title=document.getElementById('Title');
		var content=document.getElementById('TextContent');
		title.value=null;
		content.value=null;


	}
	function Reset1()
	{
		var content=document.getElementById('TextContent');
		content.value=null;
	}
	function Submit1()
	{
		var title=document.getElementById('Title');
		var content=document.getElementById('TextContent');
		var form =document.getElementById('BlogForm');
		if(title.value&&content.value)
			form.action="http://localhost/CI/index.php/BlogCtrl/Report";
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
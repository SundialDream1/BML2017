<!DOCTYPE html>
<html>
<head>
	<title>我的博客</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../CSS/FourthPage.css">
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
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageOne">首页</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageTwo">写博客</a></li>
			<li><a href="http://localhost/CI/index.php/BlogCtrl/PageThree">查看博客</a></li>
			<li><a class="MainPage" href="#">个人主页</a></li>
		</ul>

	</div><!--class 首页 写博客 查看 个人主页-->
	<div id="Content">
		<img src="../../image/user1.png" title="<?php echo $name ;?>" width="150">

		<?php
		echo "<p>用户名:".$name."</p>";
		echo "<p>密码:".$password."</p>";
		?>

		<input type="button" name="Button" class="Button1" value="修改用户">
		<div class="Change">
			<form id="ChangeForm" action="#" method="post">
				<div>
					用户名:<input type="text" name="ChangeName" id="ChangeName">
				</div>
				<div>
					密码:<input type="password" name="ChangePassword" id="ChangePassword">
				</div>
				<div>
					重新输入:<input type="password" name="ChangePassword1" id="ChangePassword1">
				</div>
				<div class="butdiv">
					<input type="button" name="button" class="but" value="取消">
					<input type="submit" name="submitNew" class="sub" value="确定修改" onclick ="OnClick()">
				</div>
			</form>

		</div>
		<div class="Button"> 
			<form action="#" method="post" id="Quit">
				<input type="submit" name="logout" value="注销用户" onclick="Logout()">
				<input type="submit" name="quit" value="退出登入" onclick="Quit()">
			</form>
		</div>
	</div><!--content-->
</body>
<script type="text/javascript">
	$(function(){
		$("#Content .Button1").click(function()
		{
			$("#Content .Change").slideDown("slow");

			$("#Content .Change .butdiv .but").click(function(){

				$("#Content .Change").slideUp("slow");

			});
		});
	});
	function OnClick()
	{
		var form=document.getElementById("ChangeForm");
		var user=document.getElementById("ChangeName");
		var password=document.getElementById("ChangePassword");
		var password1=document.getElementById("ChangePassword1");
		var R=/^[a-zA-Z0-9/*/_\u4e00-\u9fa5]{2,20}$/;
		var R2=/^[/!/,/*0-9A-Za-z]{6,20}$/;
		if(R.test(user.value))
		{
			if(R2.test(password.value)&&R2.test(password1.value))
			{

				if(password.value == password1.value)
				{

					form.action="http://localhost/CI/index.php/BlogCtrl/ChangeUser";
				}
				else
				{
					alert("两次密码输入不一致!");
					password1.value=null;

				}
			}
			else
			{
				alert("输入有误,密码只能输入英文,数字,以及*号!号,号且长度小于20的字符串!");
				password.value=null;
				password1.value=null;
			}
		}
		else
		{
			alert("输入有误,用户名只能输入汉字,英文,数字,以及*号下划线且长度小于20的字符串!");
			user.value=null;
		}


	}
	function Quit()
	{

		var form = document.getElementById('Quit');
		form.action="http://localhost/CI/index.php/BlogCtrl/Quit";


	}
	function Logout()
	{

		var form = document.getElementById('Quit');
		form.action="http://localhost/CI/index.php/BlogCtrl/Logout";	
	}
</script>
</html>
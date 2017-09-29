<!DOCTYPE html>
<html>
<head>
	<title>登入框</title>
	<meta charset="utf-8">
	<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../CSS/Dialog.css">
</head>
<body>
	<div>
		<?php
		if($flag==true)
		{
			echo '<script type="text/javascript">alert("用户不存在,或密码错误!");</script>';
		}

		?>
		<?php
		if($judge==true)
		{
			echo '<script type="text/javascript">
			alert("用户已存在!");</script>';
		}
		?>
	</div>
	<div id="Logo">
		<img src="../../image/MyBlog.png"  width="600">
	</div>
	<div id="Dialog"><!--注册块-->
		<div>
			<img src="../../image/user1.png" title="登入">
		</div>
		<input id="Button" type="button" name="Button" value="登入">
	</div>
	<div id="Form"><!--用户注册块-->
		<form id="SubmitForm1" action="#" method="post">
			<div class="Label">
				用户登入:
			</div>
			<div class="Cancel">
				<input class="CancelButton" id="CancelButton" type="button" name="Button" title="取消">
			</div>
			<div>
				<label for="User" class="User">
					用户名:
				</label>
				<input id="UserName" type="text" name="User">
			</div>
			<div>
				<label for="Password" class="Password">
					密码:
				</label>
				<input id="PasswordText" type="password" name="Password">
			</div>
			<input class="Reset" type="reset" name="Reset" value="注册" onclick="OnClick_1()">
			<input class="Submit" id="Submit" type="submit" name="Submit" value="登入" onclick="OnClick()">
		</form>
	</div>
	<div id="Show"><!--注册块-->
		<div class="Label">
			用户注册:
		</div>
		<div class="Back">
			<input id="BackButton" type="button" name="Button" title="返回">
		</div>
		<div class="Register">
			<form id="SubmitForm2" action="#" method="post">
				<div>
					<label class="user">
						用户名:
					</label>

					<input id="User_Enroll" class="User" name="User1" type="text">
				</div>
				<div>
					<label class="password">
						输入密码:
					</label>


					<input id="Password_Enroll"  class="Password" name="Password1" type="password">
				</div>
				<div>
					<label class="repassword">
						再次输入:
					</label>


					<input id="Password_Enroll1" class="Password" name="Password2" type="password">
				</div>
				<input class="Submit1" type="submit" name="Submit1" value="注册" onclick="OnClick2()">
			</form>  
		</div>
	</div>
</body>
<script type="text/javascript">
		$("#Show").hide();//隐藏显示结果块
		function OnClick_1()
		{
			var x=document.getElementById("UserName");
			var y=document.getElementById("PasswordText");
			x.value=null;
			y.value=null;
			$("#Form").hide();
			$("#Show").slideToggle('slow');



		}
	function OnClick()//注册按钮
	{
		var UserName=document.getElementById("UserName");
		var Password=document.getElementById("PasswordText");
    var R=/^[a-zA-Z0-9/*/_\u4e00-\u9fa5]{2,20}$/;//匹配汉字,英文,数字,以及*号下划线且长度小于20的字符串
    if(UserName.value)
    {
    	if(R.test(UserName.value))
    	{
    	var R2=/^[/!/,/*0-9A-Za-z]{6,20}$/;//匹配英文,数字,以及*号!号,号且长度小于20的字符串
    	if(Password.value)
    	{
    		if(R2.test(Password.value))
    		{
    			
    			var x=document.getElementById("SubmitForm1");
    			x.action="http://localhost/CI/index.php/BlogCtrl/Judge";

    		}
    		else
    		{
    			alert("输入有误,密码只能输入英文,数字,以及*号!号,号且长度小于20的字符串!");
    			Password.value=null;
    		}
    	}
    	else

    	{
    		alert("未输入密码!");
    	}
    }
    else
    {
    	alert("输入有误,用户名只能输入汉字,英文,数字,以及*号下划线且长度小于20的字符串!");
    	User.value=null;

    }
}else {
	alert("未输入用户名!")
}
}
function OnClick2()
{
	var user=document.getElementById("User_Enroll");
	var password=document.getElementById("Password_Enroll");
	var password1=document.getElementById("Password_Enroll1");
	var R=/^[a-zA-Z0-9/*/_\u4e00-\u9fa5]{2,20}$/;
	var R2=/^[/!/,/*0-9A-Za-z]{6,20}$/;
	if(R.test(user.value))
	{
		if(R2.test(password.value)&&R2.test(password1.value))
		{
			

			if(password.value == password1.value)
			{

				alert("注册成功,点击确定返回登入!");
				var x=document.getElementById("SubmitForm2");
				x.action="http://localhost/CI/index.php/BlogCtrl/Enroll";


			}
			else
			{
				alert(password1.value+"  "+password.value);
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
$(function() {
		$("#Button").click(function(){//注册和用户注册块的切换
			$("#Dialog").hide();
			$("#Form").slideDown('slow');
		});
		$("#CancelButton").click(function(){//用户注册和注册块的切换
			$("#Form").hide();
			$("#Dialog").slideDown('slow');
			var User=document.getElementById("UserName");
			var Password=document.getElementById("PasswordText");

			User.value=null;
			Password.value=null;
			var PasswordStrength=document.getElementById('PasswordStrength');
			PasswordStrength.innerHTML=null;


		});
		$("#BackButton").click(function(){//显示块和用户注册块的切换

			$("#Show").hide();
			$("#Form").slideDown('slow');
		})
	});
</script>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>McMySkin 注册</title>
<?php include("./includes/header.php") ?>
<link href="css/gh-buttons.css" rel="stylesheet" type="text/css" />

<style type="text/css">
#wrapper #mMain #icon {
  background-image: url(images/signup.png);
  height: 256px;
  width: 256px;
  float: left;
}
#wrapper #mMain #signup {
  height: 432px;
  float: right;
  width: 656px;
}

#wrapper #mMain #signup form #rlabel {
  width: 80px;
  float: left;
  height: 30px;
  padding-top: 5px;
  font-size:14px;
  margin-left:15px;
}
#wrapper #mMain #signup form #rtx {
  width: 500px;
  float: left;
  height: 35px;
}

input[type="text"] {
  width:200px;  
  float:left;
  border:1px solid #999;
}
input[type="password"] {
  width:200px;  
  float: left;
  border:1px solid #999;
}
#wrapper #mMain #signup form .rinfo {
  float:left;
  font-size:13px;
  padding-top: 5px;
  color:#666;
}

</style>

<script type="text/javascript">
function echoerror(id,info){
  document.getElementById("errorspan").innerHTML='<span id="errorspan" style="color:red;">'+info+'</span>';
  document.getElementById(id).style.border='1px solid #900';
  }
function changedup(id){
  document.getElementById(id).style.border='1px solid #999';
}


$(function() { 
$("#submit").click(function() { 
// 处理表单验证和交给后台处理的逻辑 
var imail=$("input#mail").val();
var iusername=$("input#username").val();
var ipassword=$("input#password").val();
var irepassword=$("input#repassword").val();
var icaptcha=$("input#captcha").val();
var returnvalue;

var emptyerror="请检查红框中是否存在没有填写的项目！";


$.post("./do/signup.php", $("#signupform").serialize(),
function(result) {
    var rs = result;

    if(rs.indexOf("error:")!=-1){
        rs=rs.replace("error:","");
        var xiang = new Array();
        xiang=rs.split(":");
        echoerror(xiang[0],xiang[1]);
        return;
    }

    if(rs.indexOf("sucess:")!=-1){
        rs=rs.replace("sucess:","");
        window.location.href=rs;
        return;
    }


    if (rs.indexOf(1) == -1) {
        changedup("mail");
    } else {
        echoerror("mail", emptyerror);
    }

    if (rs.indexOf(2) == -1) {
        changedup("username");
    } else {
        echoerror("username", emptyerror);
    }

    if (rs.indexOf(3) == -1) {
        changedup("password");

    } else {
        echoerror("password", emptyerror);
    }

    if (rs.indexOf(4) == -1) {
        changedup("repassword");
    } else {
        echoerror("repassword", emptyerror);
    }

    if (rs.indexOf(5) == -1) {
        changedup("captcha");
    } else {
        echoerror("captcha", emptyerror);
    }
    
    if(rs.indexOf("1") == -1 && rs.indexOf("2") == -1 && rs.indexOf("3") == -1 &&rs.indexOf("4") == -1 && rs.indexOf("5") == -1){
      if (rs.indexOf(6) != -1) {
        echoerror("repassword","两次输入的密码不同！")
      }
      else{
        changedup("repassword");
        if(rs.indexOf(7) != -1){
          echoerror("captcha","验证码输入错误！")
        }
        else{
          changedup("captcha");
          document.getElementById("errorspan").innerHTML='<span id="errorspan">ERROR!</span>';
        }
        }
      }
});
}); 
}); 
</script>
<?php include("./includes/header2.php") ?>
<!-- 网页之开始 -->
<div id="icon"></div>
<div id="signup">
<h1>注册新帐号</h1>
<hr />
<p><span id="errorspan">您在这里可以创建一个新的McMySkin帐号。</span></p>
<form id="signupform" action="" method="post" name="register">
<div></div>
<div id="rlabel">
电子邮箱：
</div><div id="rtx">
<input id="mail" name="mail" type="text" placeholder="Example: XXX@McMySkin.com" /> 
<span id="mail" class="rinfo">该项用于找回密码与识别</span>
</div>

<div id="rlabel">
用户名：
</div><div id="rtx">
<input id="username" name="username" type="text" placeholder="Example: Jack"/>
<span id="username" class="rinfo">用于登录，请填写需要生效的游戏ID</span>
</div>

<div id="rlabel">
管理密码：
</div><div id="rtx">
<input id="password" name="password" type="password" />  
<span id="password" class="rinfo">请填写登录皮肤管理面板的密码</span>
</div>

<div id="rlabel">
重复密码：
</div><div id="rtx">
<input id="repassword" name="repassword" type="password" /> 
<span id="repassword" class="rinfo">重复上项所输入的密码</span>
</div>

<div id="rlabel">
验证码：
</div><div id="rtx">
<!--在验证码框(如之前没有验证码框请创建)所在的form表单内添加-->
<input style="width:200px;" id="captcha" name="captcha" type="text" size="10" placeholder="单击文本框显示验证码" />
<script src="http://api.yucmedia.com/script/script.js?key=du4z8i225ab5xsueq6c65owv5&inputid=captcha&offtop=0&offleft=0&zbkey=zjsp">
</script>
<div id="captcha" class="rinfo">单击文本框显示验证码</div>
           
</div>
<div id="rlabel"><span style="font-size:14px;"></span></div><div id="rtx">
<p style="font-size:14px;">
</p>
</div>

<div style="padding-left:30px;"><button class="button" type="button" id="submit">提交注册信息</button>
<input type="reset" name="reset" id="button" class="button" value="清空已填信息" /> 
</div>
<p><a href="./index.php" style="margin-left:30px; font-size:15px;">&lt;&lt;&lt; 返回登录</a></p>

</form>
</div>
<?php include("./includes/footer.php") ?>

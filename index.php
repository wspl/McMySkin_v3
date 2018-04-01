<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>McMySkin 主页</title>
<?php include("./includes/header.php") ?>

<?php //随机显示图片
$imgkey=rand(2,9);
//echo $imgkey;
if($imgkey==1){
$img="simple.jpg";$cor="#060";$size=308;}
if($imgkey==2){
$img="1.png";$cor="#06F";$size=308;}
if($imgkey==3){
$img="2.png";$cor="#8A4500";$size=308;}
if($imgkey==4){
$img="3.png";$cor="#060";$size=308;}
if($imgkey==5){
$img="4.png";$cor="#0072C6;";$size=308;}
if($imgkey==6){
$img="5.png";$cor="#990;";$size=288;}
if($imgkey==7){
$img="6.png";$cor="#003;";$size=288;}
if($imgkey==8){
$img="7.png";$cor="#060;";$size=288;}
if($imgkey==9){
$img="8.png";$cor="#303;";$size=288;}

?>

<link href="css/gh-buttons.css" rel="stylesheet" type="text/css" />
<link href="css/signin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#thepic {
	background-image: url(./images/login/<?php echo $img; ?>);
	height: <?php echo $size; ?>px;
	width: 550px;
	color:#06F;
}

#thetext {
	width: 520px;
	height: 130px;
	background-color: <?php echo $cor; ?>;
}
</style>
<script type="text/javascript" src="./javascript/login.js"></script>

<script type="text/javascript">
$(function(){
	if(!+[1,]){
	input("username", "游戏ID或电子邮箱");//s即时input框的ID
	input("password", "123456");//s即时input框的ID
	input("captcha", "单击此处显示验证码");//s即时input框的ID
	}
});

function input(theInput, val) {
	var $input = $("#"+theInput+"");
	var val = val;
	$input.attr({value:val});
	$input.focus(function() {
		if ($input.val() == val) {
			$(this).attr({value:""});
		}
	}).blur(function() {
		if ($input.val() == "") {
			$(this).attr({value:val});
		}
	});
}

</script>
<?php include("./includes/header2.php") ?>
<!-- 网页之开始 -->
<div id="loginleft">
<div id="thepic">
</div>
<div id="thetext" style="padding-left:30px;">
<div style="font-size:24px; color:#FFF; padding-top:10px;">注册McMySkin</div>
<div style="font-size:14px; color:#FFF; ">在Minecraft中尽情享用您自己的皮肤</div>
<div style="padding-left:12px; padding-top:15px;"><div id="regbtn"><a id="regbtntext" href="./signup.php">注册</a></div></div>
</div>
</div>
<div id="loginright">
<img src="images/myskin.png" width="304" height="121" alt="登录" />
<div style="width:320px; margin-top:13px;">
<form id="signupformx" name="form1" method="post" action="">
  <div id="unk" style="*margin-left:10px; _margin-left:10px;"><input type="text" id="username" placeholder="游戏ID或电子邮箱" size="50" /></div>
  <div style="padding-top: 5px; *margin-left:10px; _margin-left:10px;" id="pwk"><input type="password" id="password" placeholder="密码" size="50"  /></div>
  <div style="padding-top: 5px; *margin-left:10px; _margin-left:10px;" id="cpk"><input type="text" id="captcha" placeholder="单击此处显示验证码" size="50"  />
<script src="http://api.yucmedia.com/script/script.js?key=du4z8i225ab5xsueq6c65owv5&inputid=captcha&offtop=0&offleft=0&zbkey=dphp">
</script></div>
  <div style="padding-top:10px; font-size:14px;"><input id="savelogin" type="checkbox"/>
  <label for="savelogin">保持登陆状态</label></div>
  <div style="padding-top:20px; font-size:14px;"><button class="button" type="button" id="submit">登录</button></div>
</form>
<p style="font-size:14px;"><a href="#">无法登录您的账户？</a></p>
<p style="font-size:14px;"><a href="#">您是正版？</a></p>
<p>没有McMySkin账户？<a href="signup.php">立即申请</a></p>
</div>
</div>
<!-- 网页之结束 -->
<?php include("./includes/footer.php") ?>

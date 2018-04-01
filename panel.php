<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>McMySkin 管理中心</title>
<?php include("./includes/header.php") ?>
<style type="text/css">
div#mTop_LOGO {
		width: 400px;
		height: 72px;
		float:left;
		background-image:url(./images/logo_mg.png);
}

#Panel {
	height: 200px;
	width: 900px;
	margin-top: auto;
	margin-right: auto;
	margin-bottom: 50px;
	margin-left: auto;
	padding-top: 10px;
	padding-bottom: 10px;
}
#icons {
	height: 128px;
	width: 128px;
	float: left;
}

#pmn {
	float: left;
	width: 115px;
	height: 158px;
	margin-left: 35px;
	margin-right: 5px;
	text-align: center;
	margin-top: 15px;
	padding-right: 13px;
	border: 1px solid #fff;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;

}

#pmn:hover{
border: 1px solid #FFCF9F;
background-color:#F3EEDA;
box-shadow:0px 0px 30px #EFDDC9;
}

#itext {
	float: left;
	width: 118px;
	height: 30px;
	padding-right:10px;
}

</style>
<?php include("./includes/header2.php") ?>
<!-- 网页之开始 -->
<div style="font-size:15px; margin-top:0px;">
<script language="javaScript"> 
now = new Date();
hour = now.getHours();
if(hour < 6){document.write("凌晨好！")} 
else if (hour < 9){document.write("早上好！")} 
else if (hour < 12){document.write("上午好！")} 
else if (hour < 14){document.write("中午好！")} 
else if (hour < 17){document.write("下午好！")} 
else if (hour < 19){document.write("傍晚好！")} 
else if (hour < 22){document.write("晚上好！")} 
else {document.write("夜里好！")} 
</script>Plqws
</div>
<div id="Panel">

<div id="pmn" onclick="location.href='./panel/skin.php';">
<div id="icons" style="background-image:url(images/panel/skin.png)"></div>
<div id="itext">皮肤管理</div>
</div>


<div id="pmn" onclick="location.href='./panel/cloak.php';">
<div id="icons" style="background-image:url(images/panel/cloak.png)"></div>
<div id="itext">披肩管理</div>
</div>



<div id="pmn" onclick="location.href='./panel/skin.php';">
<div id="icons" style="background-image:url(images/panel/share.png)"></div>
<div id="itext">分享中心</div>
</div>



<div id="pmn" onclick="location.href='./panel/skin.php';">
<div id="icons" style="background-image:url(images/panel/search.png)"></div>
<div id="itext">皮肤搜索</div>
</div>


<div id="pmn" onclick="location.href='./panel/skin.php';">
<div id="icons" style="background-image:url(images/panel/setting.png)"></div>
<div id="itext">个人设置</div>
</div>
</div>
<!-- 网页之结束 -->
<?php include("./includes/footer.php") ?>

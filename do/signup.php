<?php
error_reporting(0);
$mail=$_POST["mail"];
$username=$_POST["username"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$captcha=$_POST["captcha"];
$ierror=0;

if($mail==""){
	echo "1";
	$ierror+=1;
}

if($username==""){
	echo "2";
	$ierror+=1;
}

if($password==""){
	echo "3";
	$ierror+=1;
}

if($repassword==""){
	echo "4";
	$ierror+=1;
}

if($captcha==""){
	echo "5";
	$ierror+=1;
}

if($ierror==0){
if($password==$repassword){
//YUCMEDIA验证码配置-开始
require_once("../includes/yucmedia.php");//引用yucmedia.php文件 
$sitekey="du4z8i225ab5xsueq6c65owv5";//网站识别码   
$idenkey="evb1qnm5nb2534oe3sk6wb3mm";//网站校验码            
$userip=$_SERVER["REMOTE_ADDR"];//用户ip地址     
$userresponse=$_POST['captcha'];//用户输入值，此处填验证码框的name值   
//会话流水号(如该项取不到值请查看是否将验证码脚本加在验证码框所在的form表单内)  
$yuc_serialnum=$_POST['BMserialnum'];
$zbkey='zphp';//注册填zphp,登录填dphp,发帖填fphp,回帖填hphp,下载xphp   
if($sitekey!="" && $idenkey!="" && $userip!="" && $userresponse!="" && $yuc_serialnum!="" && $zbkey!=""){
$result=yucmedia_verify($sitekey,$userip,$yuc_serialnum,$userresponse,$idenkey,$zbkey);
$result=substr($result,0,4);
//YUCMEDIA验证码配置-结束

if ($result=='true'){
//开始进行进一步验证 返回信息以以下方式输出：
//错误：echo "error:错误id:错误内容！";
//完成：echo "sucess:要跳转到哪里."
	echo "sucess:./panel.php";
}else{
	echo "7";
	$ierror+=1;
}
}

}else{
	echo "6";
	$ierror+=1;
}
}

?>
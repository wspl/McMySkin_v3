<?php
/*
This Is The YucMedia Captcha Api Scripts
All Rights Reserved
*/

/*
YucMedia CaptchaУ�麯��

$sitekey--��ע�ἤ����ȡ����վ���ʶ���룬��һ��25λ���ַ�����
$serialnum--�ǻỰ��ˮ�š�
$userresponse--���û��������֤��ֵ��
$idenkey--Ҳ��ע�ἤ����ȡ����վ���У���룬Ҳ��һ��25λ���ַ�����
$remoteip--�û�ip��ַ��
$zbkey--��վλ�ñ�ʶ����
*/
function  geturlendata($argv){
$flag = 0;
$params = "";
foreach ($argv as $key=>$value)
{
if ($flag!=0)
{
$params .= "&";
$flag = 1;
}
$params.= $key."=";
$params.= urlencode($value);
$flag = 1;
}
return $params;
}

function yucmedia_verify($sitekey,$remoteip,$serialnum,$userresponse,$siteidenkey,$zbkey){
$urlendata=geturlendata(array(
                              'sitekey'=>$sitekey,
                                 'userip'=>$remoteip,
                                  'serialnum'=>$serialnum,
                                    'userresponse'=>$userresponse,
                                     'idenkey'=>$siteidenkey,
									   'zbkey'=>$zbkey
                                           ));
$length = strlen($urlendata);

$post = fsockopen('api.yucmedia.com',80,$errno,$errstr,10) or exit($errstr."��>".$errno);

$header = "POST /script/verify HTTP/1.0\r\n"; 
$header .= "Host:api.yucmedia.com\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n"; 
$header .= "Content-Length: ".$length."\r\n";
$header .= "User-Agent: yucmedia/PHP\r\n";
$header .= "Connection: Close\r\n\r\n";
$header .= $urlendata."\r\n";

fputs($post,$header);

while(!feof($post))
{
$response.= fgets($post,1024);
}
fclose($post); 
$response = explode("\r\n\r\n", $response, 2);
return $response[1];
}
?>

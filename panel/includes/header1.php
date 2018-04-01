<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css" />
<link href="./css/lavalamp.css" rel="stylesheet" type="text/css" />
<?php
function curr ($filename){ //菜单栏分辨
if(basename($_SERVER['SCRIPT_NAME']) == $filename)
return 'class="current"';
}
?>
<script type="text/javascript" src="../javascript/jquery-1.6.2.js"></script>
<script type="text/javascript" src="./javascript/lavalamp.js"></script>
<!-- McMySkin Header2 File -->
<?php
function curr ($filename){ //菜单栏分辨
if(basename($_SERVER['SCRIPT_NAME']) == $filename)
return 'class="current"';
}
?>
</head>
<body>

<div id="wrapper">
<div id="mTop">
<div id="mTop_LOGO"></div>
<div id="mTop_T">
<ul id="menu">
<li <?php echo curr("index.php"); ?>><a href="./index.php" title="主页">主页</a></li>
<li <?php echo curr("download.php"); ?>><a href="./download.php" title="下载">下载</a></li>
<li <?php echo curr("donate.php"); ?>><a href="./donate.php" title="捐助">捐助</a></li>
<li <?php echo curr("index.php"); ?>><a href="#namelist" title="名单">名单</a></li>
<li <?php echo curr("index.php"); ?>><a href="#report" title="讨论">讨论</a></li>
<li <?php echo curr("about.php"); ?>><a href="./about.php" title="关于">关于</a></li>
</ul>
</div>
</div>
<div id="mMain">
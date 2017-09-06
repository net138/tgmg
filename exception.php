<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>系统发生错误 </title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="Generator" content="EditPlus"/>
<style>
body{
	font-family: 'Microsoft Yahei', Verdana, arial, sans-serif;
	font-size:14px;
	background:#e1e1e1;
	padding:0;
	margin:0;
}
a{text-decoration:none;color:#174B73;}
a:hover{ text-decoration:none;color:#FF6600;}
.p404{width:1000px; height:560px; margin:0 auto; background:url(/statics/images/404bg.jpg) no-repeat; position:relative;}
.p404_about{width:430px; position:absolute; top:300px; left:530px;}
.timeindex{position: absolute; top: 350px; left: 530px;}
#time{color: #ef1c24;}
</style>
</head>
<body>

<div class="p404">
	<div class="p404_about">您可以选择 [ <A HREF="<?php echo(strip_tags($_SERVER['PHP_SELF']))?>">重试</A> ] [ <A HREF="javascript:history.back()">返回</A> ] 或者 [ <A HREF="<?php echo(strip_tags($_SERVER['PHP_SELF']))?>">回到首页</A> ]</div>
	<div class="timeindex">即将回到首页&nbsp;&nbsp;<span id="time">3</span>，如果还没有跳转，请点击<A HREF="<?php echo(strip_tags($_SERVER['PHP_SELF']))?>">[跳转]</A></div>
</div>
<div class="notice"></div>
	<script>
		var index = 3;
		function time() {
			var time = document.getElementById("time");
			index--;
			time.innerText = index;
			if(index == 0) {
				window.location.href = "http://www.daohegroup.cn/index.php";
			}
		}
		setInterval(time, 1000);
	</script>
</body>
</html>
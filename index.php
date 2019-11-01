<?php
include("./include/common.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title><?php echo $sitename;?></title>
	<meta name="keywords" content="<?php echo $keywords;?>"/>
	<meta name="description" content="<?php echo $description;?>"/>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
	</style>
</head>
<?php
$str = "123456789abcd";
$bj .= $str[mt_rand(0, strlen($str)-1)];
?>
<body background="/images/bj/bj-<?php echo $bj;?>.jpg">
<div class="container">    <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="http://www.i9mc.top">Fc 官网</a></li>
          <li role="presentation" class="active"><a href="http://bbs.i9mc.top">Fc 论坛</a></li>
        </ul>
       <h3 class="text-muted" align="left"><font color=#8968CD"><?php echo $sitename?></font></h3>
     </div><hr>
	 <div class="panel panel-primary">

  <font color="red"><li class="list-group-item"><span class="active">FantasyCraft官网</a>:http://www.i9mc.top</li></li>
<font color="red"><li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>现在时间：</b> <?=$date?> </font ></li>
		
				</ul>
      </div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">欢迎使用FTC工作室-MC云黑系统</h3></div>
			<ul class="list-group">
				<li class="list-group-item">
							<ul class="list-group">
				<li class="list-group-item">
	 <h3 class="form-signin-heading">输入QQ查询</h3>
	 <form action="" class="form-sign" method="post">
	 <input type="text" class="form-control" name="qq" placeholder="请输入查询QQ" value=""><br>
                        <div class="form-group">
              <div class="col-xs-12"><input type="submit" value="查询" class="btn btn-primary btn-block"/></div>
	 <p style="text-align:left">
<center>	
<?php
if($qq=$_POST['qq']) {
	$qq=$_POST['qq'];
	$row=$DB->get_row("SELECT * FROM black_list WHERE qq='$qq' limit 1");
echo '<label><P><div class="col-xs-12"><input type="submit" value="查询QQ：'.$qq.'" class="btn btn-primary btn-block"/></div></label><br>';
	if($row) {
		echo '
    </div><hr>
	 <div class="panel panel-primary">
<ul class="list-group">
  <li class="list-group-item"><span class=""></span> <b>
		<font color="green"><label>该QQ属于黑名单中人员！请谨慎交易</font></label>';
?>
</ul>
欢迎加入FTC工作室-MC云黑团队
 <div class="col-xs-12"><input type="submit" value="返回" class="btn btn-primary btn-block"/></div>
<?php
       }else{
		echo '<label><font color="reg"><div class="col-xs-12"><input type="submit" value="该QQ不是云黑名单中成员，举报请联系QQ：321230034！" class="btn btn-primary btn-block"/></div></font></label>';
	}
}
$DB->close();
?>
</center>
</body>
</html>

<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/201612/19/20/00/bootstrap.min.css">
</head>
<body background="https://ww2.sinaimg.cn/large/a15b4afegy1fpp139ax3wj200o00g073.jpg">
 <div class="container" style="padding-top:80px;">
<div class="col-xs-12 col-sm-10 col-lg-5 center-block" style="float: none;">





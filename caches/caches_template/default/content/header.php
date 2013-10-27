<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>newstyle/head_home.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>newstyle/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>newstyle/home_common.js"></script>
</head>
<body>
<div class="topbar">
	<div class="community new">
		<ul>
			<li><a href="#" >专家问答</a></li>
			<li class="sline">|</li>
			<li><a href="#">星闻资讯</a></li>
			<li class="sline">|</li>
			<li><a href="#">开运商城</a></li>
			
		</ul>
       
	</div>
	<div class="new_nav">

	</div>
    <div class="spzpb"><a href="#" class="i17">非常运势算命网</a><a href="javascript:myhomepage()" target="_self" name="homepage" class="i14">设为首页</a><a class="i15" title="39健康网"  target="_self" href="javascript:void(0);" onclick="javascript:bookmark('index.htm'/*tpa=http://www.39.net/*/,'39健康网_中国第一健康门户网站');">添加收藏</a> </div>
	<div class="region">
	</div>
</div>
<div class="logosearch">
	<div class="logo"><a href="index.htm"  title="非常运势算命网"><img src="<?php echo IMG_PATH;?>newstyle/logo.gif"  alt="39健康网"></a></div>
	<div class="search">
    	<ul class="searchTab clearfix" id="sTab">
        	<li class="sTabNow" soType="article">星座</li>
        	<li soType="jbk">生肖</li>
        	<li soType="ypk">算命</li>
        	<li  soType="yyk">问答</li>
          	
        </ul>
        <form name="search" method="get" action="#" target="_blank" class="clearfix" >
        	<div class="sbox"><input name="words" type="text" id="swords" value="金牛座" maxlength="30"></div>
            <div class="sbtn"><span id="sbtnAsk">搜索</span><input type="submit" value="" /></div>
            <div class="sbtn sAsk"><a id="sAskLink" href="#"  target="_blank">问专家</a></div>
        </form>
	</div>
</div>

<div class="navigation">
	<div class="nav_text">
		<div class="bgl"></div>
		<ul class="people">
			<li><a href="#" >专家问答</a></li>
			<li><a href="#" >星闻资讯</a></li>
		</ul>
		<ul class="disease">
			<li class="h"><a href="#"  title="星闻" class="head">星闻</a></li>
			<li><a href="#" >星座</a></li>
			<li><a href="#" >运势</a></li>
			<li><a href="#" >开运</a></li>
			<li><a href="#" >血型</a></li>            
			<li><a href="#" >测试</a></li>
			<li><a href="#" >解梦</a></li>
			<li><a href="#" >相学</a></li>		
			<li><a href="#" >相学</a></li>
			<li><a href="#" >生肖</a></li>
			<li><a href="#" >图鉴</a></li>
            
		</ul>
		<ul class="drug">
			<li class="h"><a href="#"  title="亲算" class="head">亲算</a></li>
			<li><a href="#" >起名</a></li>
			<li><a href="#" >婚姻</a></li>
			<li><a href="#" >运势</a></li>
			<li><a href="#" >大运</a></li>
		</ul>
		<ul class="living">
			<li class="h"><a href="#"  title="测算" class="head">测算</a></li>
			<li><a href="#" >八字</a></li>
			<li><a href="#" >紫微</a></li>
			<li><a href="#" >姓名</a></li>
			<li><a href="#" >周易</a></li>
			<li><a href="#" >塔罗</a></li>
			<li><a href="#" >占卜</a></li>
			
		</ul>
		<ul class="snews">
			<li class="h"><a href="#"  title="吉日" class="head">吉日</a></li>
			<li><a href="#" >黄历查询</a></li>
			<li><a href="#" >黄道吉日</a></li>
			<li><a href="#" >今日吉时</a></li>
			<li><a href="#" >五行查询</a></li>
		</ul>
		<ul class="community">
			<li class="h"><a href="#"  title="星座" class="head">星座</a></li>
			<li><a href="#" >星座查询</a></li>
			<li><a href="#" >运势</a></li>
			<li class="s">|</li>
			<li><a href="#" >星座配对</a></li>
			<li><a href="#" >星盘查询</a></li>
			<li><a href="#" >专家问答</a></li>
			
		</ul>
		<div class="bgr"></div>
	</div>
    
	<div class="nav_icon">
		<li class="nobg"><a class="i1" href="#" >八字</a></li>
		<li><a class="i2" href="#" >星座</a></li>
		<li><a class="i3" href="#" >紫微</a></li>
		<li><a class="i16" href="#" >相术</a></li>
		<li><a class="i5" href="#" >姓名</a></li>
		<li><a class="i4" href="#" >塔罗</a></li>
		<li><a class="i80" href="#" >开运</a></li>
		<li><a class="i6" href="#" >生肖</a></li>
		<li><a class="i7" href="#" >风水</a></li>
		<li><a class="i9" href="#" >周易</a></li>
		<li><a class="i10" href="#" >血型</a></li>
		<li><a class="i17" href="#" >解梦</a></li>
		<li><a class="i20" href="#" >占卜</a></li>
		<li><a class="i19" href="#" >测试</a></li>
		<li><a class="i11" href="#" >专栏</a></li>
		<li><a class="i12" href="#" >专题</a></li>
		<li><a class="i13" href="#" >星闻资讯</a></li>
		<li><a class="i14" href="#" >最新文章</a></li>
		<li><a class="i23" href="#" >专家问答</a></li>
		<li><a class="i15" href="#" ><span>更多</span></a></li>
	</div>
   
</div>
<!--页面头部区域结束-->
<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>reset.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>product/index.css"/>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>product/haitaoguang.css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
</head>
<body>
<div id="etao-header" class="clearfix etao-header-haiwai">
	<div id="etao-header-bd" class="clearfix dib-wrap nowrap  ">
        <div id="etao-nav" class="clearfix">
    <div class="etao-nav-bd">
        <!-- 登录信息 -->
        <div class="etao-nav-item login-info" id="J_LoginInfo">
		<span class="rt"><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="24" frameborder="0" scrolling="no"></iframe>')</script></span>
		</div>
        <!-- 我的一淘 -->
        <div class="etao-nav-item my-etao" id="J_MyEtao">
            <a aria-label="我的一淘菜单，下键打开菜单，ESC关闭" aria-haspopup="true" rel="nofollow" href="http://i.etao.com" target="_blank" ><b>我的一淘</b><i>&#8193</i></a>
            <ul role="menu" class="etao-nav-list">
                <li role="menuitem"><a href="#"  target="_blank">我的订单</a></li>
            </ul>
        </div>
        <!-- end-->
    </div>
</div>
<script>new ETao.Header();</script>
	<div class="etao-logo dib">
<a class="etao-main-logo" target="_top" href="#">&#19968&#28120</a>
<a class="etao-en-logo" target="_top" href="#"><span>etao.com</span></a>
<a class="etao-sub-logo" target="_top" href="#">&#28023&#38518</a>
</div>
    </div>
</div>
		<style type="text/css">
    #etao-second-sub-nav {
        width: 990px;
        margin: 0 auto;
        position: relative;
    }
    #etao-second-sub-nav .nav-item-list {
        height: 45px;
        line-height: 45px;
    }
    #etao-second-sub-nav .nav-item-list .nav-second-item {
        float: left;
        padding: 0 20px;
        background: url(<?php echo IMG_PATH;?>images/product/T1PytzFdVhXXcG.6..-1-14.png) center left no-repeat;
    }
    #etao-second-sub-nav .nav-item-list .first {
        background: none;
    }
    #etao-second-sub-nav .nav-item-list .nav-second-item a {
        font-size: 14px;
        font-weight: normal;
        line-height: 30px;
        line-height: 38px;
        color: #666;
    }
    #etao-second-sub-nav .nav-item-list li.now a,
    #etao-second-sub-nav .nav-item-list .nav-second-item a:hover {
        text-decoration: none;
        color: #bb5500;
    }
    #etao-second-sub-nav #J-item-category-box {
        position: relative;
        border-right: 1px solid #f7f7f7;
        border-left: 1px solid #f7f7f7;
    }
    #etao-second-sub-nav .item-category {
        display: none;
        z-index: 20;
        position: absolute;
        left: -1px;
        width: 110px;
        border: 1px solid #eee;
        border-top: none;
        background: #f7f7f7;
        background: #fff;
    }
    #etao-second-sub-nav .item-category li {
        padding: 0 10px 0 15px;
        overflow: hidden;
        white-space: nowrap;
    }
    #etao-second-sub-nav .item-category li a {
        display: inline-block;
        width: 100%;
        overflow: hidden;
    }
    #etao-second-sub-nav .nav-item-list #J-item-category-box {
        padding-right: 25px;
    }
    #J-item-category-box .angle-item {
        position: absolute;
        top: 16px;
        right: 20px;
    }
    #J-item-category-box .angle span {
        position: absolute;
        width: 0;
        height: 0;
        border: dashed 4px transparent;
        overflow: hidden;
        font-size: 0;
    }
    #J-item-category-box .angle-item .angle-outer {
        border-top: 6px solid #ccc;
        border-width: 6px;
    }
    #J-item-category-box .angle-item .angle-inner {
        top: -2px;
        border-top: 6px solid #f7f7f7;
        border-width: 6px;
    }
    #J-item-category-box .angle-item-on .angle-outer {
        border-top: 0;
        border-bottom: 6px solid #ccc;
        border-width: 6px;
    }
    #J-item-category-box .angle-item-on .angle-inner {
        top: 2px;
        border-top: 0;
        border-bottom: 6px solid #fff;
        border-width: 6px;
    }
    #content {
        width: 960px;
        margin: 0 auto;
        margin-bottom: 40px;
        min-height: 400px;
    }
    #etao-second-sub-nav .nav_new{
        position: absolute;
        top: -5px;
        *top: 0;
        left: 160px;
        z-index: 99999;
    }
</style>
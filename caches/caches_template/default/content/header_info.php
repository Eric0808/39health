<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>reset.css">
<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>info.css">
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
</head>
<body>
<div class="body-top">
    <div class="content">

    	<div class="left-wp">
            <div class="login lh24 blue"><a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" class="rss ib">rss</a><span class="rt"><script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="24" frameborder="0" scrolling="no"></iframe>')</script></span></div>		
		</div>
    </div>
</div>
<?php $info_linkageid = getinfocache('info_linkageid')?>
<?php $city_id = is_numeric($city) ? getcity($city,'pinyin','info_citys_id') : trim($_GET['city'])?>
<?php $cityid = getcity($city_id,'linkageid')?>
<?php $cityname = getcity($city_id,'name')?>
<?php $city = getcity($city_id,'pinyin')?>
<div class="header wp">
    <a href="" class="logo"><img src="<?php echo IMG_PATH;?>info/logo.png" /></a>	
    <div id="cityName">
	<div class="currentCity"><?php echo $cityname;?></div>
	<?php if(getinfocache('multi_city')) { ?><a href="javascript:;" class="tabCity">切换城市</a><?php } ?>	
	</div>
    <div class="search-bar">
        <dl class="clear">
			<form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
			<input type="hidden" name="m" value="search"/>
			<input type="hidden" name="c" value="index"/>
			<input type="hidden" name="a" value="init"/>
			<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
			<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>			
            <dt class="s_select cu-span"><a href="javascript:;" class="select-btn"><span>选择分类</span></a>
                <div>
				   <?php $search_model = getcache('search_model_'.$siteid, 'search');?>
				   <?php $n=1;if(is_array(getinfocache('info_modelid'))) foreach(getinfocache('info_modelid') AS $r) { ?>
                    <a href="#" val="<?php echo $search_model[$r['modelid']]['typeid'];?>"><?php echo $r['name'];?></a>
				   <?php $n++;}unset($n); ?>
                </div>
            </dt>
            <dd class="btn"><input type="submit" value=" " /></dd>
            <dd class="input">
                <input type="text" id="q" name="q"/>
            </dd>
			</form>
        </dl>
        <strong>热词：</strong><span class="blue" id="hotKey"><a href="javascript:;">北京租房</a> <a href="javascript:;">北京二手</a></span>
    </div>
</div>
<script type="text/javascript">
function _select(name){
	var s_span = $(".select-btn span"),	s_select = $(".s_select div"),s_select_a = $(".s_select div a"),v = $("#typeid");
	  s_span.bind('mouseover',function(){
			s_select.show();
	  }).bind('mouseleave',function(){
			s_select.hide()
	  });
	  s_select.bind('mouseover',function(){
			s_select.show();
	  }).bind('mouseleave',function(){
			s_select.hide()
	  });
	//获取选项值
	s_select_a.click(function(){
		var t = $(this);  
		s_span.text(t.text());
		v.val(t.attr("val"));
		s_select.hide();
	});
}
_select();
//热词选择
function hotKey(){
	var v_Search=$("#q"),key = $("#hotKey a");
	key.click(function(){
		$this = $(this);
		v_Search.val($this.text());
	})	
}
hotKey();
//地区
$(".tabCity").click(function(event){
	  var offset =  $(event.target).offset(),ListCity = $(".ListCity");
	  event.stopPropagation();
	  ListCity.css({left:offset.left+"px",top:offset.top+$(event.target).height()+"px",display:"block"});        
});
$(document).click(function(){$(".ListCity").hide();});
</script>
<?php if(getinfocache('multi_city')) { ?>
<div class="ListCity" style="display:none">
	<div class="content clearfix">
		<dl>
		<dt>地区：</dt>
		<dd>
		<?php $n=1;if(is_array(getcity())) foreach(getcity() AS $r) { ?>
		<a href="<?php echo $CATEGORYS[$catid]['url'];?>&city=<?php echo $r['pinyin'];?>"><?php echo $r['name'];?></a>
		<?php $n++;}unset($n); ?>
		</dd>
		</dl>
		<!--<a href="#" class="more">更多城市</a>-->
	 </div>
</div>
<?php } ?>
<div class="nav-bar wp">
    <map>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=522dcf79f84779c8c187ca374072cc0d&action=category&catid=0&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
        	<ul class="nav-site cu-span">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="line">|</li>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </map>
</div>
<div class="bk15"></div>
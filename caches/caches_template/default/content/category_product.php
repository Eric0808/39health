<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_product"); ?>
<!--main-->
<div id="etao-second-sub-nav" >
	    <ul class="nav-item-list clear-fix">
		<?php $n=1; if(is_array(subcat(getinfocache('info_catid'),0,0,$siteid))) foreach(subcat(getinfocache('info_catid'),0,0,$siteid) AS $key => $r) { ?>
		<li class="nav-second-item <?php if($n==1) { ?>first<?php } ?> <?php if($r['catid']==$catid) { ?>now<?php } ?>">
            <a target="_blank" class="sub-nav-link" href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
        </li>
		<?php $n++;}unset($n); ?>
    </ul>
    <div class="nav_new"><img src="<?php echo IMG_PATH;?>product/T19ihrFbJhXXX6Ya_d-29-18.gif" title="NEW"></div>
</div>

		<div id="content">
	
	<ul class="special-box clear-fix">
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f0bea322055568ec771e06762033f04&action=lists&catid=%24catid&num=11&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'11',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<li class="shadow15 <?php if($n==1) { ?>first<?php } ?>">
    		<a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank">
      	 	<img src="<?php echo $r['thumb'];?>" onerror="this.src='<?php echo $r['thumb'];?>' "width="216" height="289" />
			<div class="title"><?php echo str_cut($r[title],40);?></div>
			<div class="title-bg"></div>
        </a>
	</li>
	<?php $n++;}unset($n); ?>	
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
	
		<div id="search" class="tags-box shadow15">
							<div class="group  ">
			<h3 class="source">
				 				<img src="<?php echo IMG_PATH;?>product/T1zwqCXy0iXXcC9mPe-40-40.jpg" />
								服饰鞋包
			</h3>
			<h3 class="target">
				 				<img src="<?php echo IMG_PATH;?>product/T13oWOXzRdXXcC9mPe-40-40.jpg" />
								服饰鞋包
			</h3>
			<ul class="clear-fix">
												<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.1" href="/guang/list.htm?cat_id=16">女装</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.2" href="/guang/list.htm?cat_id=30">男装</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.3" href="/guang/list.htm?cat_id=1625">内衣</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.4" href="/guang/list.htm?cat_id=50006842">箱包</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.5" href="/guang/list.htm?cat_id=50006843">女鞋</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.6" href="/guang/list.htm?cat_id=50010404">配饰</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.7" href="/guang/list.htm?cat_id=50011397">珠宝首饰</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.8" href="/guang/list.htm?cat_id=50011699">运动休闲</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.9" href="/guang/list.htm?cat_id=50011740">男鞋</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.10" href="/guang/list.htm?cat_id=50012029">运动鞋</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.11" href="/guang/list.htm?cat_id=50013864">时尚饰品</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.12" href="/guang/list.htm?cat_id=50013886">户外</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.3.13" href="/guang/list.htm?cat_id=50468001"> 手表</a></li>
											</ul>
			
		</div>
							<div class="group  ">
			<h3 class="source">
				 				<img src="<?php echo IMG_PATH;?>product/T14JKQXwNbXXcC9mPe-40-40.jpg" />
								美妆个护
			</h3>
			<h3 class="target">
				 				<img src="<?php echo IMG_PATH;?>product/T1_3COXzXfXXcC9mPe-40-40.jpg" />
								美妆个护
			</h3>
			<ul class="clear-fix">
												<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.2.1" href="/guang/list.htm?cat_id=1801">美容护肤</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.2.2" href="/guang/list.htm?cat_id=50002766">全球美食</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.2.3" href="/guang/list.htm?cat_id=50002768">个护器材</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.2.4" href="/guang/list.htm?cat_id=50010788">彩妆香水</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.2.5" href="/guang/list.htm?cat_id=50020275">传统滋补营养品</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.2.6" href="/guang/list.htm?cat_id=50023282">美发护发</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.2.7" href="/guang/list.htm?cat_id=50026800">保健品</a></li>
											</ul>
			
		</div>
							<div class="group  ">
			<h3 class="source">
				 				<img src="<?php echo IMG_PATH;?>product/T1ECpsFddaXXcC9mPe-40-40.jpg" />
								母婴玩具
			</h3>
			<h3 class="target">
				 				<img src="<?php echo IMG_PATH;?>product/T18XlqFmVfXXcC9mPe-40-40.jpg" />
								母婴玩具
			</h3>
			<ul class="clear-fix">
												<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.1.1" href="/guang/list.htm?cat_id=25">早教益智玩具</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.1.2" href="/guang/list.htm?cat_id=35">奶粉及婴儿辅食</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.1.3" href="/guang/list.htm?cat_id=50008165">童装童鞋</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.1.4" href="/guang/list.htm?cat_id=50014812">推车床及婴儿用品</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.1.5" href="/guang/list.htm?cat_id=50022517">孕产妇用品</a></li>
											</ul>
			
		</div>
							<div class="group   group-end ">
			<h3 class="source">
				 				<img src="<?php echo IMG_PATH;?>product/T1HNprFbNdXXcC9mPe-40-40.jpg" />
								3C数码
			</h3>
			<h3 class="target">
				 				<img src="<?php echo IMG_PATH;?>product/T11bFpFdhgXXcC9mPe-40-40.jpg" />
								3C数码
			</h3>
			<ul class="clear-fix">
												<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.1" href="/guang/list.htm?cat_id=14">相机</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.2" href="/guang/list.htm?cat_id=1101">笔记本电脑</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.3" href="/guang/list.htm?cat_id=1512">手机</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.4" href="/guang/list.htm?cat_id=50008090">3C数码配件</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.5" href="/guang/list.htm?cat_id=50011972">影音设备</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.6" href="/guang/list.htm?cat_id=50012082">厨房家电</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.7" href="/guang/list.htm?cat_id=50012100">生活电器</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.8" href="/guang/list.htm?cat_id=50018004">电纸书</a></li>
								<li ><a target="_blank" data-stat="etao.etao_haiwai_guang.home.Tab.4.9" href="/guang/list.htm?cat_id=50019780">平板电脑</a></li>
											</ul>
			
		</div>
			</div>
			<div class="htg-nav index-bar clear-fix">
		<h3>海淘热门精选</h3>
		<!-- TMS start -->
		<span class="bao-tags">
    	<a target="_blank" class="bao-tag" href="http://haiwai.etao.com/guang/list.htm?q=levis">Levi's</a>	
    	<a target="_blank" class="bao-tag" href="http://haiwai.etao.com/guang/list.htm?q=%B1%A3%CA%AA">保湿</a>	
    	<a target="_blank" class="bao-tag" href="http://haiwai.etao.com/guang/list.htm?spm=0.0.0.0.6REgLK&sid=1711779301&q=New%20Balance">New Balance</a>	
    	<a target="_blank" class="bao-tag" href="http://haiwai.etao.com/guang/list.htm?q=%B3%E5%B7%E6%D2%C2">冲锋衣</a>	
    	<a target="_blank" class="bao-tag" href="http://haiwai.etao.com/guang/list.htm?q=%B0%B2%C8%AB%D7%F9%D2%CE">安全座椅</a>	
    	<a target="_blank" class="bao-tag" href="http://haiwai.etao.com/guang/list.htm?q=%C5%AE%D1%A5#">秋冬女靴</a>	
</span>
	</div>
	
	<div id="pbloading" align="center">

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f0bea322055568ec771e06762033f04&action=lists&catid=%24catid&num=11&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'11',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<div class="listpro">
    <div class="listpropic"><img src="<?php echo $r['thumb'];?>" onerror="this.src='<?php echo $r['thumb'];?>'" width="190" height="216"></div>
    <div class="protitle"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],40);?></a></div>
    <div class="proprice">￥<?php echo $r['price'];?></div>
    <div class="prolistd">
    <div class="prolove"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo IMG_PATH;?>product/buy_icon_01.gif" width="47" height="19"></a></div>
    <div class="prolovepl"><a href="#"><img src="<?php echo IMG_PATH;?>product/buy_icon_02.gif" width="47" height="19"></a></div></div>
    </div>
	<?php $n++;}unset($n); ?>	
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div>
</div>	<!--content end-->

<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript" >
function changetab(n) {
	$("li[id^=tab-]").removeClass('on');
	$('#tab-'+n).addClass('on');
	$("div[id^=tab-panel-]").hide();
	$('#tab-panel-'+n).show();
}
</script>
<?php include template("content","footer_product"); ?>
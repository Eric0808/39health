<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_info"); ?>
<?php if(!$_GET['city'] && getinfocache('multi_city')) { ?>
<?php include template("content","city_info"); ?>
<?php } else { ?>
<!--main-->
<div class="wp clear">
	<!--左侧分栏-->
	<div class="col-left">
    	<div class="t-Rounded"><span></span></div>
        <div class="hot-category"><div class="hot-icon"></div>
            <h5>热门类别</h5>
            <ul class="clear">
			<?php $n=1;if(is_array(subcat(getinfocache('info_catid'),0,0,$siteid))) foreach(subcat(getinfocache('info_catid'),0,0,$siteid) AS $r) { ?>		
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb7bc78d0d7e09b1eb00d7d2cd6b61b8&action=category&catid=%24r%5Bcatid%5D&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
					<li><a href="<?php echo makecaturl($c[url], $city, getinfocache('multi_city'));?>"><?php echo $c['catname'];?></a></li>
					<?php $n++;}unset($n); ?>			
				 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php $n++;}unset($n); ?>			
            </ul>
        </div>
        <div class="f-Rounded"><span></span></div>
    </div>
    <!--左侧分栏结束 && 右侧分栏开始-->
    <div class="col-right">
    	<!--注册登录发布-->
        <div class="guest clear">
        	<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" class="guest-register" >免费注册</a>
            <a href="<?php echo APP_PATH;?>index.php?m=member" class="guest-login">登录</a>
            <a href="index.php?m=member&c=content&a=info_publish&siteid=<?php echo $siteid;?>&city=<?php echo $city;?>" class="guest-add">免费发布信息</a>
        </div>      
        <div class="announce">
        	<ul class="tab clear cu-li">
            	<li class="on" onclick="changetab(1)" id="tab-1">公告</li><li onclick="changetab(2)" id="tab-2">规则</li><li class="weather"><iframe src="http://m.weather.com.cn/m/pn7/weather.htm " width="182" height="20" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe></li>
            </ul>
            <div class="tab-panel" id="tab-panel-1">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=54b0fffbbaac31bf6b88d6a6b5be8f2c&action=lists&siteid=%24siteid&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'2',));}?>
                <ul>
                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <li> <a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>"><?php echo $r['title'];?></a></li>
                   <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>			
            </div>
            <div class="tab-panel" id="tab-panel-2" style="display:none">
              这里可以通过碎片添加一些规则			
            </div>			
        </div>
    </div>
    <!--右侧分栏结束-->
    <div class="bk10"></div>
    <div class="col-left">
    	<div class="category-main clear">
        	<h5><strong>所有类别</strong><p><strong>快速进入：</strong>跳蚤市场 | 生活服务 | 招聘求职 | 房屋信息 | 交友信息</p></h5>
        	
			<?php $n=1;if(is_array(subcat(getinfocache('info_catid'),0,0,$siteid))) foreach(subcat(getinfocache('info_catid'),0,0,$siteid) AS $r) { ?>
				<dl>
				<dt><strong><a href="#"><?php echo $r['catname'];?></a></strong><span class="fuhao">&gt;&gt;</span></dt>			
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb7bc78d0d7e09b1eb00d7d2cd6b61b8&action=category&catid=%24r%5Bcatid%5D&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
					<dd><a class="f30" href="<?php echo makecaturl($c[url], $city, getinfocache('multi_city'));?>" target="_blank"><?php echo $c['catname'];?></a></dd>
					<?php $n++;}unset($n); ?>			
				 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				 </dl>	
			<?php $n++;}unset($n); ?>
        </div>
    </div>
    <div class="col-right">
    	<div class="category-sub">
        	<h5>推荐信息</h5>
            <ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f0bea322055568ec771e06762033f04&action=lists&catid=%24catid&num=11&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'11',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" class="blue1" title="<?php echo $r['title'];?>" <?php echo $r['style'];?>><?php echo str_cut($r[title],34,'');?></a></li>
				<?php $n++;}unset($n); ?>	
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>				
            </ul>
        </div>
        <div class="bk10"></div>
        <div class="category-sub">
        	<h5>浏览排行</h5>
            <ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f0bea322055568ec771e06762033f04&action=lists&catid=%24catid&num=11&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'11',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" class="blue1" title="<?php echo $r['title'];?>" <?php echo $r['style'];?>><?php echo str_cut($r[title],34,'');?></a></li>
				<?php $n++;}unset($n); ?>	
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>
<?php } ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript" >
function changetab(n) {
	$("li[id^=tab-]").removeClass('on');
	$('#tab-'+n).addClass('on');
	$("div[id^=tab-panel-]").hide();
	$('#tab-panel-'+n).show();
}
</script>
<?php include template("content","footer"); ?>
<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_product"); ?>
<link href="<?php echo CSS_PATH;?>product/info.css" rel="stylesheet" type="text/css" />

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
	<div id="search-data">
    	 <dl class="searchitem">
			<dt class="blue"><span>生肖：</span>
			<?php $n=1;if(is_array(filters('zodiac',$modelid))) foreach(filters('zodiac',$modelid) AS $r) { ?>
				<?php echo $r['menu'];?>
			<?php $n++;}unset($n); ?>
			</dt>
        </dl>
		<dl class="searchitem">
			<dt class="blue"><span>型号：</span>
			<?php $n=1;if(is_array(filters('model',$modelid))) foreach(filters('model',$modelid) AS $r) { ?>
				<?php echo $r['menu'];?>
			<?php $n++;}unset($n); ?>
			</dt>
        </dl>
		<dl class="searchitem">
			<dt class="blue"><span>用途：</span>
			<?php $n=1;if(is_array(filters('using',$modelid))) foreach(filters('using',$modelid) AS $r) { ?>
				<?php echo $r['menu'];?>
			<?php $n++;}unset($n); ?>
			</dt>
        </dl>
		<dl class="searchitem">
			<dt class="blue"><span>材质：</span>
			<?php $n=1;if(is_array(filters('material',$modelid))) foreach(filters('material',$modelid) AS $r) { ?>
				<?php echo $r['menu'];?>
			<?php $n++;}unset($n); ?>
			</dt>
        </dl>
		<dl class="searchitem">
			<dt class="blue"><span>功用：</span>
			<?php $n=1;if(is_array(filters('effect',$modelid))) foreach(filters('effect',$modelid) AS $r) { ?>
				<?php echo $r['menu'];?>
			<?php $n++;}unset($n); ?>
			</dt>
        </dl>
        <dl class="searchitem">
			<dt class="blue"><span>价格：</span>
			<?php $price_rang = array('100元以下|1_100','100-300元|100-300','300-500元|300_500','1000-2000元|1000_2000','2000元以上|2000_9999')?>
			<?php $n=1;if(is_array(filters('price',$modelid,$price_rang))) foreach(filters('price',$modelid,$price_rang) AS $r) { ?>
				<?php echo $r['menu'];?>
			<?php $n++;}unset($n); ?>
			</dt>
        </dl>
        
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
	<?php $sql = structure_filters_sql($modelid)?>
	<?php $cachetime = getinfocache('info_cachetime')?>
	<div id="pbloading" align="center">
    <?php $urlrule = makeurlrule()?>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ed480e61034bf237cf15ef85eeb4a86&action=lists&catid=%24catid&where=%24sql&num=15&order=listorder+DESC%2Cinputtime+DESC&page=%24page&moreinfo=1&cache=%24cachetime&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'where'=>$sql,'order'=>'listorder DESC,inputtime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'where'=>$sql,'order'=>'listorder DESC,inputtime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
    
	
	<div style="display:none" id="content_total"><?php echo $content_total;?></div>	
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<?php $photos_num = count(string2array($r[photos]))?>
		 <div class="listpro">
		<div class="listpropic"><img src="<?php echo $r['thumb'];?>" onerror="this.src='<?php echo $r['thumb'];?>'" width="190" height="216"></div>
		<div class="protitle"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],40);?></a></div>
		<div class="proprice">材质：<?php echo box('material',$r[material],$modelid);?>&nbsp;&nbsp; 结缘价：￥<?php echo $r['price'];?></div>
		<div class="prolistd">
		<div class="prolove"><a href="#"><img src="<?php echo IMG_PATH;?>product/buy_icon_01.gif" width="47" height="19"></a></div>
		<div class="prolovepl"><a href="#"><img src="<?php echo IMG_PATH;?>product/buy_icon_02.gif" width="47" height="19"></a></div></div>
		</div>
		  <?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	<div id="pages" class="text-c"><?php echo $pages;?></div>
    </div>
</div>	<!--content end-->
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=top"></script>
<script language="javascript" type="text/javascript">
$(document).ready(function(){
	var content_total = $("#content_total").html();
	$("#total").html(content_total);
	
});
function i_query() {
	var param = $('#q').val();
	var url = "<?php echo structure_filters_url('q',array('q'=>'"+param+"'),2);?>";
	location.href = url;
}
</script>
<?php include template("content","footer_product"); ?>
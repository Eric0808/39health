<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_info"); ?>
<link href="<?php echo CSS_PATH;?>newstyle/product_list.css" rel="stylesheet" type="text/css" />
<div class="wp">
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
    <div class="bk15"></div>
    <ul class="tabitem cu-span clear">
		<?php $n=1;if(is_array(filters('agent',$modelid))) foreach(filters('agent',$modelid) AS $r) { ?>
			<li <?php if($_GET['agent'] == $r[value]) { ?>class="on"<?php } ?>><a href="<?php echo $r['url'];?>"><span><?php echo $r['name'];?></span></a></li>
		<?php $n++;}unset($n); ?>			
        <li class="add"><a href="index.php?m=member&c=content&a=info_publish&siteid=1&catid=<?php echo $catid;?>&city=<?php echo $city;?>&zone=<?php echo $zone;?>" target="_blank">免费发布信息>></a></li>
    </ul>
    <ul class="filter clear">
    	<li>找到相关信息<b id="total"></b>条</li>

    </ul>
</div>
<div class="wp clear info-article">
	
	<div class="col-auto">
	<?php $sql = structure_filters_sql($modelid)?>
	<?php $cachetime = getinfocache('info_cachetime')?>
	<div class="box_f">
		<ul class="phbang">
		    <li><a href="bmfgoods.asp?act=bmf&amp;order=all">所有圣品</a></li>
            <li><a href="bmfgoods.asp?act=bmf&amp;order=time&amp;sx=ji&amp;cz=heihuoshi">新品上架</a></li>
            <li><a href="bmfgoods.asp?act=bmf&amp;order=view&amp;sx=ji&amp;cz=heihuoshi">人气排行</a></li>
            <li><a href="bmfgoods.asp?act=bmf&amp;order=price&amp;sx=ji&amp;cz=heihuoshi">价格排行</a></li>
            <li><a href="bmfgoods.asp?act=bmf&amp;order=hot&amp;sx=ji&amp;cz=heihuoshi" class="curre01">畅销圣品</a></li>
          </ul>
		  <?php $urlrule = makeurlrule()?>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ed480e61034bf237cf15ef85eeb4a86&action=lists&catid=%24catid&where=%24sql&num=15&order=listorder+DESC%2Cinputtime+DESC&page=%24page&moreinfo=1&cache=%24cachetime&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'where'=>$sql,'order'=>'listorder DESC,inputtime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'where'=>$sql,'order'=>'listorder DESC,inputtime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<ul class="cp01zs">
		<div style="display:none" id="content_total"><?php echo $content_total;?></div>	
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php $photos_num = count(string2array($r[photos]))?>
			  <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" onerror="this.src='<?php echo $r['thumb'];?>'" width="150" height="150"></a>
                <p><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],40);?></a></p>
                <p>货号：<?php echo $r['product_num'];?></p>
                <p>材质：<?php echo box('material',$r[material],$modelid);?></p>
                <p>结缘价：￥<?php echo $r['price'];?> 元</p>
				<p align="center"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src=" <?php echo IMG_PATH;?>info/buy_icon_01.gif"></a>&nbsp;&nbsp;<a href="<?php echo $r['url'];?>"><img src=" <?php echo IMG_PATH;?>info/buy_icon_02.gif"></a></p>
              </li>
			  <?php $n++;}unset($n); ?>
			
            </ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
		<div id="pages" class="text-c"><?php echo $pages;?></div>
    </div>
</div>
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
<?php include template("content","footer"); ?>
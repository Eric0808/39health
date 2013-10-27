<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_info"); ?>
<div class="wp" id="content">
	<div class="Location blue1"><a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo catpos($catid);?>
					<?php $n=1;if(is_array($zone)) foreach($zone AS $r) { ?>
					<?php if($r[parentid]) { ?><a href="<?php echo structure_filters_url('zone',array('zone'=>$r[linkageid],'catid'=>$catid,'city'=>$city),0,$modelid);?>"><?php echo $r['name'];?></a> > <?php } ?>
					<?php $n++;}unset($n); ?><?php echo $title;?></div>
	<div class="info-show clear">
    	<div class="hd">
        	<h1><?php echo $title;?> <a href="javascript:;" class="f12 fn blue" onclick="add_favorite('<?php echo $title;?>');" id='favorite'>(收藏)</a></h1>
            <p class="blue1"><span class="gray4"><?php echo $inputtime;?></span>浏览:<font color="red" id="hits">0</font>次</p>
        </div>
        <div class="info-list">
        	<ul class="info">
                <li><span>租金：</span><em class="redfont"><?php echo $price;?></em> 元/月 (<?php echo $pay_type_int;?>)</li>
                <li><span>整套户型：</span><?php echo $bedroom;?>室 <?php echo $hall;?> 厅 <?php echo $bathroom;?> 卫 (<?php echo $rent_mode;?>-<?php echo $area;?>㎡)</li>
                <li><span>基本情况：</span><?php echo $objecttype;?>，<?php echo $fittype;?>，朝向<?php echo $toward;?> (第 <?php echo $floor;?> 层， 共 <?php echo $floors;?> 层)</li>
                <?php if($houseallocation) { ?><li><span>配置：</span><?php echo substr($houseallocation,0,-3);?></li><?php } ?>
                <?php if(!empty($zone)) { ?>
				<li><span>区域：</span>
					<?php $n=1;if(is_array($zone)) foreach($zone AS $r) { ?>
					<?php if($r[parentid]) { ?><a href="<?php echo structure_filters_url('zone',array('zone'=>$r[linkageid],'catid'=>$catid,'city'=>$city),0,$modelid);?>" class="blue"><?php echo $r['name'];?></a><?php } ?>
					<?php $n++;}unset($n); ?> 
				</li>
				<?php } ?>
                <li><span>小区：</span><?php echo $xiaoqu_address;?></li>
                <li><span>地址：</span><?php echo $address;?></li>
    		</ul>
            <div class="Reminded">
<strong>提醒：</strong>让您提前汇款或者不见面交易的都是骗子！<br />
电脑配置很高但价格很低的都是虚假信息。
            </div>
        </div>
        <dl class="user">
        	<dt><span>联 系 人：</span><?php echo $contact;?></dt>
            <dt><span>联系电话：</span><?php if(getinfocache('img_contact')) { ?><?php echo string2img($phone);?><?php } else { ?><?php echo $phone;?><?php } ?></dt>
			<dt class="Tool"><span>分　　享：</span><img src="http://v.t.qq.com/share/images/s/weiboicon16.png" onclick="postToWb();" class="cu" title="分享到腾讯微博"/><script type="text/javascript">
	function postToWb(){
		var _t = encodeURI(document.title);
		var _url = encodeURIComponent(document.location);
		var _appkey = encodeURI("cba3558104094dbaa4148d8caa436a0b");
		var _pic = encodeURI('<?php echo $thumb;?>');
		var _site = '';
		var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic+'&title='+_t;
		window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
	}
</script><script type="text/javascript">document.write('<a href="http://v.t.sina.com.cn/share/share.php?url='+encodeURIComponent(location.href)+'&appkey=3172366919&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到新浪微博" class="t1" target="_blank">&nbsp;</a>');</script>
				  <script type="text/javascript">document.write('<a href="http://www.douban.com/recommend/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到豆瓣" class="t2" target="_blank">&nbsp;</a>');</script>
				  <script type="text/javascript">document.write('<a href="http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(location.href)+'&title='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'" title="分享到人人" class="t3" target="_blank">&nbsp;</a>');</script>
				  <script type="text/javascript">document.write('<a href="http://www.kaixin001.com/repaste/share.php?rtitle='+encodeURIComponent('<?php echo new_addslashes($title);?>')+'&rurl='+encodeURIComponent(location.href)+'&rcontent=" title="分享到开心网" class="t4" target="_blank">&nbsp;</a>');</script>
				  <script type="text/javascript">document.write('<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='+encodeURIComponent(location.href)+'" title="分享到QQ空间" class="t5" target="_blank">&nbsp;</a>');</script></dt>
        </dl>
        <div class="bk15"></div>
    </div>
    <div class="bk10"></div>
	<div class="content-sub clear">
    	<div class="col-left">
            <div class="des">
            	<h5>详细描述</h5>
            	<?php echo $content;?>
				<?php if($rs[map]) { ?>
				<h5>地图位置</h5>
				<?php echo $map;?>
				<?php } ?>
            </div>
            <ul class="pic picbig clear">
			<?php $n=1;if(is_array($photos)) foreach($photos AS $photo) { ?>
				<li><div class="img-wrap"><a href="<?php echo $photo['url'];?>" title="<?php echo $photo['alt'];?>" target="_blank"><img src="<?php echo $photo['url'];?>" width="120" height="160" /></a></div></li>
			<?php $n++;}unset($n); ?>
            </ul>
        </div>
        <div class="col-right">
        	<div class="category-sub">
        	<h5>推荐信息</h5>
            <ul>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d3146c936b0bbb61d83c4d89437c20&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
			<?php if($data) { ?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><a href="<?php echo $r['url'];?>" class="blue1" title="<?php echo $r['title'];?>" <?php echo $r['style'];?>><?php echo str_cut($r[title],34,'');?></a></li>
			<?php $n++;}unset($n); ?>	
			 <?php } ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>			
            </ul>
        </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sGallery.js"></script>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<script type="text/javascript">
function add_favorite(title) {
	$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
		if(data.status==1)	{
			$("#favorite").html('收藏成功');
		} else {
			alert('请登录');
		}
	});
}
</script>

<?php include template("content","footer"); ?>
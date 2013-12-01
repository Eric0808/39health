<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_product"); ?>
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
	<div class="pbloading2" align="center">
 
    <div class="proleftbox">
    <div class="navbar">
	<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> <a href="<?php echo $url;?>"><?php echo $title;?></a>
	</div>
    <div class="proinfo">
    <div class="proinfotitle"><?php echo $title;?></div>

<div class="proxq">
<div class="proinfopic"><img src="<?php echo $thumb;?>" width="324" height="305"></div>
<div class="proinfopicright">
<div class="proright_title"><?php echo $title;?></div>
<div class="proright_list">本店售价：<font color="#FF0000" style="font-weight:bold">￥<?php echo $price;?></font></div>
<div class="proright_list">商品货号：<?php echo $product_num;?></div>
<div class="proright_list">累计售出：355件&nbsp;&nbsp;商品点击数：<font color="red" id="hits">0</font></div>
<div class="proright_listbuy"><a href="javascript:void(0);" onclick="add_buycar(this, '<?php echo $id;?>', '<?php echo $modelid;?>');"><img src="<?php echo IMG_PATH;?>product/buy.jpg" width="142" height="44"></a>
<a href="javascript:void(0);" onclick="add_buycar(this, '<?php echo $id;?>', '<?php echo $modelid;?>', '1');"><img src="<?php echo IMG_PATH;?>product/buy.jpg" width="142" height="44"></a>
</div>
</div>

<div style="clear:both;"></div>

</div>
<div class="spxqbanner"><img src="<?php echo IMG_PATH;?>product/spqx.jpg" ></div>
<div class="sqxqcontent">
<?php echo $content;?>
<ul class="pic picbig clear">
<?php $n=1;if(is_array($photos)) foreach($photos AS $photo) { ?>
	<li><div class="img-wrap"><a href="<?php echo $photo['url'];?>" title="<?php echo $photo['alt'];?>" target="_blank"><img src="<?php echo $photo['url'];?>" width="120" height="160" /></a></div></li>
<?php $n++;}unset($n); ?>
</ul>
</div>

    </div>
    </div>

    <div class="prorightbox">
    <div class="protightitle">热门推荐</div>
    <div class="tjbox">

	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f0bea322055568ec771e06762033f04&action=lists&catid=%24catid&num=11&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'11',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<div class="tjlist">
    <div class="tjlist_pic"><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" onerror="this.src='<?php echo $r['thumb'];?>' width="80" height="75"></a></div>
    <div class="tjlist_right">
    <div class="tj_title"> <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],34,'');?></a></div>
<div class="tj_price">￥<?php echo $r['price'];?></div>
<div class="tj_ysc">已经售出<font color="#FF0000">38328</font>笔</div>
    </div>
    <div style="clear:both;"></div>
    </div>
	<?php $n++;}unset($n); ?>	
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    
    <div style="clear:both;"></div>
    </div>
    
     <div class="protightitle">最新商品</div>
     <div class="tjbox">
    
    <div class="tjlist">
    <div class="tjlist_pic"><a href="#"><img src="<?php echo IMG_PATH;?>product/323.jpg" width="80" height="75"></a></div>
    <div class="tjlist_right">
    <div class="tj_title"> <a href="#">哥伦比亚 Columbia 8-20 青年三合一冲锋衣</a></div>
<div class="tj_price">￥388元</div>
<div class="tj_ysc">已经售出<font color="#FF0000">38328</font>笔</div>
    </div>
    <div style="clear:both;"></div>
    </div>
    <div style="clear:both;"></div>
    </div>
    </div>
    <div style="clear:both;"></div>
    </div>
</div>	<!--content end-->

<div class="show-buycar" id="show-buycar">
	<div class="title"><a href="javascript:;" onclick="$('.show-buycar').hide();" class="close">关闭</a><strong>提示</strong></div>
    <div class="content">
    	<h2>已成功添加到购物车！</h2>
        <p>购物车里已有 <font color="#FF0000" class="fb" id="product_num">0</font> 件商品。总价 <font color="#FF0000" class="fb f20" id="product_fee">0.00</font> 元。</p>
        <p class="bottom"><a href="<?php echo APP_PATH;?>index.php?m=yp&c=index&a=buycar_list" class="sbtn ib">去购物车结算</a></p>
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

function add_buycar(obj, id, modelid, buy) {
	var os = $(obj);
	$.get('<?php echo APP_PATH;?>index.php', {m:'yp', c:'index', a:'buycar', id:id, modelid:modelid, random:Math.random()}, function(data){
		if (data=='1') {
			alert('此商品不存在或已下架！');
		} else if (data=='2') {
			alert('不可购买自己的商品！');
		} else if(data=='3') {
			if (buy) {
				window.location.href="<?php echo APP_PATH;?>index.php?m=yp&c=index&a=buycar_list";
			} else {
				alert('商品已经添加到购物车！');
			}
		} else {
			if (buy) {
				window.location.href="<?php echo APP_PATH;?>index.php?m=yp&c=index&a=buycar_list";
			} else {
				var obj = eval('(' + data + ')');
				$('#product_num').html(obj.num);
				$('#product_fee').html(obj.total);
				var showBuycar=$(".show-buycar"),offset =os.offset();
				showBuycar.css({"position":"absolute","z-index":"100",left:offset.left,top:offset.top+35});
				if(showBuycar.css("display")=="none"){
					showBuycar.show();
				}else{
					showBuycar.hide();
				}
				$('#buy_show').show();
				$('#buy_show_num').html(obj.num);
			}
		}
	});
}

$.get('<?php echo APP_PATH;?>index.php', {m:'yp', c:'index', a:'get_buycar', random:Math.random()},function(data){
	var obj = eval('(' + data + ')');
	if (obj.num) {
		$('#buy_show').show();
		$('#buy_show_num').html(obj.num);
	}
});
</script>

<?php include template("content","footer_product"); ?>
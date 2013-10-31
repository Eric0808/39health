<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_product"); ?>
<div id="etao-second-sub-nav" >
	    <ul class="nav-item-list clear-fix">
        <li class="nav-second-item  first">
            <a target="_blank" class="sub-nav-link" href="#">导航一</a>
        </li>
        <li class="nav-second-item  now  ">
            <a target="_blank" class="sub-nav-link" href="#">导航二</a>
        </li>
        <li class="nav-second-item">
            <a target="_blank" class="sub-nav-link" href="#">导航三</a>
        </li>
		<li class="nav-second-item  ">
            <a target="_blank" class="sub-nav-link" href="#">导航四</a>
        </li>
       
       
    </ul>
    <div class="nav_new"><img src="<?php echo IMG_PATH;?>product/T19ihrFbJhXXX6Ya_d-29-18.gif" title="NEW"></div>
</div>
		<div id="content">
	<div class="pbloading2" align="center">
 
    <div class="proleftbox">
    <div class="navbar">首页>在线商城>商品详情</div>
    <div class="proinfo">
    <div class="proinfotitle">哥伦比亚 Columbia 8-20 青年三合一冲锋衣</div>

<div class="proxq">
<div class="proinfopic"><img src="<?php echo IMG_PATH;?>product/pso.jpg" width="324" height="305"></div>
<div class="proinfopicright">
<div class="proright_title">哥伦比亚 Columbia 8-20 青年三合一冲锋衣</div>
<div class="proright_list">本店售价：<font color="#FF0000" style="font-weight:bold">￥399.00</font>   &nbsp;市场价格：<font color="#999999" style="text-decoration:line-through">￥499.00</font></div>
<div class="proright_list">商品货号：SNGKJ077765332</div>
<div class="proright_list">商品重量： 30KG</div>
<div class="proright_list">累计售出：355件&nbsp;&nbsp;商品点击数：87554</div>
<div class="proright_listbuy"><a href="#"><img src="<?php echo IMG_PATH;?>product/buy.jpg" width="142" height="44"></a></div>
</div>

<div style="clear:both;"></div>

</div>
<div class="spxqbanner"><img src="<?php echo IMG_PATH;?>product/spqx.jpg" ></div>
<div class="sqxqcontent"><img src="<?php echo IMG_PATH;?>product/ddd.jpg" width="599" height="696"></div>

    </div>
    </div>

    <div class="prorightbox">
    <div class="protightitle">热门推荐</div>
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

<?php include template("content","footer_product"); ?>
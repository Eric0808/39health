<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('yp', 'header'); ?>
<!--main-->
<div class="main clear">
	<div class="crumbs" style="margin-bottom:0"><a href="<?php echo APP_PATH;?>">首页</a><span> &gt; </span><a href="<?php echo get_yp_url();?>">企业黄页</a> &gt; <a href="<?php echo get_yp_url('model', $this->setting_models[73]);?>">产品</a> &gt; 我的购物车</div>
    <div class="bk10"></div>
  <div class="shopping-order">
    	<div class="order-1 on"></div><div class="order-2"></div><div class="order-3"></div>
    </div>
<table width="100%" class="shopping-table" border="0">
    <thead>
      <tr>
        <td width="120">商品编号</td>
        <td>商品名称</td>
        <td width="140">价格</td>
        <td width="80">商品数量</td>
        <td width="70">删除商品</td>
      </tr>
    </thead>
    <tbody>
	<?php $total_fee = 0.00;?>
	<?php $n=1;if(is_array($products)) foreach($products AS $p) { ?>
	<?php $total_fee += $p['price']*$p['quantity']?>
      <tr align="center" id="pntr_<?php echo $p['id'];?>">
        <th>PN<?php echo str_pad($p['id'], 5, 0, STR_PAD_LEFT);?></th>
        <td style="padding:8px; text-align:left;vertical-align:middle;" ><a target='_blank' href='<?php echo $p['url'];?>' ><img src='<?php echo thumb($p['thumb'], 50, 50);?>' style="border:1px solid #DDDDDD; margin-right:8px"/></a><a target='_blank' href='<?php echo $p['url'];?>' style="vertical-align:top"><?php echo $p['title'];?></a></td>
        <td style="color:#FF0000;font-weight:bold;font-family:verdana;">￥<?php echo $p['price'];?></td>
        <td><span style='display:'>
<a href='javascript:void(0);' title='减一' onclick="changeBar('-','<?php echo $p['id'];?>')" style='margin-right:2px;'><img style='display:inline' src='<?php echo IMG_PATH;?>yp/bag_close.gif' border='none' /></a><input type='text' id='btn_cha_<?php echo $p['id'];?>' name='txtChange<?php echo $p['id'];?>' maxlength='4' style='width:30px' class="input-text text-c" onblur="changeSkuInSuitCount(this.value,'<?php echo $p['id'];?>');" value="<?php echo $p['quantity'];?>" /><a href='javascript:void(0);' title='加一' onclick="changeBar('+','<?php echo $p['id'];?>')" style='margin-left:2px;'><img style='display:inline' src='<?php echo IMG_PATH;?>yp/bag_open.gif' border='none' /></a>
</span></td>
        <td><a href="javascript:void(0);" onclick="changeBar('delete','<?php echo $p['id'];?>')">删除</a></td>
      </tr>
	<?php $n++;}unset($n); ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="6">
            <p class="f14"><strong>商品总价格：</strong><span class="font-fixh f18" id="total_fee">￥<?php echo substr((string)($total_fee+0.001), 0, -1);?> 元</span></p>
        </td>
      </tr>
  	</tfoot>
</table>
	<div class="shopping-btn">
    	<input type="button" value="" onclick="javascript:window.location='<?php echo HTTP_REFERER;?>'" class="continue-btn" /><input type="button" class="set-btm" value="" onclick="javascript:window.location='<?php echo APP_PATH;?>index.php?m=yp&c=index&a=orderinfo'" />
    </div>
</div>
<script type="text/javascript">
	function changeBar(sign, id) {
		var quantity = $('#btn_cha_'+id).val();
		if (sign=='-') {
			if (quantity==0) {
				alert('您输入的数字已经超出的最小值');
				return false;
			}
			$('#btn_cha_'+id).val(parseInt(quantity)-1);
			if (quantity==1) {
				if (confirm('确定不购买该商品？')) {
					$.get('<?php echo APP_PATH;?>index.php', {m:'yp', c:'index', a:'get_buycar', action:'delete', id:id, random:Math.random()}, function(data){
						if (data=='1') {
							alert('操作过程中参数传递错误，请重新操作');
						} else {
							$('#pntr_'+id).remove();
							var obj = eval('(' + data + ')');
							if (obj.total==null) {
								$('#total_fee').html('￥0.00 元');
							} else {
								$('#total_fee').html('￥'+obj.total+' 元');
							}
						}
					});
				} else {
					$('#btn_cha_'+id).val(1);
				}
				return false;
			}
		} else if(sign=='+') {
			$('#btn_cha_'+id).val(parseInt(quantity)+1);
		}
		$.get('<?php echo APP_PATH;?>index.php', {m:'yp', c:'index', a:'get_buycar', action:sign, id:id, random:Math.random()},function(data){
			var obj = eval('(' + data + ')');
			if (sign=='delete'){
				$('#pntr_'+id).remove();
			}
			if (obj.total==null) {
				$('#total_fee').html('￥0.00 元');
			} else {
				$('#total_fee').html('￥'+obj.total+' 元');
			}
		});
	}

	function changeSkuInSuitCount(quantity, id) {
		if (quantity==0){
			if (confirm('确定不购买该商品？')) {
				$.get('<?php echo APP_PATH;?>index.php', {m:'yp', c:'index', a:'get_buycar', action:'delete', id:id, random:Math.random()}, function(data){
					if (data=='1') {
						alert('操作过程中参数传递错误，请重新操作');
					} else {
						$('#pntr_'+id).remove();
						var obj = eval('(' + data + ')');
						if (obj.total==null) {
							$('#total_fee').html('￥0.00 元');
						} else {
							$('#total_fee').html('￥'+obj.total+' 元');
						}
					}
				});
			} else {
				$('#btn_cha_'+id).val(1);
			}
			return false;
		}
		$.get('<?php echo APP_PATH;?>index.php', {m:'yp', c:'index', a:'get_buycar', action:'set', id:id, quantity:quantity, random:Math.random()},function(data){
			var obj = eval('(' + data + ')');
			if (obj.total==null) {
				$('#total_fee').html('￥0.00 元');
			} else {
				$('#total_fee').html('￥'+obj.total+' 元');
			}
		});
	}
</script>
<?php include template('yp', 'footer'); ?>
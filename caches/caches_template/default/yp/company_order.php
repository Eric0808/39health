<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('yp', 'member_header'); ?>
<div id="memberArea">
	<?php include template('yp', 'member_left'); ?>
<div class="col-auto">
<div class="col-1 ">
<div class="tab-but cu-span"><a href="<?php echo APP_PATH;?>index.php?m=yp&c=business&a=pay&t=4"<?php if(!is_numeric($status)) { ?> class="on"<?php } ?>><span>全部订单</span></a><a href="<?php echo APP_PATH;?>index.php?m=yp&c=business&a=pay&status=1&t=4"<?php if($status==1) { ?> class="on"<?php } ?>><span>已发货订单</span></a><a href="<?php echo APP_PATH;?>index.php?m=yp&c=business&a=pay&status=0&t=4"<?php if($status===0) { ?> class="on"<?php } ?>><span>未发货订单</span></a></div>
<div class="content">
<table width="100%" cellspacing="0"  class="table-list">
        <thead>
            <tr>
            <th width="15%">订单号</th>
            <th width="10%">商品名</th>
            <th width="10%">联系电话</th>
			<th width="10%">金额</th>
			<th width="8%">状态</th>
			<th width="5%"> </th>
            </tr>
        </thead>
    <tbody>
	<?php $n=1;if(is_array($data)) foreach($data AS $info) { ?> 
	<tr>
	<td width="15%" align="center"><?php echo $info['order_sn'];?></td>
	<td  width="30%" align="center"><?php echo $info['contactname'];?></td>
	<td width="10%" align="center"><?php echo $info['telephone'];?></td>
	<td width="10%" align="center"><?php echo $info['money'];?></td>
	<td width="8%" align="center"><?php if($info['status']==0) { ?><span style="color:#f00">等待发货</span><?php } else { ?><span style="color:#BAB5AB">已发货</span><?php } ?></td>
	<td width="5%" align="center"><a href="<?php echo APP_PATH;?>index.php?m=yp&c=business&a=check_pay&id=<?php echo $info['id'];?>">详情</a></td>
	</tr>
	<?php $n++;}unset($n); ?>
    </tbody>
    </table>

 <div id="pages"> <?php echo $pages;?></div>
</div>
<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
</div>

</div>
</div>
<?php include template('member', 'footer'); ?>
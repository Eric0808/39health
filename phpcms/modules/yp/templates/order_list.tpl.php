<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header_order', 'admin');?>
<div class="subnav">
 <div class="content-menu ib-a blue line-x">
 <a href=<?php if (!isset($_GET['status'])) {?>'javascript:;' class="on"<?php } else {?>'index.php?m=yp&c=admin_orders&a=pay&t=3<?php }?>'><em>全部订单</em></a><span>|</span>
 <a href=<?php if (isset($_GET['status']) && $_GET['status']==1) {?>'javascript:;' class="on"<?php } else {?>'index.php?m=yp&c=admin_orders&a=pay&status=1&t=3<?php }?>'>已发货订单</a><span>|</span>
 <a href=<?php if (isset($_GET['status']) && $_GET['status']==0) {?>'javascript:;' class="on"<?php } else {?>'index.php?m=yp&c=admin_orders&a=pay&status=0&t=3<?php }?>'>未发货订单</a><span>|</span>
 </div>
</div>
<style type="text/css">
	html{_overflow-y:scroll}
</style>
<div class="pad_10">
<div class="bk10"></div>
<div class="table-list">
    <table width="100%" cellspacing="0" >
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
   <?php 
	foreach($data as $key=>$var){
	?>
	<tr>
	<td width="15%" align="center"><?php  echo $var['order_sn']?></td>
	<td  width="30%" align="center"><?php  echo $var['contactname']?></td>
	<td width="10%" align="center"><?php  echo $var['telephone'];?></td>
	<td width="10%" align="center"><?php  echo $var['money'];?></td>
	<td width="8%" align="center"><?php if($var['status']==0){?><span style="color:#f00">等待发货</span><?php }else{?><span style="color:#BAB5AB">已发货</span><?php }?></td>
	<td width="5%" align="center"><a href="<?php echo APP_PATH?>index.php?m=yp&c=admin_orders&a=check_pay&id=<?php  echo $var['id'];?>">详情</a></td>
	</tr>
	 <?php 
		}
	?>
    </tbody>
    </table>
	<div id="pages"> <?php echo $pages;?></div>
  </div>
</div>
</body>
</html>

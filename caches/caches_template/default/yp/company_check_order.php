<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('yp', 'member_header'); ?>
<div id="memberArea">
<?php include template('yp', 'member_left'); ?>
<div class="col-auto">

<div class="col-1 ">
<h6 class="title">订单详情</h6>
<div class="content">
<div class="point" id='exchange'>
        	<a href="javascript:hide_element('exchange');" hidefocus="true" class="close"><span>关闭</span></a>
            <div class="content"><BR><p>1、请仔细核对订单信息</p>
			<p>2、配送信息不完整的，请及时管理员取得信息。</p>
            </div>
            <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
        </div>
<table width="100%" cellspacing="0" class="table_form">
    <tr>
       <th width="80">订单号：</th>        
       <td style="padding:0 0 0 10px"><font style="font-weight:700"><?php echo $info['order_sn'];?></font> </td>
    </tr>
     <tr>
	<th>总金额：</th>
	<td style="padding:0 0 0 10px"><font style="color:#F00; font-size:22px;font-family:Georgia,Arial; font-weight:700"><?php echo $info['money'];?></font> 元</td>
     </tr>
     <tr>
       <th>购买商品：</th>
       <td>
       <?php $n=1;if(is_array($info['products'])) foreach($info['products'] AS $pr) { ?>
		<div class="temp-list">
            <a href="<?php echo $pr['url'];?>" target="_blank" class="img"><img src="<?php echo $pr['thumb'];?>" width="98" height="98"></a>
            <ul>
                <li><a href="<?php echo $pr['url'];?>" title="<?php echo $pr['title'];?>" target="_blank"><?php echo str_cut($pr['title'], 26);?></a></li>
                <li>单价：￥<?php echo $pr['price'];?></li>
                <li>订购数量：<?php echo $pr['quantity'];?></li>
            </ul>
        </div>
        <?php $n++;}unset($n); ?>
	   </td>
     </tr>
  <tr>
       <th>配送信息：</th>
       <td>     
		<label class="payment-show"> <em>收货人姓名：<?php echo $info['address']['truename'];?></em></label>
        <label class="payment-show"> <em>省 市：<?php echo $info['address']['province'];?></em></label>
        <label class="payment-show"> <em>详细地区：<?php echo $info['address']['address'];?></em></label>
        <label class="payment-show"> <em>手机电话：<?php echo $info['address']['mobile'];?></em></label>
        <label class="payment-show"> <em>固定电话：<?php echo $info['address']['telephone'];?></em></label>
        <label class="payment-show"> <em>Email：<?php echo $info['address']['email'];?></em></label>
        <label class="payment-show"> <em>邮 编：<?php echo $info['address']['code'];?></em></label>
	   </td>
     </tr>
  <tr>		
    <th>客户备注：</th>
       <td><?php echo $info['usernote'];?></td>
     </tr>
     <tr>
       <th>支付时间：</th>
       <td><?php echo date('Y-m-d H:i:s', $info['addtime']);?></td>
     </tr>
     <tr>
       <th>邮递单号：</th>
       <td><?php echo $info['postal'];?></td>
     </tr>
	 
   </table>
   </div>
   <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
   </div>
   </div>
</div>
<?php include template('member', 'footer'); ?>
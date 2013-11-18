<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<div id="memberArea">
	<?php include template('member', 'account_manage_left'); ?>
	<div class="col-auto">
		<div class="col-1 ">
			<h5 class="title"><?php echo L('memberinfo');?>：</h5>
			<div class="content">
			<div class="col-1 member-info">
			<div class="content">
				<div class="col-left himg">
					<img src="<?php echo $avatar['90'];?>" width="60" height="60" onerror="this.src='<?php echo $phpsso_api_url;?>/statics/images/member/nophoto.gif'">
				</div>
				<div class="col-auto">
					<h5><?php if($memberinfo['vip']) { ?><img src="<?php echo IMG_PATH;?>icon/vip.gif"><?php } elseif ($memberinfo['overduedate']) { ?><img src="<?php echo IMG_PATH;?>icon/vip-expired.gif" title="<?php echo L('overdue');?>，<?php echo L('overduedate');?>：<?php echo format::date($memberinfo['overduedate'],1);?>"><?php } ?>
					<?php if($memberinfo['nickname']) { ?> <?php echo $memberinfo['nickname'];?> <?php } else { ?> <?php echo $memberinfo['username'];?><?php } ?> <?php if($memberinfo['email']) { ?>（<?php echo $memberinfo['email'];?>）<?php } ?></h5>
					<p class="blue">
					<?php echo L('member_group');?>：<?php echo $memberinfo['groupname'];?>，
					<?php echo L('account_remain');?>：<font style="color:#F00; font-size:22px;font-family:Georgia,Arial; font-weight:700"><?php echo $memberinfo['amount'];?></font> <?php echo L('unit_yuan');?>，
					<?php echo L('point');?>：<font style="color:#F00; font-size:12px;font-family:Georgia,Arial; font-weight:700"><?php echo $memberinfo['point'];?></font> <?php echo L('unit_point');?><?php if($memberinfo['vip']) { ?>，vip<?php echo L('overduedate');?>：<font style="color:#F00; font-size:12px;font-family:Georgia,Arial; font-weight:700"><?php echo format::date($memberinfo['overduedate'],1);?></font><?php } ?>
					</p>
				</div>
			</div>
		</div>
		<div class="bk10"></div>
<?php if($groupid) { ?>
		<div class="col-1 ">
			<h5 class="title"><?php echo L('member').L('allowupgrade');?></h5>
			<div class="content">
			<form method="post" action="" id="myform" name="myform">
				<input name="groupid" value="<?php echo $groupid;?>" type="hidden" />
				<table width="100%" cellspacing="0"  class="table-list">
					<thead>
						<tr>
						<th width="50"><?php echo L('member_group');?></th>
						<th width="100"><?php echo L('upgrade_price');?></th>
						<th width="100"><?php echo L('upgrade_date');?></th>
						<th width="300"><?php echo L('cost');?></th>
						<th width="90"><?php echo L('operation');?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td align="left"><?php echo $grouplist[$groupid]['name'];?></td>
						<td align="left">
						<input type="radio" name='upgrade_type' value="0
" checked><?php echo $grouplist[$groupid]['price_y'];?>/<?php echo L('year');?><br /><input type="radio" name='upgrade_type' value="1
"><?php echo $grouplist[$groupid]['price_m'];?>/<?php echo L('month');?><br /><input type="radio" name='upgrade_type' value="2
"><?php echo $grouplist[$groupid]['price_d'];?>/<?php echo L('day');?></td>
						<td align="center"><input type="text" name="upgrade_date" id="upgrade_date" class="input-text" size="4"><font color="red" id="unit"><?php echo L('year');?></font></td>
						<td align="center"><span id="cost">0</span> <?php echo L('unit_yuan');?><span id="pay" style="display:none">，<a href="index.php?m=pay&c=deposit&a=pay"><font color="red" id="unit">点击充值</font></a></span></td>
						<td align="center"><input name="dosubmit" type="submit" id="dosubmit" value="<?php echo L('buy');?>" class="button"></td>
						</tr>
					</tbody>
				</table>			
			</form>
			</div>
<script language="JavaScript">
<!--
$(document).ready(function() {
	$(":input[type='radio']").click(function() {
		var unitarr = new Array("<?php echo L('year');?>","<?php echo L('month');?>","<?php echo L('day');?>");
		var key = parseInt($(this).val());
		$("#unit").html(unitarr[key]);
		$("#upgrade_date").val('');
		$("#cost").html('');
	});
	$("#upgrade_date").keyup(function() {
		var prices = Array();
		prices['0'] = <?php echo $grouplist[$groupid]['price_y'];?>;
		prices['1'] = <?php echo $grouplist[$groupid]['price_m'];?>;
		prices['2'] = <?php echo $grouplist[$groupid]['price_d'];?>;
		$(this).val($(this).val().replace(/[^\d]/g,''));
		var unit = parseInt($("input[name=upgrade_type]:checked").val());
		var price = prices[unit];
		if(<?php echo $memberinfo['amount'];?> < price*$(this).val()) {
			$("#cost").html('<?php echo L('not_sufficient_funds');?>'+price*$(this).val());
			$("#pay").show();
		} else {
			$("#cost").html(price*$(this).val());
		}
	});
});
//-->
</script>
<?php } else { ?>
		<div class="col-1 ">
			<h5 class="title"><?php echo L('member').L('allowupgrade');?></h5>
			<div class="content">
			<form method="post" action="" id="myform" name="myform">
				<table width="100%" cellspacing="0"  class="table-list">
					<thead>
						<tr>
						<th width="50"><?php echo L('member_group');?></th>
						<th><?php echo L('description');?></th>
						<th width="100"><?php echo L('upgrade_price');?></th>
						<th width="90"><?php echo L('operation');?></th>
						</tr>
					</thead>
					<tbody>
						<?php $n=1; if(is_array($grouplist)) foreach($grouplist AS $k => $v) { ?>
						<?php if($v['point'] > $memberinfo['grouppoint']) { ?>
						<tr>
						<td align="left"><?php echo $v['name'];?></td>
						<td align="left"><?php echo $v['description'];?></td>
						<td align="center">
						<?php echo $v['price_y'];?>/<?php echo L('year');?><br /><?php echo $v['price_m'];?>/<?php echo L('month');?><br /><?php echo $v['price_d'];?>/<?php echo L('day');?></td>
						<td align="center"><a href="index.php?m=member&c=index&a=account_manage_upgrade&groupid=<?php echo $v['groupid'];?>">升级</a></td>
						</tr>
						<?php } ?>
						<?php $n++;}unset($n); ?>
					</tbody>
				</table>			
			</form>
			</div>
<?php } ?>
		</div>
	</div>
</div>
</div>
<div class="clear"></div>

<?php include template('member', 'footer'); ?>
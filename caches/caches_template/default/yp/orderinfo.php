<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('yp', 'header'); ?>
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<!--main-->
<div class="main clear">
	<div class="crumbs" style="margin-bottom:0"><a href="<?php echo APP_PATH;?>">首页</a><span> &gt; </span><a href="<?php echo get_yp_url();?>">企业黄页</a> &gt; <a href="<?php echo get_yp_url('model', $this->setting_models[73]);?>">产品</a> &gt; 我的购物车</div>
    <div class="bk10"></div>
  <div class="shopping-order">
    	<div class="order-1"></div><div class="order-2 on"></div><div class="order-3"></div>
    </div>
<div class="ver-form">
    <h3>收货人信息 <a href="javascript:void(0);" id="navigation_info" class="f12 fn blue"<?php if(!$address['truename']) { ?> style="display:none"<?php } ?>>(修改)</a></h3>
    <table width="100%" border="0" id="show_info"<?php if(!$address['truename']) { ?> style="display:none"<?php } ?> class="table_form">
      <tr>
        <th width="100">收货人姓名：</th>
        <td id="info_name"><?php echo $address['truename'];?></td>
      </tr>
      <tr>
        <th>省　　市：</th>
        <td id="info_province"><?php echo $address['province'];?></td>
      </tr>
      <tr>
        <th>地　　址：</th>
        <td id="info_address"><?php echo $address['address'];?></td>
      </tr>
	  <tr>
        <th>手机号码：</th>
        <td id="info_mobile"><?php echo $address['mobile'];?> </td>
      </tr>
	  <tr>
        <th>固定电话：</th>
        <td id="info_telephone"><?php echo $address['telephone'];?> </td>
      </tr>
	  <tr>
        <th > email：</th>
        <td id="info_email"><?php echo $address['email'];?> </td>
      </tr>
      <tr>
        <th>邮政编码：</th>
        <td id="info_code"><?php echo $address['code'];?></td>
      </tr>
    </table>
    <table width="100%" border="0" id="show_form"<?php if($address['truename']) { ?> style="display:none;"<?php } ?> class="table_form">
      <tr>
        <th width="100"><span style="color:#f00">*</span> 收货人姓名：</th>
        <td><input type="text" name="info[truename]" value="<?php echo $address['truename'];?>" id="truename" size='15' class="input-text"/></td>
      </tr>
      <tr>
        <th><span style="color:#f00">*</span> 省　　市：</th>
        <td><input type="text" name="info[province]" size="20" value="<?php echo $address['province'];?>" id="province" class="input-text" /></td>
      </tr>
      <tr>
        <th><span style="color:#f00">*</span> 地　　址：</th>
        <td><input type="text" size="40" name="info[address]" value="<?php echo $address['address'];?>" id="address" class="input-text" /> </td>
      </tr>
	  <tr>
        <th><span style="color:#f00">*</span> 手机号码：</th>
        <td><input type="text" name="info[mobile]" size="25" value="<?php echo $address['mobile'];?>" id="mobile" class="input-text" /> 或者 固定电话：<input type="text" size="25" name="info[telephone]" id="telephone" value="<?php echo $address['telephone'];?>" class="input-text" /></td>
      </tr>
	  <tr>
        <th> email：</th>
        <td><input type="text" size="40" name="info[email]" id="email" value="<?php echo $address['email'];?>" class="input-text" /> </td>
      </tr>
      <tr>
        <th>邮政编码：</th>
        <td><input type="text" size="10" name="info[code]" id="code" value="<?php echo $address['code'];?>" class="input-text"/></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input type="submit" class="button" onclick="ChangeInfo();" value="保存信息" /> <span style="color:#f00">收货信息修改后，请注意保存！</span></td>
      </tr>
    </table>
	<form id="myform" method="POST" action="<?php echo APP_PATH;?>index.php?m=yp&c=index&a=pay" name="myform" >
	<h3>订单备注 <a href="javascript:void(0);" id="note_show" class="f12 fn blue">(展开)</a></h3> 
	<table width="100%" border="0" class="table_form">
	  <tr>
        <th width="100"> </th>
        <td id="usernote" style="display:none;"><textarea rows="5" style='width:300px' name="usernote"></textarea> 限120字以内</td>
      </tr>
	</table>
    <h3><span class="fn f12 rt"><a href="<?php echo APP_PATH;?>index.php?m=yp&c=index&a=buycar_list">返回修改购物车</a></span>商品清单</h3> 
    <table width="99%" class="shopping-table" border="0">
    <thead>
      <tr>
        <td width="120">商品编号</td>
        <td>商品名称</td>
        <td width="126">价格</td>
        <td width="80">商品数量</td>
      </tr>
    </thead>
    <tbody>
	<?php $total_fee = 0;?>
	<?php $n=1;if(is_array($products)) foreach($products AS $p) { ?>
	<?php $total_fee += $p['price']*$p['quantity']?>
      <tr>
        <td class="text-c">PN<?php echo str_pad($p['id'], 5, 0, STR_PAD_LEFT);?></td>
        <td style="padding:2px 0 2px 5px; text-align:left;vertical-align:middle;" ><a target='_blank' href='<?php echo $p['url'];?>' ><?php echo $p['title'];?></a></td>
        <td style="color:#FF0000;font-weight:bold;font-family:verdana;text-align:center;"><?php echo intval($p['price']);?>点</td>
        <td class="text-c"><?php echo $p['quantity'];?></td>
      </tr>
	  <?php $n++;}unset($n); ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="6">
			<p>您账户余额：<span style="color:#FF0000;font-weight:bold;font-family:verdana;"><?php echo $amounts;?>点</span><?php if($total_fee>$amounts) { ?>。余额不足，<a href="<?php echo APP_PATH;?>index.php?m=pay&c=deposit&a=pay" style="color:#FF0000;" target="_blank">请充值</a> <input type="button" value="充值完成" onclick="javascript:location.reload();" class="button"><?php } ?></p>
            <p class="f14"><strong>商品总价格：</strong><span class="font-fixh f18"><?php echo $total_fee;?> 点</span></p>
        </td>
      </tr>
  	</tfoot>
</table>
<div class="bk10"></div>
</div>

	<div class="shopping-btn" style="text-align:center">
    	<input type="<?php if($total_fee>$amounts) { ?>button<?php } else { ?>submit<?php } ?>" class="set-btms<?php if($total_fee>$amounts) { ?> off<?php } ?>" value=" " />
    </div>
	</form>
</div>
<input type="hidden" id="checkinfo" value="0">
<script type="text/javascript">
	function ChangeInfo() {
		var name = $('#truename').val();
		var province = $('#province').val();
		var address = $('#address').val();
		var mobile = $('#mobile').val();
		var telephone = $('#telephone').val();
		var email = $('#email').val();
		var code = $('#code').val();
		if (name=='') {
			alert('请填写收货人姓名！');
			$('#truename').focus();
			return false;
		}
		if (province=='') {
			alert('请填写收货人所在省市！');
			$('#province').focus();
			return false;
		}
		if (address=='') {
			alert('请填写收货地址！');
			$('#address').focus();
			return false;
		}
		if (mobile=='' && telephone=='') {
			alert('请填写收货人的手机号码或者固定电话！');
			$('#mobile').focus();
			return false;
		}
		$.get('<?php echo APP_PATH;?>index.php', {m:'yp', c:'index', a:'changeaddress', name:name, province:province, address:address, mobile:mobile, telephone:telephone, email:email, code:code}, function(data) {
			if (data=='1') {
				alert('请填写收货人姓名！');
				$('#truename').focus();
				return false;
			}
			if (data=='2') {
				alert('请填写收货人所在省市！');
				$('#province').focus();
				return false;
			}
			if (data=='3') {
				alert('请填写收货地址！');
				$('#address').focus();
				return false;
			}
			if (data=='4') {
				alert('请填写收货人的手机号码或者固定电话！');
				$('#mobile').focus();
				return false;
			}
			if (data=='5') {
				$('#info_name').html(name);
				$('#info_province').html(province);
				$('#info_address').html(address);
				$('#info_mobile').html(mobile);
				$('#info_telephone').html(telephone);
				$('#info_email').html(email);
				$('#info_code').html(code);
				$('#show_info').show();
				$('#truename').val(name);
				$('#province').val(province);
				$('#address').val(address);
				$('#mobile').val(mobile);
				$('#telephone').val(telephone);
				$('#email').val(email);
				$('#code').val(code);
				$('#navigation_info').html('(修改)');
				$('#show_form').hide();
				$('#navigation_info').show();
			}
		});
	}

	$('#navigation_info').click(function(){
		if ($('#show_info').css('display')=='none') {
			$('#show_info').show();
			$('#navigation_info').html('(修改)');
			$('#show_form').hide();
		} else {
			$('#show_info').hide();
			$('#navigation_info').html('(关闭)');
			$('#show_form').show();
		}
	});

	$('#myform').submit(function() {
		total_fee = parseFloat(total_fee);
		var amount = <?php echo $amounts;?>;
		var bool = false;
		$.ajax({url:"<?php echo APP_PATH;?>index.php?m=yp&c=index&a=get_member_address&random="+Math.random(),type:"get",async:false,success:function(data){
			if(data!='1') {
				alert('请填写收货地址！');
			} else {
				bool = true;
			}
		}
		});
		if (bool && total_fee>amount) {
			alert('您账户余额不足，请先充值！');
			window.open('<?php echo APP_PATH;?>index.php?m=pay&c=deposit&a=pay');
		}
		return bool;
	});

	$('#note_show').click(function() {
		if ($('#usernote').css('display')=='none') {
			$('#usernote').show();
			$('#note_show').html('(关闭)');
		} else {
			$('#usernote').hide();
			$('#note_show').html('(展开)');
		}
	}); 
</script>
<?php include template('yp', 'footer'); ?>
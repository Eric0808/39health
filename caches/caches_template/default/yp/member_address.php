<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('yp', 'member_header'); ?>
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<div id="memberArea">
	<?php include template('yp', 'member_left'); ?>
<div class="col-auto">
<div class="col-1 ">
<div class="tab-but cu-span"></div>
<div class="content">
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
</div>
<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
</div>

</div>
</div>
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
	</script>
<?php include template('member', 'footer'); ?>
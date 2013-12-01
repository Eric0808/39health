<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#price").formValidator({onshow:"请输入要提现的金额",onfocus:"提现金额不能为空"}).inputValidator({min:1,max:10000,onerror:"提现金额不能为空"}).regexValidator({regexp:"^(([1-9]{1}\\d*)|([0]{1}))(\\.(\\d){1,2})?$",onerror:"提现金额必须为整数或小数(保留两位小数)"});
	$("#account").formValidator({onshow:"请输入账号",onfocus:"账号不能为空"}).inputValidator({min:1,max:16,onerror:"账号不能为空"});
	$("#contactname").formValidator({onshow:"请输入真实姓名",onfocus:"真实姓名不能为空"}).inputValidator({min:1,max:999,onerror:"真实姓名不能为空"});
	$("#telephone").formValidator({onshow:"请输入电话",oncorrect:"格式正确"}).regexValidator({regexp:"mobile",datatype:"enum",onerror:"错误的电话格式"});	
	$("#email").formValidator({onshow:"请输入email",oncorrect:"格式正确"}).regexValidator({regexp:"email",datatype:"enum",onerror:"错误的emai格式"});	
	$("#code").formValidator({onshow:"请输入验证码",onfocus:"验证码不能为空"}).inputValidator({min:1,max:999,onerror:"验证码不能为空"}).ajaxValidator({
	    type : "get",
		url : "",
		data :"m=pay&c=deposit&a=public_checkcode",
		datatype : "html",
		async:'false',
		success : function(data){	
            if(data == 1)
			{
                return true;
			}
            else
			{
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "验证码错误",
		onwait : "验证中"
	});
})
//-->
</script>
<div id="memberArea">
<?php include template('member', 'left'); ?>
<div class="col-auto">

<div class="col-1 ">
<h6 class="title">提现申请</h6>
<div class="content">
<div class="point" id='exchange'>
        	<a href="javascript:hide_element('exchange');" hidefocus="true" class="close"><span>关闭</span></a>
            <div class="content"><BR><p>1、当前比率：1元 = <?php echo $member_setting['rmb_point_rate'];?>点积分</p>
			<p>2、请认真填写一下信息，以方便管理员和您核实身份！</p>
			<p>3、余额不足时，系统将自动将积分折合余额进行提现！</p>
			</div>
            <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
        </div>

<form name="myform" action="<?php echo APP_PATH;?>index.php?m=pay&c=deposit&a=withdraw_cash" method="post" id="myform">
<table width="100%" cellspacing="0" class="table_form">
    <tr>
       <th width="80">余额：</th>        
       <td style="padding:0 0 0 10px;"><font style="color:#F00; font-size:22px;font-family:Georgia,Arial; font-weight:700"><?php echo $memberinfo['amount'];?></font> 元&nbsp;&nbsp;
	   积分：<font style="color:#F00; font-size:22px;font-family:Georgia,Arial; font-weight:700"><?php echo $memberinfo['point'];?></font>点
	   </td>
	   
    </tr>
	<tr>
       <th width="80">可提额度：</th>        
       <td style="padding:0 0 0 10px;"><font style="color:#F00; font-size:22px;font-family:Georgia,Arial; font-weight:700"><?php echo $max_withdraw;?></font> 元</td>
	   
    </tr>
     <tr>
	<th>提现金额：</th>
	<td><input name="info[price]" type="text" id="price" size="8" value="" class="input-text">&nbsp;元<span id="msgid"></span></td>
     </tr>
  <tr>
	<th>银行信息：</th>
	<td>
	<select name="info[bank]" id="bank">
	<option value="支付宝账号" selected="selected">支付宝账号</option>
	<option value="工商银行">工商银行</option>
	<option value="建设银行">建设银行</option>
	<option value="农业银行">农业银行</option>
	<option value="中国银行">中国银行</option>
	<option value="光大银行">光大银行</option>
	</select>
	</td>
     </tr>
	 <tr>
	<th>账号信息：</th>
	<td><input name="info[account]" type="text" id="account" size="30" class="input-text"><span id="msgid"></span></td>
  </tr>
  <tr>		
    <th>E-mail：</th>
       <td><input name="info[email]" type="text" id="email" size="30"   class="input-text"/></td>
     </tr>
     <tr>
       <th>真实姓名：</th>
       <td><input name="info[name]" type="text" id="contactname" size="30"   class="input-text"/></td>
     </tr>
     <tr>
       <th>手机号：</th>
       <td><input name="info[telephone]" type="text" id="telephone" size="30"  class="input-text"/><span id="msgid1" ></span></td>
     </tr>
     
     <tr>
       <th>备  注：</th>
       <td><textarea name="info[usernote]"  id="usernote" rows="5" cols="50" value=></textarea></td>
     </tr>
     <tr>
       <th>验证码：</th>
       <td><input name="code" type="text" id="code" size="10"  class="input-text"/> <?php echo form::checkcode('code_img','4','14',110,30);?></td>
     </tr>
     <tr>
       <td></td>
       <td colspan="2"><label>
         <input type="submit" name="dosubmit" id="dosubmit" value="确 定" class="button"/>
         </label></td>
     </tr>
   </table>
   </form>
   </div>
   <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
   </div>
   </div>
</div>
<script type="text/javascript">
$(function(){
	$(".payment-show").each(function(i){
		if(i==0){
			$(this).addClass("payment-show-on");
		}
   		$(this).click(
			function(){
				$(this).addClass("payment-show-on");
				$(this).siblings().removeClass("payment-show-on");
			}
		)
 	});
	
})

</script>
<?php include template('member', 'footer'); ?>
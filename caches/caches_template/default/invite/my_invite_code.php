<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<script language="JavaScript">
function copy_clip() {
var e=document.getElementById("invite_code");
e.select();
document.execCommand("Copy");
</script>
<div id="memberArea">
	<?php include template('member', 'account_manage_left'); ?>
	<div class="col-auto">
	
		<div class="point" id='announcement'>
			<a href="javascript:hide_element('announcement');" hidefocus="true" class="close"><span><?php echo L('close');?></span></a>
			<div class="content">
				<strong class="title"><?php echo L('notice');?>：</strong>
				<p>您可将此邀请链接通过邮件或者QQ发送给您的好友注册，还可以获得积分奖励哦！</p>
			</div>
		</div>
       		
		<div class="col-1 ">
			<h5 class="title">我的邀请链接</h5>           
			<div class="content">			
			<input id="invite_code" name="invite_code" value="<?php echo $invite_link;?>" type="text" class="input-text" size="90">&nbsp;<button onclick="copy_clip();">复制内容</button>
			</div>
			<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
		</div>
	</div>
</div>
<div class="clear"></div>
<?php include template('member', 'footer'); ?>
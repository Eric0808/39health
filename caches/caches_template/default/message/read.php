<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#subject").formValidator({empty:true,onshow:"标题，可以为空",onfocus:"请输入标题",oncorrect:"输入正确！",onempty:"不填替标题了吗？"}).inputValidator({min:1,onerror:"请输入标题"});
	$("#con").formValidator({onshow:"请输入内容",onfocus:"内容不能为空"}).inputValidator({min:1,max:999,onerror:"内容不能为空"});
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
<h6 class="title">与  <?php echo $infos['send_from_id'];?> 的短消息记录</h6>
<div class="content">
<form name="myform" action="?m=message&c=index&a=reply" method="post" id="myform">
<table width="100%" cellspacing="0" class="table_form">
	 <?php $userid = get_memberinfo_buyusername($infos['send_from_id'],userid)?>
     <?php $user_pic = get_memberavatar($userid,1,45);?>
     <tr>
       <th><div align=center><img src="<?php echo $user_pic;?>" width="50" height="50" onerror="this.src='<?php echo IMG_PATH;?>member/nophoto.gif'"><br><font color=red><?php echo $infos['send_from_id'];?></font></div></th>
       <td><?php echo $infos['subject'];?> - <?php echo date('Y-m-d H:i:s',$infos['message_time']);?><br><br><?php echo $infos['content'];?></td>
     </tr>
     
     <?php $n=1;if(is_array($reply_infos)) foreach($reply_infos AS $reply_info) { ?>  
     <?php $userid = get_memberinfo_buyusername($reply_info['send_from_id'],userid)?>
     <?php $user_pic = get_memberavatar($userid,1,45);?>
      <tr>
       <th><div align=center><img src="<?php echo $user_pic;?>" width="50" height="50" onerror="this.src='<?php echo IMG_PATH;?>member/nophoto.gif'"></img><br><?php echo $reply_info['send_from_id'];?></div></th>
       <td><?php echo $reply_info['subject'];?> - <?php echo date('Y-m-d H:i:s',$reply_info['message_time']);?><br><br></br><?php echo $reply_info['content'];?></td>
     </tr> 
     <?php $n++;}unset($n); ?>
     
     
         </label></td>
     </tr>
   </table>
   </form>
   </div>
   <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
   </div>
<div class="bk10"></div>
<?php if($infos['send_from_id']!='SYSTEM') { ?>
<div class="col-1 ">
<h5 class="title">回复此消息 </h5>
<div class="content">

<form name="myform" action="?m=message&c=index&a=reply" method="post" id="myform">
<table width="100%" cellspacing="0" class="table_form">
<tr>
<th>标 题：</th>
<td><input name="info[subject]" type="text" id="subject" size="30" value="Re: <?php echo $infos['subject'];?>"  class="input-text"/></td>
</tr> 
<tr>
<th>内 容：</th>
<td><textarea name="info[content]"  id="con" rows="5" cols="50"></textarea></td>
</tr>
<input type="hidden" name="info[replyid]" value="<?php echo $infos['messageid'];?>" /> 
<input type="hidden" name="info[send_to_id]" value="<?php echo $infos['send_from_id'];?>" /> 

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
  <?php } ?>
   </div>
</div> 
<?php include template('member', 'footer'); ?>
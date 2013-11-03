<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<div id="memberArea">
<?php include template('denglu', 'denglu_user_left'); ?>
<div class="col-auto">

  <!---------------------------------------->
  	<link type="text/css" href="phpcms/modules/denglu/style.css" rel="stylesheet" />
	<div class="st_main">
			<!--<p <?php if($op=='set') { ?> class="active" <?php } ?> ><a href="denglu.php?act=dl_user&op=set"><?php echo L('syn_setting');?></a></p>-->		
	    <?php if($op=='set') { ?>
		<script type='text/javascript'>
		function ID(id){
			return document.getElementById(id);
		}
		function toggle_check(mediaID){
			if(ID('all_check_'+mediaID).checked == 1){
					ID('thread_syn_'+mediaID).checked = "checked";
					ID('log_syn_'+mediaID).checked = "checked";
			}else{
				ID('thread_syn_'+mediaID).checked = "";
				ID('log_syn_'+mediaID).checked = "";
		    }
			
	       }
	    
	    </script>
	    <form method='POST' action='denglu.php?act=dl_user&op=save'>
		    <div class="st_text">
			<p><?php echo L('media_syn_setting');?></p>
			<ul class="st_list">
			<?php $n=1;if(is_array($bindusers)) foreach($bindusers AS $v) { ?>
				<li>
				<p class="st_relate"><span class="st_type" style="background:url(denglu/images/denglu_second_icon_<?php echo $v['mediaID'];?>.png) no-repeat;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span><?php echo $v['mediaName'];?></span><?php echo L('syn_content');?></p>
				<p class="st_check">
			 
					<input id="thread_syn_<?php echo $v['mediaID'];?>" name="thread_syn_<?php echo $v['mediaUserID'];?>" type="checkbox" <?php if($v[thread_syn]) { ?>checked="checked"<?php } ?> value='1'/><label for="bbs_check_renren"><?php echo L('forum_thread');?></label>
					<input id="log_syn_<?php echo $v['mediaID'];?>" name="log_syn_<?php echo $v['mediaUserID'];?>" type="checkbox" <?php if($v[log_syn]) { ?>checked="checked"<?php } ?> value='1'/><label for="blog_check_renren"><?php echo L('user_log');?></label>
					<input type="hidden" name="mediaUserID[]" value="<?php echo $v['mediaUserID'];?>">
					<?php if($v[mediaID] == 7) { ?>
					<span style="margin-left:20px;"><?php echo L('renren_auth_tip');?>
						<a style="color:#ff6000" target="_blank" href="http://app.renren.com/apps/authorize.do?api_key=<?php echo $renren_appid;?>&next=&ext_perm=publish_feed&display=noad"><?php echo L('click_here');?></a>
						<?php echo L('auth_over');?>
					</span>
					<?php } ?>
				</p>
			    </li>
			<?php $n++;}unset($n); ?> 
			</ul>
			<?php if($bind_users && $bind_users[0][tag]==1) { ?>
			<div class="st_save"><p class="st_btn"><button type="submit" name="doshare" value="true" class="pn pnc" /><strong><?php echo L('save');?></strong></button></p></div>
			<?php } ?>
			</div>
	    </form>
	    <?php } ?>
	    <?php if($op==false) { ?>
	    <script type='text/javascript'>
		function unbind(muid){
			if(confirm('<?php echo L('unbind_not_return');?>')){
				gounbind(muid);
			}
	    }
	    function gounbind(muid){
			document.getElementById('mediaUserID').value=muid;
			document.getElementById('unbind_form').submit();
	    }
	    </script>
	    <form method='POST' id="unbind_form" action='index.php?m=denglu&c=user&a=unbind'>
		    <div class="st_text" >
			<p><?php echo L('you_can_bind_here');?></p>
				<input type="hidden" name="mediaUserID" value="" id="mediaUserID"/>
				<input type="hidden" name="unbind" value="true"/>
				<ul class="st_list">
					<?php $n=1;if(is_array($bind_users)) foreach($bind_users AS $v) { ?>
					<li>
					<p><span class="st_type" style="background:url(phpcms/modules/denglu/images/denglu_second_icon_<?php echo $v['mediaID'];?>.png) no-repeat;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span></span><?php echo L('account');?><span><?php echo str_cut($v[screenName],16,'');?></span></p>
					<?php if($v['tag']==1) { ?>
						<p class="st_state"><span class="st_state_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo L('binding');?></p>
						<p class="st_btn"><a href="javascript:unbind(<?php echo $v['mediaUserID'];?>);"><?php echo L('unbind');?></a></p>
					<?php } else { ?>
						<p class="st_state"><span class="st_state_icon">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><?php echo L('no_bind');?></p>
						<p class="st_btn"><a href="index.php?m=denglu&c=user&a=olbind_have&t=3" ><?php echo L('do_bind_account');?></a></p>
					<?php } ?>
				    </li>
				    <?php $n++;}unset($n); ?>
				</ul>
			</form>
			<?php if($check_media) { ?>
			<div class="st_more">
				<p><?php echo L('the_others_you_can_bind');?></p>
			    <ul class="layout">
			    <?php $n=1;if(is_array($check_media)) foreach($check_media AS $ret) { ?>
				<li>
					<span class="st_type" style="background:url(phpcms/modules/denglu/images/denglu_second_icon_<?php echo $ret['mediaID'];?>.png) no-repeat;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<a href="index.php?m=denglu&c=user&a=olbind&mid=<?php echo $ret['mediaNameEn'];?>" ><?php echo $ret['mediaName'];?></a><span class="st_margin">|</span>
				</li>
			    <?php $n++;}unset($n); ?>
			    </ul>
			</div>
			<?php } ?>
		    </div>
	    </form>
		<?php } ?>

		<!---------------------------------------------------------------------------->
		<?php if($op=='olbind_have' || $op=='olbind_haveno') { ?>
		<script type="text/javascript" src="<?php echo JS_PATH;?>member_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<?php if(CHARSET=='utf-8') { ?>
<?php include template('denglu','js_utf'); ?>
<?php } else { ?>
<?php include template('denglu','js_gbk'); ?>
<?php } ?>
	<script language="JavaScript">
	<!--
	$(function(){
		$.formValidator.initConfig({autotip:true,formid:"myform0",onerror:function(msg){}});
		$("#username0").formValidator({onshow:"<?php echo L('empty_username_tip');?>",onfocus:"<?php echo L('twety_byte');?>"}).inputValidator({min:2,max:20,onerror:"<?php echo L('twety_byte');?>"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"<?php echo L('username_error_tip');?>"});
		$("#password0").formValidator({onshow:"<?php echo L('empty_password_tip');?>",onfocus:"<?php echo L('short_password_tip');?>"}).inputValidator({min:6,max:20,onerror:"<?php echo L('short_password_tip');?>"});
	
	});
	//-->
	</script>
<div class="dl_main" style="border:none;margin:0px;padding-top:0px;">
<?php if($op=='olbind_have') { ?>
	<div class="dl_text" id='bind_have'>
    	<div class="dl_tab layout">
			<p><a href="index.php?m=denglu&c=user&a=olbind_have&op=olbind_haveno&t=3"><?php echo L('have_no_account');?></a></p>
			<p class="active"><a href="index.php?m=denglu&c=user&a=olbind_have&op=olbind_have&t=3"><?php echo L('have_account');?></a></p>
        </div>
        <form method='post' action='index.php?m=denglu&c=user&a=olbind_do_have' id='myform0'>
			<input type="hidden" name="olbind" value="bind" />
			<input type='hidden' value='olbind' name='action'>
	        <div class="dl_inform">
	            <div class="dl_form layout">
					<p><?php echo L('username');?></p>
	                <p><input id="username0" type="text" value="" name='username'/></p>
	                <p class="dl_wrong"></p>
	                <p class="dl_wrong"></p>
	            </div>
	            <div class="dl_form layout">
					<p><?php echo L('password','','denglu');?></p>
	                <p><input type="password" value="" name='password' id="password0"/></p>
	                <p class="dl_wrong"></p>
	                <p class="dl_point"></p>
	            </div>
	        </div>
	        <div class="dl_btn layout">
				<p>
				<input type="submit" value="  <?php echo L('bind_it');?>  " id="registerform" name="dosubmit" class="button_style">
				<!--<button tabindex="1" value="true" name="bind" type="submit" class="pn pnc"><span><?php echo L('bind_it');?></span></button>--></p>
				
	        </div>
        </form>
	<script language="javascript">
	function havedisplay(hide, show){
		 document.getElementById(hide).style.display = 'none';
		 document.getElementById(show).style.display = 'block';
		 var username = show + "_user";
		 init(username);
	}
	function init(username){
		var ctrl = document.getElementById(username);
		ctrl.focus();
	}
	init("bind_have_user");
	</script>
	</div>
	<?php } ?>
<?php if($op=='olbind_haveno') { ?>
	<div class="dl_text" id='bind_haveno'>
    	<div class="dl_tab layout">
        	<p class="active"><a href="index.php?m=denglu&c=user&a=olbind_have&op=olbind_haveno&t=3"><?php echo L('have_no_account');?></a></p>
			<p><a href="index.php?m=denglu&c=user&a=olbind_have&op=olbind_have&t=3"><?php echo L('have_account');?></a></p>
        </div>
        <form method='post' action="index.php?m=denglu&c=user&a=olbind_do_haveno" id='myform' name='myform'>
        <input type='hidden' value='olbind' name='action'>
		        <div class="dl_inform">
	            <div class="dl_form layout">
	                <p><?php echo L('dl_username');?></p>
					<p><input type="text"  maxlength="20" size="20" value="<?php echo $userinfo['screenName'];?>" id="username" name="username" class="input_blur">  </p>

	            </div>
	            <div class="dl_form layout">
	                <p><?php echo L('password','','denglu');?></p>
	                <p><input type="password" maxlength="16" size="20" id="password"  name="password" class="input_blur">  </p>
	                
	            </div>
	            <div class="dl_form layout">
	                <p><?php echo L('repeat_password');?></p>
	                <p><input type="password" maxlength="20" size="20" id="pwdconfirm"  name="pwdconfirm" class="input_blur">  </p>
	                
	            </div>
	            <div class="dl_form layout">
	                <p><?php echo L('email','','denglu');?></p>
	                <p><input type="text" size="30" id="email"  style="ime-mode:disabled" name="email" class="input_blur">  </p>
					
	            </div>
	        </div>
	        <div class="dl_btn layout">
	        	<p>
	        	<input type="submit" value="  <?php echo L('confirm');?>  " id="registerform" name="dosubmit" class="button_style">
	        	</p>
	            
	        </div>
        </form>
	</div>
	<?php } ?>
</div>

<?php } ?>
<?php if($op=='photo') { ?>
	<div class="st_text" >
		<p><?php echo L('myphoto_tip');?></p>
		<form method="POST" action='index.php?m=denglu&c=user&a=do_photo'>
			<ul class="st_piclist layout">
			<?php $n=1;if(is_array($myphoto)) foreach($myphoto AS $ret) { ?>
				<li>
				<div class="st_picradio"><input type="radio" value="<?php echo $ret['mediaUserID'];?>" name="muid"/></div>
				<div class="st_picsearch"><img src="phpcms/modules/denglu/avatar/<?php echo $ret['mediaUserID'];?>_middle.jpg" width="50" height="50" /><img class="st_picicon" src="<?php echo DENGLU_ROOT;?>images/denglu_second_icon_<?php echo $ret['mediaID'];?>.png" /></div>
				 </li>
				
			<?php $n++;}unset($n); ?>

			</ul>
			<div class="st_save"><p class="st_btn">
			<?php if($myphoto!=false) { ?><input type="submit" value="  <?php echo L('save');?>  " id="registerform" name="photoset" class="button_style"><?php } ?>
			<!--<button type="submit" name="photoset" value="true" class="pn pnc" /><strong><?php echo L('save');?></strong></button>--></p></div>
		
		</form>
	</div>
<?php } ?>
		<!------------------------------------------------------------------>

	</div>
  <!---------------------------------------------->

</div>
</div>
<div class="clear"></div>
<?php include template('member', 'footer'); ?>
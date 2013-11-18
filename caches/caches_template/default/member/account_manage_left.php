<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<div class="col-left col-1 left-memu">
        	<h5 class="title"><?php echo L('account_manage');?></h5>
            <ul>
                <li<?php if(ROUTE_A=="account_manage_info") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_info&t=1"><img src="<?php echo IMG_PATH;?>icon/user_edit.png" width="16" /> <?php echo L('modify').L('memberinfo');?></a></li>
                <li<?php if(ROUTE_A=="account_manage_avatar") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_avatar&t=1"><img src="<?php echo IMG_PATH;?>icon/vcard.png" width="16" /> <?php echo L('modify').L('avatar');?></a></li>
				<?php if(!empty($memberinfo['encrypt'])) { ?>
				<li<?php if(ROUTE_A=="account_manage_password") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_password&t=1"><img src="<?php echo IMG_PATH;?>icon/icon_key.gif" width="16" height="16" /> <?php echo L('modify').L('email');?>/<?php echo L('password');?></a></li>
				<?php } ?>
				<li<?php if(ROUTE_A=="account_manage_upgrade") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_upgrade&t=1"><img src="<?php echo IMG_PATH;?>icon/Upload.png" /> <?php echo L('member').L('allowupgrade');?></a></li>
				<li<?php if(ROUTE_A=="account_manage_upgrade") { ?> class="on"<?php } ?>><a href="index.php?m=member&c=index&a=account_manage_upgrade&t=1"><img src="<?php echo IMG_PATH;?>icon/Upload.png" /> <?php echo L('member').L('allowupgrade');?></a></li>
            </ul>
			<h6 class="title">会员邀请</h5>
			<ul>
				<li<?php if(ROUTE_A=="my_invite_code") { ?> class="on"<?php } ?>><a href="index.php?m=invite&c=index&a=my_invite_code&t=1">我的邀请码</a></li>
				<li<?php if(ROUTE_A=="my_invite_list") { ?> class="on"<?php } ?>><a href="index.php?m=invite&c=index&a=my_invite_list&t=1">邀请记录</a></li>
			</ul>
        <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
    </div>
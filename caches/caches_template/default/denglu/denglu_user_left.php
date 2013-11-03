<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>	<div class="col-left col-1 left-memu">
        	<h5 class="title"><?php echo L('denglu_setting');?></h5>
            <ul>
                <li<?php if(ROUTE_A=="bind") { ?> class="on"<?php } ?>><a href="index.php?m=denglu&c=user&a=bind&t=3"><img src="<?php echo IMG_PATH;?>icon/user_edit.png" width="16" /> <?php echo L('do_bind');?></a></li>
                <li<?php if(ROUTE_A=="myphoto") { ?> class="on"<?php } ?>><a href="index.php?m=denglu&c=user&a=myphoto&t=3"><img src="<?php echo IMG_PATH;?>icon/vcard.png" width="16" /> <?php echo L('myphoto');?></a></li>
            </ul>
        <span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
    </div>
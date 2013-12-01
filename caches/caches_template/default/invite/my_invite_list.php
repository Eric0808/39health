<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('member', 'header'); ?>
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<div id="memberArea">
<?php include template('member', 'account_manage_left'); ?>
<div class="col-auto">
<div class="col-1 ">
<h6 class="title">我的邀请记录</h6>
<div class="content">

<table width="100%" cellspacing="0"  class="table-list">
        <thead>
            <tr>
			<th width="8%">id</th>
            <th width="20%">昵称</th>
            <th width="15%">注册时间</th>
            </tr>
        </thead>
    <tbody>
	<?php $n=1;if(is_array($invite_logs)) foreach($invite_logs AS $info) { ?> 
	<tr>
	<th width="8%"  align="center"><?php echo $info['from_uid'];?></th>
	<th width="20%"  align="center"><?php echo $info['name'];?></th>
	<th width="15%"  align="center"><?php echo $info['time'];?></th>
	</tr>
	<?php $n++;}unset($n); ?>
    </tbody>
    </table>

 <div id="pages"> <?php echo $pages;?></div>
</div>
<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
</div>

</div>
</div>
<?php include template('member', 'footer'); ?>

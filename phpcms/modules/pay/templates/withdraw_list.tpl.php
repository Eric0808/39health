<?php 
	defined('IN_ADMIN') or exit('No permission resources.');
	include $this->admin_tpl('header','admin');
?>
<div class="pad_10">
<form name="myform" id="myform" action="" method="post" >
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
			<th width="3%"><input type="checkbox" value="" id="check_box" onclick="selectall('ids[]');"></th>
            <th width="5%">用户名</th>
            <th width="5%">真实姓名</th>
            <th width="5%">提现金额</th>
            <th width="5%">提现类型</th>
            <th width="8%">提现账号</th>
            <th width="8%">邮箱</th>
            <th width="8%">电话</th>
            <th width="20%">备注</th>
			<th width="5%">状态</th>
			<th width="5%">申请时间</th>
            </tr>
        </thead>
    <tbody>
  <?php foreach($list as $info) {?>
	<tr>
	<td width="3%" align="center"><input class="inputcheckbox " name="ids[]" value="<?php echo $info['id'];?>" type="checkbox"></td>
	<td width="5%" align="center"><?php echo $info['username']?></td>
	<td width="5%" align="center"><?php echo $info['truename']?></td>
	<td width="5%" align="center"><?php echo $info['cut_total']?></td>
	<td width="5%" align="center"><?php echo $info['bank']?></td>
	<td width="8%" align="center"><?php echo $info['account']?></td>
	<td width="8%" align="center"><?php echo $info['email']?></td>
	<td width="8%" align="center"><?php echo $info['telephone']?></td>
	<td width="20%" align="center"><?php echo $info['usernote']?></td>
	<td width="8%" align="center"><?php echo $info['status']?></td>
	<td  width="8%" align="center"><?php echo date('Y-m-d H:i:s',$info['addtime'])?></td>
	
	</tr>
	<?php }?>
    </tbody>
    </table>
<div class="btn"><label for="check_box"><?php echo L('selected_all');?>/取消</label>
<input type="button" class="button" value="审核不通过" onclick="check_fail();"/>&nbsp;&nbsp;
<input type="button" class="button" value="处理成功" onclick="check_ok();"/>&nbsp;&nbsp;
 <div id="pages"> <?php echo $pages?></div>
</div>
</div>
</form>
<script type="text/javascript"> 
<!--
function check_fail() {
	var str = 0;
	var id = tag = '';
	$("input[name='ids[]']").each(function() {
		if($(this).attr('checked')=='checked') {
			str = 1;
			id += tag+$(this).val();
			tag = '|';
		}
	});
	if(str==0) {
		alert('请选择操作项！');
		return false;
	}
	document.getElementById('myform').action='?m=pay&c=spend&a=check_fail&id='+id;
	document.getElementById('myform').submit();
	
}
function check_ok() {
	var str = 0;
	var id = tag = '';
	$("input[name='ids[]']").each(function() {
		if($(this).attr('checked')=='checked') {
			str = 1;
			id += tag+$(this).val();
			tag = '|';
		}
	});
	if(str==0) {
		alert('请选择操作项！');
		return false;
	}
	document.getElementById('myform').action='?m=pay&c=spend&a=check_ok&id='+id;
	document.getElementById('myform').submit();
	
}
//-->
</script>
</body>
</html>
